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

Route::get('/', 'OneToOneLaratableController@index');
Route::get('one-to-one', 'OneToOneLaratableController@oneToOneData')->name('one_to_one');
