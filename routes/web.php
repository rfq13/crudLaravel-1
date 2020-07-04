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

Route::get('/', 'pertanyaanController@index');
Route::get('/pertanyaan', 'pertanyaanController@insert');
Route::get('/pertanyaan/{id}', 'pertanyaanController@edit');
Route::put('/pertanyaan/{id}', 'pertanyaanController@update');
Route::get('/pertanyaan/{id}/hapus', 'pertanyaanController@delete');
Route::post('/pertanyaan', 'pertanyaanController@save');
Route::get('/jawaban/{id}', 'jawabanController@index');
Route::post('/jawaban/{id}', 'jawabanController@store');
