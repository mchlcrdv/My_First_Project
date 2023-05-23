<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'StudentController@welcome')->name('welcome') ;

Route::get('/home', 'StudentController@home')->name('home');

Route::get('/about', 'StudentController@about')->name('about');

Route::get('/register', 'StudentController@register')->name('register');

Route::get('/list', 'StudentController@list')->name('list');

Route::get('/edit/{id}', 'StudentController@edit')->name('edit');

Route::post('/save-edit/{id}', 'StudentController@saveUpdate')->name('save-edit-students');

Route::get('/list/{id}', 'StudentController@delete')->name('student-delete');

Route::post('/save-registration', 'StudentController@save')->name('save-registration');