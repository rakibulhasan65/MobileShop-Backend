<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\LoginController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Api\V1\CustomerApiController;
use App\Http\Controllers\Api\V1\FrontendApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('v1')->group(function () {

    Route::post('/user/register',[LoginController::class,'register']);
    Route::post('/user/login',[LoginController::class,'login']);
    Route::post('/user/logout',[LoginController::class,'logout']);



    // Route::get('/users',[FrontendApiController::class,'users']);
    Route::get('/settings',[FrontendApiController::class,'settings']);
    Route::get('/categories',[FrontendApiController::class,'categories']);
    Route::get('/category/{slug}',[FrontendApiController::class,'categoryWiseProduct']);
    Route::get('/brands',[FrontendApiController::class,'brands']);
    Route::get('/brand/{slug}',[FrontendApiController::class,'brandWiseProduct']);
    Route::get('/products',[FrontendApiController::class,'products']);
    Route::get('/product/{slug}',[FrontendApiController::class,'productSingle']);

    Route::post('/check/coupon',[FrontendApiController::class,'couponCheck']);

    Route::post('/subscription',[FrontendApiController::class,'subscription']);
    Route::get('/blogs',[FrontendApiController::class,'blogs']);
    Route::get('/blog/{slug}',[FrontendApiController::class,'singleBlog']);
    Route::get('/blog/categories',[FrontendApiController::class,'blogCategories']);
    Route::get('/blog/category/{slug}',[FrontendApiController::class,'categoryWiseBlog']);


    //


});



Route::prefix('v1')->middleware('auth:sanctum')->group(function () {


    Route::post('/user/logout',[LoginController::class,'logout']);
    Route::get('/auth/user',[LoginController::class,'userInfo']);
    Route::post('/auth/logout',[LoginController::class,'logout']);
    Route::post('/auth/profile/change-password',[LoginController::class,'changePassword']);
    Route::get('/auth/profile/details',[LoginController::class,'profileDetails']);
    Route::post('/auth/profile/update',[LoginController::class,'profileUpdate']);

    Route::post('/customer/wishlist/add',[CustomerApiController::class,'storeWishlist']);
    Route::get('/customer/wishlist',[CustomerApiController::class,'getUserWishlist']);
    Route::get('/orders',[CustomerApiController::class,'orders']);
    Route::post('/order/store',[CustomerApiController::class,'orderStore']);
    Route::get('/order/details/{order}',[CustomerApiController::class,'orderDetails']);

    Route::post('/customer/review/rating/add',[CustomerApiController::class,'reviewRatingStore']);




});