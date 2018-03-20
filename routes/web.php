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

Route::get('/facebook', 'SocialAuthFacebookController@redirect');
Route::get('/facebook/callback', 'SocialAuthFacebookController@callback');

Route::get('/google', 'SocialAuthGoogleController@redirect')->name('google.login');
Route::get('/google/callback', 'SocialAuthGoogleController@callback');

Route::get('/{social}','SocialAuthController@redirect')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
 
Route::get('/{social}/callback','SocialAuthController@callback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/our-story', function() {
	return view('pages/our-story');
});
Route::get('/contact', function() {
	return view('pages/contact');
});
Route::get('/lookbook', function() {
	return view('pages/lookbook');
});
Route::get('/howtobuy', function(){
	return view('pages/howtobuy');
});
Route::get('/shop', array('uses' => 'ProductController@view'));
Route::get('/shop/{name_product}', array('uses' => 'ProductController@detail', 'as' => 'detailProduk'));
Route::post('/shop/{name_product}/pesan', 'ProductController@pesan');
Route::get('/confirmation', 'ProductController@konfirmasi');
Route::post('/confirmation/whatsapp', 'ProductController@whatsapp');
