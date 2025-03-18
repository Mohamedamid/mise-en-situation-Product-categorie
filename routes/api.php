<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProductController;

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

Route::post('/categories',[CategorieController::class,'store']);
Route::put('/editcategories/{categorieid}',[CategorieController::class,'update']);
Route::delete('/deletecategories/{categorieid}',[CategorieController::class,'delete']);
Route::get('/categories/{categorieid}',[CategorieController::class,'show']);

Route::post('/products',[ProductController::class,'store']);
Route::put('/editproducts/{productid}',[ProductController::class,'update']);
Route::delete('/deleteproducts/{productid}',[ProductController::class,'delete']);
Route::get('/products/{productid}',[ProductController::class,'show']);