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
    return view('toppage/top');
});

Route::get('/user', function () {
    return view('user/edit');
});

Route::get('/toppage', function() {
    return view('toppage/top');
});

Route::get('/index', function() {
    return view('index/index');
});

Route::get('/saunadata', function() {
    return view('index/saunadata');
});

Auth::routes();
