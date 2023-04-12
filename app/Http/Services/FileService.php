<?php

namespace App\Http\Services;

use App\Dto\UpdateProducerAddressInputDto;
use App\Dto\UpdateProducerInputDto;
use App\Models\Address;
use App\Models\Producer;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class FileService
{
  const UPLOADS_PATH = 'storage';

  public function __construct(
    private AuthService $authService
  ) { }

  public function upload(UploadedFile $file, $destination): ?File
  {
    if (!str_starts_with($destination, '/')) {
      $destination = "/{$destination}";
    }

    $original_filename = $file->getClientOriginalName();
    
    $original_filename_arr = explode('.', $original_filename);

    $file_ext = end($original_filename_arr);

    $newFileName = time() . '.' . $file_ext;

    $uploadedFile = $file->move(self::UPLOADS_PATH . $destination, $newFileName);
    
    return $uploadedFile ?? null;
  }

  public function delete(string $fullFilePath): bool
  {
    return true; // todo fix this;
    return Storage::delete($fullFilePath);
  }
}
