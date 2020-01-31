<?php

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
Route::get('/', 'General\GeneralController@index');
Route::get('/information', 'General\GeneralController@info_index');
Route::get('contact', 'General\GeneralController@contact');

Auth::routes();

Route::get('admin-panel', 'HomeController@index')->name('admin');

Route::post('admin-panel/picture/upload', 'Admin\ImageController@upload')->name('picture.upload');
Route::resource('admin-panel/class_type_product', 'Admin\ClassTypeProductController');
Route::resource('admin-panel/type_product', 'Admin\TypeProductController');
Route::resource('admin-panel/product', 'Admin\ProductController');
Route::resource('admin-panel/parameter_product', 'Admin\ParameterProductController');
Route::resource('admin-panel/parameter', 'Admin\ParameterController');
Route::resource('admin-panel/picture', 'Admin\PictureController');
Route::resource('admin-panel/picture_product', 'Admin\PictureProductController');
Route::resource('admin-panel/user', 'Admin\UserController');
Route::resource('admin-panel/prices_product', 'Admin\PricesProductController');
Route::resource('/catalog', 'General\CatalogController');