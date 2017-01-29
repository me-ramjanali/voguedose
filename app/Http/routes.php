<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();
Route::get('/', 'HomeController@index');
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('/home', 'HomeController@index');
Route::post('/user_signup', 'Auth\AuthController@user_signup');
Route::post('/check_user_email', 'Auth\AuthController@check_user_email');
Route::group(['middleware' => ['auth']], function () {
	Route::get('/create_style_profile', 'OrderController@index');
	Route::post('/order', 'OrderController@add_order');
	Route::get('/success', 'OrderController@success');
});
// management part
Route::get('admin/login', 'Admin\AuthController@showLoginForm')->middleware('adminLoggedIn');
Route::post('admin/login', 'Admin\AuthController@login');
// admin password reset
Route::post('admin/password/email','Admin\PasswordController@sendResetLinkEmail');
Route::post('admin/password/reset','Admin\PasswordController@reset');
Route::get('admin/password/reset/{token?}','Admin\PasswordController@showResetForm');

Route::group(['middleware' => ['admin']], function () {
	Route::get('/admin', 'Admin\HomeController@index');
	Route::get('admin/logout', 'Admin\AuthController@logout');
	Route::get('admin/dashboard', 'Admin\HomeController@index');
	Route::get('admin/profile', 'Admin\ProfileController@my_profile');
	Route::post('admin/check_username', 'Admin\ProfileController@check_username');
	Route::post('admin/check_email', 'Admin\ProfileController@check_email');
	Route::post('admin/update_profile', 'Admin\ProfileController@update_profile');
	Route::get('admin/in_progress', 'Admin\OrderController@on_process');
	Route::get('admin/details/{order_id}', 'Admin\OrderController@order_details');
	Route::get('admin/completed', 'Admin\OrderController@completed_orders');
	Route::get('admin/inventory', 'Admin\ProductController@inventory');
	Route::post('admin/add_product', 'Admin\ProductController@createProduct');
	Route::post('admin/update_product/{product_id}', 'Admin\ProductController@updateProduct');
	Route::post('admin/get_dose_no', 'Admin\ProductController@get_dose_no');
	Route::post('admin/check_order_no', 'Admin\ProductController@check_order_no');
	Route::post('admin/add_to_list', 'Admin\ProductController@add_to_list');
	Route::post('admin/assign_dose', 'Admin\OrderController@assign_dose');
	Route::get('admin/user', 'Admin\AdminUserController@index');
	Route::get('admin/add_user', 'Admin\AdminUserController@create_user_view');
	Route::post('admin/create_user', 'Admin\AdminUserController@create_user');
	Route::get('admin/edit_user/{user_id}', 'Admin\AdminUserController@edit_user');
	Route::post('admin/edit_user/{user_id}', 'Admin\AdminUserController@update_user');
	Route::get('admin/delete_user/{user_id}', 'Admin\AdminUserController@delete_user');
	Route::get('admin/customer', 'Admin\CustomerController@index');
	Route::get('admin/block_customer/{user_id}', 'Admin\CustomerController@block_customer');
	Route::get('admin/unblock_customer/{user_id}', 'Admin\CustomerController@unblock_customer');
	Route::get('admin/styler', 'Admin\StylerController@index');
	Route::get('admin/add_styler', 'Admin\StylerController@create_styler_view');
	Route::post('admin/create_styler', 'Admin\StylerController@create_styler');
	Route::get('admin/edit_styler/{styler_id}', 'Admin\StylerController@edit_styler');
	Route::post('admin/edit_styler/{styler_id}', 'Admin\StylerController@update_styler');
	Route::get('admin/delete_styler/{styler_id}', 'Admin\StylerController@delete_styler');
	Route::get('admin/consumer', 'Admin\ConsumerController@index');
	Route::get('admin/show_history/{user_id}', 'Admin\ConsumerController@show_user_history');
});
// styler section
Route::get('styler/login', 'Styler\AuthController@showLoginForm')->middleware('stylerLoggedIn');
Route::post('styler/login', 'Styler\AuthController@login');
// styler password reset
Route::post('styler/password/email','Styler\PasswordController@sendResetLinkEmail');
Route::post('styler/password/reset','Styler\PasswordController@reset');
Route::get('styler/password/reset/{token?}','Styler\PasswordController@showResetForm');

Route::group(['middleware' => ['styler']], function () {
	Route::get('/styler', 'Styler\HomeController@index');
	Route::get('styler/logout', 'Styler\AuthController@logout');
	Route::get('styler/dashboard', 'Styler\HomeController@index');
	Route::get('styler/details/{order_id}', 'Styler\OrderController@order_details');
	Route::get('styler/accept/{order_id}', 'Styler\OrderController@order_accept');
	Route::get('styler/reject/{order_id}', 'Styler\OrderController@order_decline');
	Route::get('styler/in_progress', 'Styler\OrderController@on_process');
	Route::get('styler/inventory', 'Styler\ProductController@inventory');
	Route::post('styler/add_product', 'Styler\ProductController@createProduct');
	Route::post('styler/update_product/{product_id}', 'Styler\ProductController@updateProduct');
	Route::post('styler/get_dose_no', 'Styler\ProductController@get_dose_no');
	Route::post('styler/check_order_no', 'Styler\ProductController@check_order_no');
	Route::post('styler/add_to_list', 'Styler\ProductController@add_to_list');
	Route::get('styler/cloth_set', 'styler\ClothSetController@index');
	Route::post('styler/get_product_by_type', 'styler\ProductController@get_product_by_type');
	Route::get('styler/completed', 'Styler\OrderController@completed_orders');
	Route::get('styler/complete/{id}', 'Styler\OrderController@order_complete');
	Route::get('styler/profile', 'Styler\ProfileController@my_profile');
	Route::post('styler/check_username', 'Styler\ProfileController@check_username');
	Route::post('styler/check_email', 'Styler\ProfileController@check_email');
	Route::post('styler/update_profile', 'Styler\ProfileController@update_profile');
});