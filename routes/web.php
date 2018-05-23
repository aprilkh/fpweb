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


Route::get('/home', function () {
    return view('home');
});

Route::get('/button', function () {
    return view('button');
});


Route::get('/about', function () {
	$users = \App\User::all();

	// dd($users);
    return view('about', compact('users'));
});

Route::get('/tabel', function () {
    return view('tabel');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/presentasi', function () {
    return view('presentasi');
});

