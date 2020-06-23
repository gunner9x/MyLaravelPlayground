<?php

//use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'DemoController@index');
Route::get('/hello/{year}/{name?}', 'DemoController@hello');
Route::post('/', 'DemoController@login');
Route::delete('/', 'DemoController@login');
Route::put('/', 'DemoController@login');
Route::get('category/laravel-nang-cao', 'MainController@uriTest');
Route::get('user-info', 'MainController@getUserInfo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logintest', 'LoginTestController@login')->name('logintest');
Route::post('/hello-world','LoginTestController@check');
Route::get('/hello-world','DemoController@welcome');
Route::resource('posts', 'PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
