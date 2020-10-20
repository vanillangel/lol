<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/sign_in', function () {
    return view('sign_in');
});

Route::get('/sign_up', function () {
    return view('sign_up');
});
/*Route::get('/sign_up', TestController() {
    return view('sign_up');
});*/
Route::post('/sign_in', 'App\Http\Controllers\TestController@show_signin');

Route::post('/sign_up', 'App\Http\Controllers\TestController@show_signup');