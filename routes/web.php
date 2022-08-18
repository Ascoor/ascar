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
    return view('welcome');
});
Route::resource('places', 'PlaceController');
Route::get('place/soft/selete/{id}','PlaceController@softDelete')
->name('soft.delete');
Route::get('place/trash','PlaceController@trashedPlaces')
->name('place.trash');