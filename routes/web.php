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

Route::get('/', function () {
    return view('welcome');
});


// Subjects (start) ----------------

Route::get('/subjects', 'SubjectsController@index')->name('subjects');

Route::get('/subjects/create', 'SubjectsController@create')->name('subjects.create');
Route::post('/subjects/store', 'SubjectsController@store')->name('subjects.store');


Route::get('/subjects/store/{id}', 'SubjectsController@edit')->name('subjects.edit');
Route::post('/subjects/update/{id}', 'SubjectsController@update')->name('subjects.update');

Route::get('/subjects/delete/{id}', 'SubjectsController@destroy')->name('subjects.delete');

// Subjects (end) -----------------------
