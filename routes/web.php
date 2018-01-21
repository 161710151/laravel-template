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

Route::get('about','TugasController@template');
Route::get('about1','TugasController@template1');
Route::get('table', 'TugasController@table');
Route::get('about2','TugasController@template3');
Route::get('costum','TugasController@template4');
Route::get('testing5','TugasController@template5');
