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
Route::post('/user_login', 'Auth\AuthController@user_login');
Route::post('/user_signup', 'Auth\AuthController@user_signup');
Route::post('/check_user_email', 'Auth\AuthController@check_user_email');
Route::group(['middleware' => ['auth']], function () {
	Route::get('/create_style_profile', 'OrderController@index');
	Route::post('/order', 'OrderController@add_order');
});
// management part
Route::get('admin/login', 'Admin\AuthController@showLoginForm');
Route::post('admin/login', 'Admin\AuthController@login');
Route::group(['middleware' => ['admin']], function () {
	Route::get('/admin', 'Admin\HomeController@index');

	Route::get('admin/logout', 'Admin\AuthController@logout');
	// Route::get('admin/register', 'Admin\AuthController@showRegistrationForm');

	// Route::post('admin/register', 'Admin\AuthController@register');
	Route::get('admin/dashboard', 'Admin\HomeController@index');
});
// styler section
Route::get('/styler', 'Styler\HomeController@index');
Route::get('styler/login', 'Styler\AuthController@showLoginForm');
Route::post('styler/login', 'Styler\AuthController@login');
// styler password reset
Route::post('styler/password/email','Styler\PasswordController@sendResetLinkEmail');
Route::post('styler/password/reset','Styler\PasswordController@reset');
Route::get('styler/password/reset/{token?}','Styler\PasswordController@showResetForm');

Route::group(['middleware' => ['styler']], function () {
	Route::get('styler/logout', 'Styler\AuthController@logout');
	// Route::get('styler/register', 'Styler\AuthController@showRegistrationForm');
	// Route::post('styler/register', 'Styler\AuthController@register');
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
	Route::get('styler/completed', 'Styler\OrderController@completed_orders');
	Route::get('styler/complete/{id}', 'Styler\OrderController@order_complete');
	Route::get('styler/profile', 'Styler\ProfileController@my_profile');
	Route::post('styler/check_username', 'Styler\ProfileController@check_username');
	Route::post('styler/check_email', 'Styler\ProfileController@check_email');
	Route::post('styler/update_profile', 'Styler\ProfileController@update_profile');
});