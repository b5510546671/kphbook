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

/*Route::get('/', function () {
    $fullname = 'ศุภวิชญ์ คงวุฒิคุณากร';
    return view('welcome') -> with('name', $fullname);
});
*/

Route::get('/', 'PageController@index');
Route::get('contact', 'PageController@contact');
