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

/*Route::get('/', 'WelcomeController@index');*/

/*Route::get('home', 'HomeController@index');*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
/*Route::controller('/auth', 'AuthController');*/

	Route::get('/', 'NewHomeController@intro');
	Route::get('/home', ['middleware'=>'auth','uses'=> 'NewController@index']);
	Route::get('/home/posts', 'PostController@allPosts');
	Route::get('/home/post/{id}', 'PostController@getPost');
	Route::post('/home/post', 'PostController@addPost');
	Route::get('/home/post', 'PostController@viewPost');
	Route::post('/home/post/{id}', 'CommentController@addComment');
	
	
	
