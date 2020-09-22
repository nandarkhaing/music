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

Route::get('/', 'PageController@headfun')->name('indexpage');

Route::get('/testing',function ($value='')
{
	return 'This is testing page!';
});
Route::get('/new',function ($value='')
{
	return 'This is new page!';
});

Route::middleware('role:Admin')->group(function(){
Route::get('dashboard','backendController@dashboardfun')->name('dashboardpage');
Route::resource('artists','ArtistController');
Route::resource('songs','SongController');
Route::resource('albums','AlbumController');
});

Route::resource('students','StudentController');


//Route::get('index','PageController@headfun')->name('indexpage');
Route::get('album','PageController@albumfun')->name('albumpage');
Route::get('artist','PageController@artistfun')->name('artistpage');
Route::get('artistalbum/{id}','PageController@artistalbum')->name('artistalbumpage');
Route::get('loginform','PageController@loginfun')->name('loginpage');
Route::get('registerform','PageController@registerfun')->name('registerpage');
Route::get('/search','PageController@searchfun')->name('search');
Route::get('songalbum/{id}','PageController@songfun')->name('songpage');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

