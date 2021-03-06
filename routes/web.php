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

//HOME
Route::get('/', 'HomeController@index')->name('home');

//CONTATTI
Route::get('/contatti', 'HomeController@contacts')->name('pagina_contatti');

//PRODOTTI
Route::get('/prodotti', 'HomeController@products')->name('pagina_prodotti');