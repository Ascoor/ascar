<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Category;
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


Route::get('/test', function () {
    return Category::find(1)->places;
})->name('test');
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::get('table-list', function () {
        return view('pages.table_list');
    })->name('table');

    // Routes for Comments
    Route::resource('comments', 'CommentController');

    // Routes for Posts
    Route::get('/places', 'PlaceController@index')->name('places');
    Route::get('/place/create', 'PlaceController@create')->name('place.create');
    Route::post('/place/store', 'PlaceController@store')->name('place.store');
    Route::get('/place/show/{slug}', 'PlaceController@show')->name('place.show');
    Route::get('/place/edit/{id}', 'PlaceController@edit')->name('place.edit');
    Route::post('/place/update/{id}', 'PlaceController@update')->name('place.update');


    Route::get('place/soft/delete/{id}', 'PlaceController@softDeletes')
        ->name('soft.delete');


    Route::get('place/export', 'SearchController@index')
        ->name('export');
    Route::get('place/trash', 'PlaceController@PlacesTrashed')
        ->name('place.trash');
    Route::get('place/back/from/trash/{id}', 'PlaceController@backFromSoftDelete')
        ->name('place.back.from.trash');
    Route::get('place/delete/from/database/{id}', 'PlaceController@deleteForEver')
        ->name('place.delete.from.database');

    Route::get('/search', ['uses' => 'SearchController@Search', 'as' => 'search']);
    Route::get('/download/{filename}', ['uses' => 'PlaceController@download', 'as' => 'download']);
    Route::get('/view/{filename}', ['uses' => 'PlaceController@view', 'as' => 'view']);


    // Routes for Category
    Route::get('/categorys', 'CategoryController@index')->name('categorys');
    Route::get('/categorys/create', 'CategoryController@create')->name('categorys.create');
    Route::post('/categorys/store', 'CategoryController@store')->name('categorys.store');
    Route::get('/categorys/sort/', 'CategoryController@showcategory')->name('categorys.sort');

    Route::get('/categorys/edit/{id}', 'CategoryController@edit')->name('categorys.edit');
    Route::get('/category/soft/selete/{id}', 'CategoryController@softDeletes')->name('softCategory.delete');
    Route::post('/categorys/update/{id}', 'CategoryController@update')->name('categorys.update');
    // Routes for Tags
    Route::get('/tags', 'TagController@index')->name('tags');
    Route::get('/tag/create', 'TagController@create')->name('tag.create');
    Route::post('/tag/store', 'TagController@store')->name('tag.store');

    Route::get('/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
    Route::get('tag/soft/selete/{id}', 'TagController@softDeletes')->name('softtag.delete');
    Route::post('/tag/update/{id}', 'TagController@update')->name('tag.update');
    // Routes for users
    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/user/create', 'UserController@create')->name('user.create');
    Route::post('/user/store', 'UserController@store')->name('user.store');
    Route::get('/user/destroy/{id}', 'UserController@destroy')->name('user.destroy');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});