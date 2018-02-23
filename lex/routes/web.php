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

Route::get('//', function () {
    return view('welcome');
});







Route::get('/', 'HomeController@index')->name('homepage.index');
Route::post('/', 'HomeController@view')->name('homepage.view');
Route::get('/ticket/{id}', 'HomeController@seat')->name('homepage.ticket');
Route::post('/ticket/{id}', 'HomeController@ticket')->name('homepage.ticket');
Route::get('/details/{id}', 'HomeController@details')->name('homepage.details');

Route::get('/login', 'loginController@index')->name('login.index');
Route::get('/register', 'registerController@index')->name('register.index');
Route::get('/cancel', 'registerController@index')->name('cancel.index');

Route::post('/login', 'loginController@verify')->name('login.verify');
Route::get('/logout', 'logoutController@index')->name('logout.index');
Route::post('/register', 'registerController@index')->name('register.index');





/////ADMIN/////////////
Route::get('/admin/home', 'AdminController@index')->name('adminhome.index');



Route::group(['middleware' => ['sess']], function(){
//////////Bus///////////
Route::get('/bus/home', 'BusController@index')->name('bushome.index');
Route::get('/bus/create', 'BusController@create')->name('bushome.create');
Route::post('/bus/create', 'BusController@store')->name('bushome.store');
Route::get('/bus/view', 'BusController@view')->name('bushome.view');
Route::get('/bus/edit/{id_}', 'BusController@edit')->name('bushome.edit');
Route::post('/bus/edit/{id_}', 'BusController@update')->name('bushome.edit');
Route::get('/bus/delete/{id}', 'BusController@delete')->name('bushome.delete');



//////////Seat///////////
Route::get('/seat/home/{id}', 'SeatController@index')->name('seathome.index');
Route::post('/seat/home/{id}', 'SeatController@create')->name('seathome.create');
});
