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
Route::get('/generatePDF','HomeController@generatePDF')->name('home.generatePDF');
/*----- Teachers -----*/
Route::get('/teachers', 'TeachersController@index')->name('teachers.index');
Route::get('/teachers/create', 'TeachersController@create')->name('teachers.create');
Route::post('/teachers/create', 'TeachersController@store')->name('teachers.store');
Route::get('/teachers/{teacher}/edit', 'TeachersController@edit')->name('teachers.edit');
Route::patch('/teachers/{teacher}/edit', 'TeachersController@update')->name('teachers.update');
Route::delete('/teachers/{teacher}/delete', 'TeachersController@destroy')->name('teachers.destroy');

/*----- Classes -----*/
Route::get('/classes', 'ClassesController@index')->name('classes.index');
Route::get('/classes/create', 'ClassesController@create')->name('classes.create');
Route::post('/classes/create', 'ClassesController@store')->name('classes.store');
Route::get('/classes/{class}/edit', 'ClassesController@edit')->name('classes.edit');
Route::patch('/classes/{class}/edit', 'ClassesController@update')->name('classes.update');
Route::delete('/classes/{class}/delete', 'ClassesController@destroy')->name('classes.destroy');

/*----- Students -----*/
Route::get('/students', 'StudentsController@index')->name('students.index');
Route::get('/students/create', 'StudentsController@create')->name('students.create');
Route::post('/students/create', 'StudentsController@store')->name('students.store');
Route::get('/students/{student}/edit', 'StudentsController@edit')->name('students.edit');
Route::patch('/students/{student}/edit', 'StudentsController@update')->name('students.update');
Route::delete('/students/{student}/delete', 'StudentsController@destroy')->name('students.destroy');
