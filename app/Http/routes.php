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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', 'WelcomeController@index');

//VideoController
Route::get('video/{n}', 'VideoController@viewVideo')->where('n', '[0-9]+');

//userController
Route::resource('user', 'UserController');

// Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
// Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

//AbonnementController
Route::get('/abonnement', 'AbonnementController@index');
Route::get('/abonnement/{n}', 'AbonnementController@AchatVideoOuAbonnement')->where('n', '[0-9]+');
