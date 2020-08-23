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
    return view('layouts.master');
});
Route::prefix('rooms')->group(function () {
    Route::get('/','RoomController@index')->name('rooms.index');
    Route::get('/create','RoomController@create')->name('rooms.create');
    Route::post('/create','RoomController@store')->name('rooms.store');
});
Route::prefix('beds')->group(function () {
    Route::get('/','BedController@index')->name('beds.index');
});
Route::prefix('patients')->group(function () {
    Route::get('/','PatientController@index')->name('patients.index');
});
