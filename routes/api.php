<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'RegisterController');
Route::post('/login', 'LoginController');
Route::middleware('auth:sanctum')->get('/logout', 'LogoutController');

Route::group(['namespace' => 'Category'], function() 
{
    Route::get('/categories', 'IndexController');
    Route::get('/categories/{category}', 'ShowController');
    Route::middleware('auth:sanctum')->post('/categories', 'StoreController');
    Route::middleware('auth:sanctum', 'is_creator')->patch('/categories/{category}', 'UpdateController');
    Route::middleware('auth:sanctum', 'is_creator')->delete('/categories/{category}', 'DestroyController');
});

Route::group(['namespace' => 'Product'], function() 
{
    Route::get('/categories/{category}/products', 'IndexController');
    Route::get('/categories/{category}/products/{product}', 'ShowController');
    Route::middleware('auth:sanctum')->post('/categories/{category}/products', 'StoreController');
    Route::middleware('auth:sanctum', 'is_creator')->patch('/categories/{category}/products/{product}', 'UpdateController');
    Route::middleware('auth:sanctum', 'is_creator')->delete('/categories/{category}/products/{product}', 'DestroyController');
});


