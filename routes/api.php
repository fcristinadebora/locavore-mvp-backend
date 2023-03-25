<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\CitiesController;
use App\Http\Controllers\Api\FavoritesController;
use App\Http\Controllers\Api\ProducersController;
use App\Http\Controllers\Api\ProductsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/health', function (Request $request) {
    return response()->json(['success' => true]);
});

Route::middleware('auth.apikey')->group(function () {
    // Public routes    
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::get('/cities/search', [CitiesController::class, 'search']);
    Route::get('/cities/{city}', [CitiesController::class, 'getById']);

    Route::get('/products', [ProductsController::class, 'list']);
    Route::get('/products/{product}', [ProductsController::class, 'getById']);
    Route::get('/producers', [ProducersController::class, 'list']);
    Route::get('/producers/{producer}', [ProducersController::class, 'getById']);

    Route::get('/categories', [CategoriesController::class, 'getAll']);

    // User-guarded routes
    Route::middleware('auth:api')->group(function () {
        Route::delete('/logout', [AuthController::class, 'logout']);
        Route::get('/user', [AuthController::class, 'user']);

        Route::post('/favorites/products/{product}', [FavoritesController::class, 'toggleFavoriteProduct']);
        Route::post('/favorites/producers/{producer}', [FavoritesController::class, 'toggleFavoriteProducer']);
        Route::get('/favorites/products/{product}', [FavoritesController::class, 'isFavoriteProduct']);
        Route::get('/favorites/producers/{producer}', [FavoritesController::class, 'isFavoriteProducer']);
        Route::get('/favorites/products', [FavoritesController::class, 'getPersonFavoriteProducts']);
        Route::get('/favorites/producers', [FavoritesController::class, 'getPersonFavoriteProducers']);
       
        // Producer quiz
        // Route::post('/quiz') //Update quiz step
        // Route::post('categories/custom') //create custom category
        // Route::put('producer/categories') //set producer categories
        // Route::put('producer') //Update producer different fields
        // Route::put('producer/address') // Update producer address
        // Route::put('producer/contacts') // Update producer address
    });
});

