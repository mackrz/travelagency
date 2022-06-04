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

// podgląd pojedynczego wpisu
Route::get('news/{slug}', 'NewsController@art');

Route::get('successReservation', 'ReservationController@success');

//Pages
Route::get('pages/{slug}', 'PagesController@show');
// konto moje rezerwacje
Route::get('account/myreservation', 'ReservationController@showMyReservation');

Route::get('city/{slug}', 'NewsController@showByCity');
//ajax rezerwacje
Route::Post('news/', [ReservationController::class, 'saveReservation'])->name('ajaxRequest.post');

