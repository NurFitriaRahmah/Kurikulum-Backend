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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/country', 'CountriesController@index');
Route::get('/country/create', 'CountriesController@create');
Route::get('/country/{n}', 'CountriesController@show');
Route::post('/country', 'CountriesController@store');
Route::delete('/country/{n}', 'CountriesController@destroy');
Route::get('/country/{n}/edit', 'CountriesController@edit');
Route::patch('/country/{n}', 'CountriesController@update');