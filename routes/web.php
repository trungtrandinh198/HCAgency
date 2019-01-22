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

Auth::routes();

Route::get('/', 'DashboardController@index')->name('Dashboard');

Route::group(['prefix'=>'category','as' => 'category.'],function(){
	Route::get('/', 'CategoryController@index')->name('index');
	//thêm mới
	Route::get('/add-category', 'CategoryController@showAddCategory')->name('showAddCategory');
	Route::post('/action-add-category', 'CategoryController@addCategory')->name('addCategory');
	//chỉnh sửa
	Route::get('/edit-category/{id}', 'CategoryController@showEditCategory')->name('showEditCategory');
	Route::post('/action-edit-category', 'CategoryController@editCategory')->name('editCategory');
	//delete
	Route::post('/action-delete-category/{id}', 'CategoryController@deleteCategory')->name('deleteCategory');
});
Route::group(['prefix'=>'order','as' => 'order.'],function(){
	Route::get('/', 'OrderController@index')->name('index');
});
Route::group(['prefix'=>'product','as' => 'product.'],function(){
	Route::get('/', 'ProductController@index')->name('index');
});
Route::group(['prefix'=>'customer','as' => 'customer.'],function(){
	Route::get('/', 'CustomerController@index')->name('index');
});
Route::group(['prefix'=>'user','as' => 'user.'],function(){
	Route::get('/', 'UserController@index')->name('index');
});





