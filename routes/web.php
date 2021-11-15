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

Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::get('/Admin/index' , 'Admin\AdminController@index')->name('admin');

//Product
Route::get('/Admin/product/index' , 'Admin\ProductController@index')->name('product');
Route::get('/Admin/product/add_products' , 'Admin\ProductController@add')->name('add_product');
Route::get('/Admin/product/edit_products' , 'Admin\ProductController@edit')->name('edit_product');

//Type_product
Route::get('/Admin/type_product/index' , 'Admin\Type_product_Controller@index')->name('type_product');
Route::get('/Admin/type_product/from_add_type_products' , 'Admin\Type_product_Controller@add')->name('add_type');

Route::post('/Admin/type_product/create' , 'Admin\Type_product_Controller@create')->name('create_type');
Route::post('/Admin/type_product/update/{id}' , 'Admin\Type_product_Controller@update');
Route::get('/Admin/type_product/edit_type/{id}' , 'Admin\Type_product_Controller@edit');
Route::get('/Admin/type_product/delete/{id}' , 'Admin\Type_product_Controller@delete');

//Show
Route::get('/Admin/show/index' , 'Admin\ShowController@index')->name('show');
Route::get('/Admin/show/add_shows' , 'Admin\ShowController@add')->name('add_show');

Route::post('/Admin/show/create' , 'Admin\ShowController@create')->name('create_show');
Route::post('Admin/show/update/{id}', 'Admin\ShowController@update');
Route::get('/Admin/show/edit_show/{id}' , 'Admin\ShowController@edit');
Route::get('/Admin/show/delete/{id}' , 'Admin\ShowController@delete');

//Body
Route::get('/Admin/body/index' , 'Admin\Bodycontroller@index')->name('body');
Route::get('/Admin/body/from_add_bodys' , 'Admin\BodyController@add')->name('add_body');
Route::get('/Admin/body/from_edit_bodys' , 'Admin\BodyController@edit')->name('edit_body');

//Header
Route::get('/Admin/header/index' , 'Admin\HeaderController@index')->name('header');
Route::get('/Admin/header/from_add_headers' , 'Admin\HeaderController@add')->name('add_header');
Route::get('/Admin/header/from_edit_headers' , 'Admin\HeaderController@edit')->name('edit_header');