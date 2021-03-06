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

Route::get('/manager/{id}', function ($id) {
    return view('dev');
});

Route::get('/developer/{id}', function ($id) {
    return view('developer',['id'=>$id]);
});
