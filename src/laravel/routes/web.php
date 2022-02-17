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
    Route::get('/','ToppageController@show')->middleware('auth');
    Route::get('/toppage', 'ToppageController@show')->middleware('auth');
    Route::get('/user', 'UserController@show')->middleware('auth');
    Route::get('index', 'SaunaDataController@showindex')->middleware('auth');
    Route::get('index/saunadata', 'SaunaDataController@showdetail')->middleware('auth');
    Route::get('saunaname', 'SaunaNameController@show')->middleware('auth');
    Route::get('saunaexperience', 'SaunaExperienceController@show')->middleware('auth');
    });


// Route::get('/saunaname/new', function() {
//     return view('experience/saunaname_new');
// });


Route::get('/home' , function() {
    return view('home');
});

Auth::routes();
