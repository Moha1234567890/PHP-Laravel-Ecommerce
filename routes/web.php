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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard', 'Admin\FrontendController@index');
    Route::get('/categories', 'Admin\CategoryController@index');
    Route::get('/add-category', 'Admin\CategoryController@add')->name('add.category');
    Route::post('/insert-category', 'Admin\CategoryController@insert')->name('insert.category');
    Route::get('/category-edit/{id}', 'Admin\CategoryController@edit')->name('edit.category');
    Route::put('/category-update/{id}', 'Admin\CategoryController@update')->name('update.category');
    Route::get('/category-delete/{id}', 'Admin\CategoryController@delete')->name('delete.category');



    Route::get('/products', 'Admin\ProductsController@index')->name('products');
    Route::get('/add-product', 'Admin\ProductsController@add')->name('add.product');
    Route::post('/insert-product', 'Admin\ProductsController@insert')->name('insert.product');
    Route::get('/product-edit/{id}', 'Admin\ProductsController@edit')->name('edit.product');
    Route::put('/product-update/{id}', 'Admin\ProductsController@update')->name('update.product');
    Route::get('/product-delete/{id}', 'Admin\ProductsController@delete')->name('delete.product');

 });