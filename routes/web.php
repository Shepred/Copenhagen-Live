<?php

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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/competitions', 'HomeController@competitions')->name('competitions');
Route::get('/briefing', 'HomeController@briefing')->name('briefing');

//Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::get('/login', 'HomeController@index')->name('login');

//Route::get('/login/validate', 'Auth\LoginController@validateLogin');
Route::get('/login/validate', 'HomeController@index');

//Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/logout', 'HomeController@index')->name('logout');

Route::get('/booking', 'BookingController@index')->name('booking.index');
Route::get('/booking/dispatch', 'BookingController@dispatchFlights')->name('booking.dispatchFlights');

Route::get('/booking/create/departure', 'BookingController@createDeparture')->name('booking.createDeparture');
Route::get('/booking/create/arrival', 'BookingController@createArrival')->name('booking.createArrival');
Route::post('/booking/departure', 'BookingController@storeDeparture')->name('booking.storeDeparture');
Route::post('/booking/arrival', 'BookingController@storeArrival')->name('booking.storeArrival');

Route::get('/booking/{id}/delete', 'BookingController@destroy')->name('booking.delete');