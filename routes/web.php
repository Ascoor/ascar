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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/search','SearchController');
Route::get('/searchw','SearchController@searchw');
Route::get('/searchp','SearchController@searchp');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/searchw','SearchController@searchw')->name('searchw')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	/*Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');*/
	Route::resource('places', 'PlaceController');
	Route::get('place/soft/selete/{id}','PlaceController@softDelete')
	->name('soft.delete');
	Route::get('place/trash','PlaceController@trashedPlaces')
	->name('place.trash');
	Route::get('place/back/from/trash/{id}','PlaceController@backFromSoftDelete')
	->name('place.back.from.trash');
	Route::get('place/delete/from/database/{id}','PlaceController@deleteForEver')
	->name('place.delete.from.database');
	

});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

