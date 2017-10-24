<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'Backend\IndexController@index');
Route::get('/athletics', 'Backend\IndexController@athletics');
Route::get('/arts', 'Backend\IndexController@arts');
Route::get('/rectory', 'Backend\IndexController@rectory');
Route::get('/awards', 'Backend\IndexController@awards');
Route::get('/community_services', 'Backend\IndexController@community_services');
