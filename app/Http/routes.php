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

use App\Video;
Route::get('/', function() {
    $videos = Video::all();

    return view('welcome')->withVideos($videos);
});

//VideoController
Route::get('video/{n}', 'VideoController@viewVideo')->where('n', '[0-9]+');
