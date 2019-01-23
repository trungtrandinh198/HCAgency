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
	Route::delete('/action-delete-category/{id}', 'CategoryController@deleteCategory')->name('deleteCategory');
});
Route::group(['prefix'=>'order','as' => 'order.'],function(){
	Route::get('/', 'OrderController@index')->name('index');
});
//route về sản phẩm
Route::group(['prefix'=>'product','as' => 'product.'],function(){
	Route::get('/', 'ProductController@index')->name('index');
	//thêm mới
	Route::get('/add-product', 'ProductController@showAddProduct')->name('showAddProduct');
	Route::post('/action-add-product', 'ProductController@addProduct')->name('addProduct');
	//chỉnh sửa
	Route::get('/edit-product/{id}', 'ProductController@showEditProduct')->name('showEditProduct');
	Route::post('/action-edit-product', 'ProductController@editProduct')->name('editProduct');
	//delete
	Route::delete('/action-delete-product/{id}', 'ProductController@deleteProduct')->name('deleteProduct');
});
//route về khách hàng
Route::group(['prefix'=>'customer','as' => 'customer.'],function(){
	Route::get('/', 'CustomerController@index')->name('index');
	//thêm mới
	Route::get('/add-customer', 'CustomerController@showAddCustomer')->name('showAddCustomer');
	Route::post('/action-add-customer', 'CustomerController@addCustomer')->name('addCustomer');
	//chỉnh sửa
	Route::get('/edit-customer/{id}', 'CustomerController@showEditCustomer')->name('showEditCustomer');
	Route::post('/action-edit-customer', 'CustomerController@editCustomer')->name('editCustomer');
	//delete
	Route::delete('/action-delete-customer/{id}', 'CustomerController@deleteCustomer')->name('deleteCustomer');
});





