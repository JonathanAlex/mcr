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

/******  PARTIALS *****************************************************************************/
	
Route::get('nosotros', 'PartialsController@nosotros')->name('nosotros');
Route::get('galeria', 'PartialsController@galeria')->name('galeria');
Route::get('contactanos', 'PartialsController@contactanos')->name('contactanos');
Route::get('login', 'PartialsController@login')->name('login');

/******  END PARTIALS *************************************************************************/
