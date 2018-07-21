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

Auth::routes();

/** Single route */
Route::get('/', 'MainController@index')->name('dashboard');
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('login.submit');
Route::post('/logout', 'Auth\AdminLoginController@adminLogout')->name('logout');

/** Grouped routes */

Route::prefix('android-user')->group(function (){
    /** These are actually accessed by android */
    Route::post('signup', 'AndroidUserController@signUp')->name('user.signup');
    Route::post('reset-password', 'AndroidUserController@resetPassword')->name('user.reset-password');
    /*Route::get('login', 'Auth\UserLoginController@showLoginForm')->name('user.login');*/
    Route::post('login', 'Auth\UserLoginController@userLogin')->name('user.login.submit');
    Route::post('logout', 'Auth\UserLoginController@userLogout')->name('user.logout');
    /*Route::post('{id}/upload', 'UserController@uploadPhoto')->name('user.upload');
    Route::get('', 'UserController@index')->name('dashboard');*/
});

Route::resource('user', 'UserController');

Route::resource('destination', 'DestinationController');

Route::prefix('admin')->group(function(){

});

