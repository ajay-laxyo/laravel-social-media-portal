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

/// Home Controller routing................/////////////////////////

Route::get('/home', 'frontend\HomeController@index')->name('home');
Route::get('/about_profile', 'frontend\HomeController@about_profile')->name('about_profile');
Route::post('/store_timeline', 'frontend\HomeController@store_timeline')->name('store_timeline');
Route::get('/friends', 'frontend\HomeController@friends')->name('friends');
Route::get('/photos', 'frontend\HomeController@photos')->name('photos');

// timeline controller routing ............//////////

Route::get('/timelime', 'frontend\TimelinesController@index')->name('timeline');
Route::post('/comment', 'frontend\TimelinesController@storeComment')->name('comment');
Route::get('/request', 'frontend\TimelinesController@sentFriendRequest')->name('friendRequest');

// dashboard controller routing..................//////////////

Route::get('/dashboard', 'backend\DashboardController@index')->name('dashboard');

/// master controller routing...............//////////////////

Route::get('/about', 'MasterController@indexAbout')->name('about');
Route::get('/contact', 'MasterController@indexContact')->name('contact');
Route::get('/private_policy', 'MasterController@indexPrivatePolicy')->name('private_policy');
Route::get('/terms_of_use', 'MasterController@indexTermsOfUse')->name('terms_of_use');

// profile controller routing............./////////////////////////

Route::resource('profiles', 'frontend\ProfilesController');
