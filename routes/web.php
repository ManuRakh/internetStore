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
Route::get('/loginingin','LoginController@logining')->name('logining');

Route::get('/logout','LoginController@logout')->name('logout');
Route::post('/sendMail','MailSetting@sendMail')->name('sendMail');
Route::get('/activation/{hash}/{mail}',"LoginController@activation");

Route::get('/viewGoods/{category}',"StoresController@showCategory")->name('viewCategory');
Route::get('/viewGoods/{category}/{good}',"StoresController@showGood")->name('viewGoodInCategory');
Route::get('/viewGoods/{category}/undercategories/{good}/{name}',"StoresController@showUnderCategory")->name('viewUnderCategory');
Route::get('/details/{goodid}',"DetailsController@show")->name('viewDetails');
Route::get('/addToBasket','BasketController@addIt')->name('AddToBasket');
Route::get('/forget','BasketController@forget')->name('forget');
Route::get('/panel/admin','PanelController@enter')->name('panelAdmin');
Route::post('/panel/admin/enterGood','PanelController@enterGood')->name('enterGood');
Route::post('/panel/admin/login','PanelController@login')->name('loginAdmin');
Route::get('panel/logout','PanelController@logout')->name('logoutAdmin');