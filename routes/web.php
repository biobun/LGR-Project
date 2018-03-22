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


Route::get('/{social}','SocialAuthController@redirect')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
 Route::get('/{social}/callback','SocialAuthController@callback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('rg-admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/produk','AdminController@produk')->name('admin.produk');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

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
