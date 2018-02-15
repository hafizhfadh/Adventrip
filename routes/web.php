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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/train', 'TrainController');

Route::resource('/station', 'StasionController');

Route::resource('/train_schedule', 'TrainScheduleController');

<<<<<<< HEAD
Route::resource('/booking', 'BookingController');
=======
Route::resource('/customer', 'CustomerController');
>>>>>>> b970954fe2abd356572ea4f1186dcceca444050f
