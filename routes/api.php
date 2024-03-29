<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\CitiesController;
use App\Http\Controllers\Api\FavoritesController;
use App\Http\Controllers\Api\ProducerManagementController;
use App\Http\Controllers\Api\ProducersController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\ProductsManagementController;
use App\Http\Controllers\Api\ProfileManagementController;
use App\Http\Controllers\Api\QuizesManagementController;
use App\Http\Controllers\Api\ReviewsController;

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
    Route::get('/producers', [ProducersController::class, 'list']);

    Route::get('/products/best-rated', [ProductsController::class, 'getBestRated']);
    Route::get('/producers/best-rated', [ProducersController::class, 'getBestRated']);

    Route::get('/products/{product}', [ProductsController::class, 'getById']);
    Route::get('/producers/{producer}', [ProducersController::class, 'getById']);

    Route::get('/products/{product}/reviews', [ReviewsController::class, 'listProductReviews']);
    Route::get('/producers/{producer}/reviews', [ReviewsController::class, 'listProducerReviews']);

    Route::get('/quizes/{quiz}', [QuizesManagementController::class, 'getById']);    
    
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

        Route::post('/products/{product}/reviews', [ReviewsController::class, 'createProductReview']);
        Route::post('/producers/{producer}/reviews', [ReviewsController::class, 'createProducerReview']);

        Route::put('/account/profile', [ProfileManagementController::class, 'updateProfile']);
        Route::put('/account/password', [ProfileManagementController::class, 'updatePassword']);
        Route::delete('/account', [ProfileManagementController::class, 'deleteAccount']);

        Route::get('/account/producer', [ProducerManagementController::class, 'getCurrentProducer']);
        Route::put('/account/producer', [ProducerManagementController::class, 'updateProducer']);
        Route::put('/account/producer/address', [ProducerManagementController::class, 'updateAddress']);
        Route::post('/account/producer/profile-picture', [ProducerManagementController::class, 'updateProfilePicture']);
        Route::post('/account/producer/contacts/replace', [ProducerManagementController::class, 'replaceContacts']);

        Route::get('/account/producer/products', [ProductsManagementController::class, 'list']);
        Route::get('/account/producer/products/{product}', [ProductsManagementController::class, 'getById']);
        Route::post('/account/producer/products', [ProductsManagementController::class, 'create']);
        Route::put('/account/producer/products/{product}', [ProductsManagementController::class, 'update']);
        Route::delete('/account/producer/products/{product}', [ProductsManagementController::class, 'delete']);

        Route::get('/account/producer/quizes', [QuizesManagementController::class, 'list']);
        Route::post('/account/producer/quizes', [QuizesManagementController::class, 'create']);
        Route::put('/account/producer/quizes/{quiz}', [QuizesManagementController::class, 'update']);
        Route::delete('/account/producer/quizes/{quiz}', [QuizesManagementController::class, 'delete']);
    });
});

