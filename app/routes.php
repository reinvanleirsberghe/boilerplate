<?php

/*
 * Pages
 */
Route::get('/', [
	'as'   => 'home',
	'uses' => 'PagesController@home'
]);

/*
 * Sign Up
 */
Route::get('signup', [
	'as'   => 'registration_path',
	'uses' => 'RegistrationController@create'
]);

Route::post('signup', [
	'as'   => 'registration_path',
	'uses' => 'RegistrationController@store'
]);

/*
 * Account
 */
Route::get('account', [
	'as'   => 'account_path',
	'uses' => 'AccountController@create'
]);

Route::post('account', [
	'as'   => 'account_path',
	'uses' => 'AccountController@store'
]);

/*
 * Sessions
 */
Route::get('login', [
	'as'   => 'login_path',
	'uses' => 'SessionsController@create'
]);

Route::post('login', [
	'as'   => 'login_path',
	'uses' => 'SessionsController@store'
]);

Route::get('logout', [
	'as'   => 'logout_path',
	'uses' => 'SessionsController@destroy'
]);

/*
 * Password resets
 */
Route: Route::controller('password', 'RemindersController');