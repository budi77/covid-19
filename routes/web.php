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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'InfoController@index');
Route::get('/country/{country?}', 'InfoController@country');
Route::post('/country', 'InfoController@search')->name('search');
Route::get('/asean/{type?}', 'InfoController@asean')->name('asean');
Route::get('/faq', 'InfoController@faq')->name('faq');


