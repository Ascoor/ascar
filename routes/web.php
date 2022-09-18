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

Auth::routes();

<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/export', 'PlaceController@export')->name('export');
=======
Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
>>>>>>> 64690d525dc049ec57ac386c0912377178cf494c


Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');
<<<<<<< HEAD
=======


>>>>>>> 64690d525dc049ec57ac386c0912377178cf494c
	Route::resource('places', 'PlaceController');
	Route::get('place/soft/selete/{id}', 'PlaceController@softDeletes')
		->name('soft.delete');

	Route::get('/export', 'PlaceController@export')->name('export');
	Route::get('place/trash', 'PlaceController@trashedPlaces')
		->name('place.trash');
	Route::get('place/back/from/trash/{id}', 'PlaceController@backFromSoftDelete')
		->name('place.back.from.trash');
	Route::get('place/delete/from/database/{id}', 'PlaceController@deleteForEver')
		->name('place.delete.from.database');
	Route::get('place.filter', 'FilterPlaceExport@view')->name('place.filter');

	Route::resource('search', 'SearchController');

<<<<<<< HEAD

    // Routes for Tags
    Route::get('/tags', 'TagController@index' )->name('tags');
Route::get('/tag/create', 'TagController@create' )->name('tag.create');
Route::post('/tag/store', 'TagController@store' )->name('tag.store');
Route::get('/tag/show/{slug}', 'TagController@show' )->name('tag.show');
Route::get('/tag/edit/{id}', 'TagController@edit' )->name('tag.edit');
Route::post('/tag/update/{id}', 'TagController@update' )->name('tag.update');
Route::get('/tag/destroy/{id}', 'TagController@destroy' )->name('tag.destroy');

=======
	Route::resource('tags', 'TagController');
	Route::get('tag/delete/from/database/{id}', 'TagController@deleteForEver')
		->name('tag.delete.from.database');
>>>>>>> 64690d525dc049ec57ac386c0912377178cf494c
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
