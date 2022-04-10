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
Route::get('/', 'NewsController@index');
// podgląd pojedynczego wpisu
Route::get('news/{slug}', 'NewsController@art');
// podgląd wszystkich postów
Route::get('news/', 'NewsController@showPosts');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
