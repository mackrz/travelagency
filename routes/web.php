<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReservationController;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//home
Route::get('/', 'NewsController@index');

// podgląd wszystkich postów
Route::get('news/readmore', 'NewsController@showPosts');
//Pages
Route::get('{slug}', 'PagesController@show');

// podgląd pojedynczego wpisu
Route::get('news/{slug}', 'NewsController@art');

//ajax rezerwacje
Route::Post('news/', [ReservationController::class, 'saveReservation'])->name('ajaxRequest.post');

