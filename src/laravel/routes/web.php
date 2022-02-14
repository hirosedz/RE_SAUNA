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
    Route::get('index', 'IndexController@show')->middleware('auth');
    Route::get('index/saunadata', 'IndexController@detail')->middleware('auth');
    Route::get('saunaname', 'SaunaNameController@show')->middleware('auth');
    Route::get('saunaexperience', 'SaunaExperienceController@show')->middleware('auth');
    });
    // Route::post('news/create','Admin\NewsController@create');
    // Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    // Route::post('profile/create','Admin\ProfileController@create');
    // Route::get('profile/edit','Admin\ProfileController@edit')->middleware('auth');
    // Route::post('profile/edit','Admin\ProfileController@update');
    // Route::get('news', 'Admin\NewsController@index')->middleware('auth');
    // Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth');
    // Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth');
    // Route::get('news/delete','Admin\NewsController@delete')->middleware('auth');


Route::get('/user', function () {
    return view('user/edit');
});


// Route::get('/saunaname/new', function() {
//     return view('experience/saunaname_new');
// });


Route::get('/home' , function() {
    return view('home');
});

Auth::routes();
