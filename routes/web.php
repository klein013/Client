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


Route::get('/login', 'LoginController@create');
Route::post('/loggingin', 'LoginController@loggingin');



Route::get('/home', 'HomeController@create');


Route::get('/incident', 'IncidentController@create');
Route::post('/storeIncident', 'IncidentController@storeIncident');
Route::get('/about', 'AboutController@create');
Route::get('/contact', 'ContactController@create');



Route::get('/index', 'LoginController@signin');
Route::get('/indexcheck', 'LoginController@checkuser');
Route::get('/register', 'RegisterController@create');
Route::post('/register_id', 'RegisterController@registerID');
Route::post('/register_details', 'RegisterController@registerDetails');