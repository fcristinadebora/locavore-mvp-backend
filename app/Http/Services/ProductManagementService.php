<?php

namespace App\Http\Services;

use App\Dto\CreateOrUpdateProductsInputDto;
use App\Http\Services\Traits\PrivateServiceTrait;
use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;

class ProductManagementService
{
  use PrivateServiceTrait;

  public function __construct(
    private ProducerManagementService $producerService,
    private FileService $fileService
  ) { }

  public function list(string $search = '', int $page = 1, int $perPage = 0): LengthAwarePaginator
  {
    $producer = $this->producerService->getCurrentProducerOrFail();
    
    return Product::listPaginatedByProducer($producer->id, $search, $page, $perPage);
  }

  public function create(CreateOrUpdateProductsInputDto $dto): ?Product
  {
    $producer = $this->producerService->getCurrentProducerOrFail();

    $product = new Product();
    $product->producer_id = $producer->id;

    if ($dto->image) {
      $uploadedFile = $this->fileService->upload($dto->image, Product::IMAGES_FOLDER);
      $product->image = $uploadedFile ? $uploadedFile->getFilename() : null;
      $dto->image = null;
    }
    
    foreach ($dto as $key => $value) {
        // Skip null values
        if ($value === null) {
            continue;
        }

        if (in_array($key, $product->fillable ?? []) && !is_array($value)) {
            $product->$key = $value;
        }
    }
        
    $product->save();
    $product->categories()->sync($dto->categories);

    return $product;
  }

  public function update(Product $product, CreateOrUpdateProductsInputDto $dto): Product
  {
    $this->producerService->getCurrentProducerOrFail();
    
    $oldImagePath = null;
    if ($dto->image) {
        $oldImagePath = $product->getImagePath();
        $uploadedFile = $this->fileService->upload($dto->image, Product::IMAGES_FOLDER);
        $product->image = $uploadedFile ? $uploadedFile->getFilename() : null;
        $dto->image = null;
    } else if ($dto->delete_image) {
      $oldImagePath = $product->getImagePath();
      $product->image = null;
    }
    
    foreach ($dto as $key => $value) {
        // Skip null values
        if ($value === null) {
            continue;
        }

        if (in_array($key, $product->fillable ?? []) && !is_array($value)) {
            $product->$key = $value;
        }
    }
        
    $saved = $product->save();
    if ($saved && $oldImagePath) {
      $this->fileService->delete($oldImagePath);
    }

    $product->categories()->sync($dto->categories);

    return $product;
  }

  public function delete(Product $product): bool
  {
    $this->producerService->getCurrentProducerOrFail();
    
    $oldImagePath = $product->getImagePath();

    $product->categories()->detach();
    $deleted = $product->delete();
    if ($deleted) {
        $this->fileService->delete($oldImagePath);
    }

    return $deleted;
  }
}
