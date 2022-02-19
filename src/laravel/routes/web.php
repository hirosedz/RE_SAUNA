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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/','ToppageController@show');
    Route::get('/toppage', 'ToppageController@show');
    Route::get('/user', 'UserController@show');
    Route::get('index', 'SaunaDataController@showindex');
    Route::get('index/saunadata', 'SaunaDataController@showdetail');
    Route::get('saunaname', 'SaunaNameController@show');
    Route::get('saunaname/new', 'SaunaNameController@shownew');
    Route::post('saunaname/new', 'SaunaNameController@create');
    Route::get('saunaexperience', 'SaunaExperienceController@show');
    });


Route::get('/home' , function() {
    return view('home');
});

Auth::routes();
