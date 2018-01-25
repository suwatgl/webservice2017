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

Route::resource('/api/v1/friends', 'StudentsController');

Route::get('/friends', function () {
    return view('friends');
});

Route::get('/students', function () {
    return view('students');
});

Route::get('/subjectplan', function () {
    return view('subjectplan');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/', function () {
    return view('welcome');
});
