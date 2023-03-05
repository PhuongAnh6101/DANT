<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Product_detailController;
use App\Http\Controllers\Product_imageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Users\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'store']);
//Route::group(['middleware'=> 'checkAdminLogin'],funtion(){})
Route::get('/',[HomeController::class,'index']);
 
Route::middleware(['auth'])->group(function(){

Route::prefix('admin')->group(function () {
Route::get('/',[MainController::class,'index']);
    
Route::get('banner',[BannerController::class,'index']);
Route::get('banner/create',[BannerController::class,'create']);
Route::post('banner/create',[BannerController::class,'store']);
Route::get('banner/update/{id}',[BannerController::class,'edit']);
Route::put('banner/update/{id}',[BannerController::class,'update']);
Route::delete('banner/delete/{id}',[BannerController::class,'destroy']);

Route::get('category',[CategoryController::class,'index']);
Route::get('category/create',[CategoryController::class,'create']);
Route::post('category/create',[CategoryController::class,'store']);
Route::get('category/update/{id}',[CategoryController::class,'edit']);
Route::put('category/update/{id}',[CategoryController::class,'update']);
Route::delete('category/delete/{id}',[CategoryController::class,'destroy']);

Route::get('product',[ProductController::class,'index']);
Route::get('product/create',[ProductController::class,'create']);
Route::post('product/create',[ProductController::class,'store']);
Route::get('product/update/{id}',[ProductController::class,'edit']);
Route::put('product/update/{id}',[ProductController::class,'update']);
Route::delete('product/delete/{id}',[ProductController::class,'destroy']);

Route::get('product_detail/{id}',[Product_detailController::class,'index']);
Route::get('product_detail/create/{id}',[Product_detailController::class,'create']);
Route::put('product_detail/create/{id}',[Product_detailController::class,'store']);
Route::get('product_detail/update/{id}',[Product_detailController::class,'edit']);
Route::put('product_detail/update/{id}',[Product_detailController::class,'update']);
Route::delete('product_detail/delete/{id}',[Product_detailController::class,'destroy']);


Route::get('product_image/{id}',[Product_imageController::class,'index']);
Route::get('product_image/create/{id}',[Product_imageController::class,'create']);
Route::put('product_image/create/{id}',[Product_imageController::class,'store']);
Route::delete('product_image/delete/{id}',[Product_imageController::class,'destroy']);
    });
});

?>
