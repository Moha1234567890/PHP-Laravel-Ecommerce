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
    Route::get('/add-category', 'Admin\CategoryController@add')->name('add');
    Route::post('/add', 'Admin\CategoryController@insert')->name('insert');
    Route::get('/category-edit/{id}', 'Admin\CategoryController@edit')->name('edit');
    Route::put('/category-update/{id}', 'Admin\CategoryController@update')->name('update');
    
 });