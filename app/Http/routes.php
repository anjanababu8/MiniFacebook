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

Route::get('/',[
	'uses' => '\App\Http\Controllers\WelcomeController@index',
	'as'=>'welcome']
	);
	
Route::get('alert', function(){
	return redirect()->route('welcome')->with('info','You have signed in successfully!');
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/** Authentication **/
Route::get('/signup',[
	'uses' => '\App\Http\Controllers\AuthController@getSignUp',
	'as'=>'auth.signup'
	]);