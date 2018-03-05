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

// Route::get('/facebook', 'SocialAuthFacebookController@redirect');
// Route::get('/facebook/callback', 'SocialAuthFacebookController@callback');

// Route::get('/google', 'SocialAuthGoogleController@redirect')->name('google.login');
// Route::get('/google/callback', 'SocialAuthGoogleController@callback');

Route::get('/{social}','SocialAuthController@redirect')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
 
Route::get('/{social}/callback','SocialAuthController@callback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

Route::get('/home', 'HomeController@index')->name('home');
