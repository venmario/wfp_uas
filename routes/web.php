<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layoutAdmin.sbadmin');
});

Route::resource('brand', 'BrandController');
Route::resource('category', 'CategoryController');
Route::resource('image', 'ImageController');
Route::resource('product', 'ProductController');
Route::resource('role', 'RoleController');
Route::resource('transaction', 'TransactionController');
Route::resource('transactionDetail', 'TransactionDetailController');
Route::resource('user', 'UserController');