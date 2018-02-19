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
/*
Route::get('/', function () {
    return view('indexController');
});
*/
Route::get('/','IndexController@index')->name('home');
Route::get('/register','RegisterController@index')->name('register');
Route::post('register','RegisterController@store')->name('userAdd');
Route::post('/logincheck','LoginController@login')->name('login');
Route::get('/logout','LoginController@logout')->name('logout');
Route::post('/sendMail','MailSetting@sendMail')->name('sendMail');
Route::get('/activation/{hash}/{mail}',"LoginController@activation");

Route::get('/viewGoods/{category}',"StoresController@show")->name('viewCategory');

