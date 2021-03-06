<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware'=>'auth:user-api'], function(){
    Route::get('/user/{id}', 'UserControllerApi@getUser');
    Route::post('/user/{id}', 'UserControllerApi@updateUser');
    Route::post('/user/{id}/password', 'UserControllerApi@updatePassword');
    Route::post('/user/{id}/upload-photo', 'UserControllerApi@uploadPhoto');
    Route::get('/user/{id}/get-photo-profile', 'UserControllerApi@getPhotoProfileUrl');
    Route::resource('destination', 'DestinationController');
    Route::prefix('destination')->group(function (){
        Route::get('get-favourite/{userId}', 'DestinationControllerApi@getFavourite')->name('getFavourite');
        Route::post('add-to-favourite', 'DestinationControllerApi@addToFavourite')->name('addToFavourite');
        Route::get('get-destination/{userId}', 'DestinationControllerApi@getDestination')->name('getDestination');
        Route::post('upload-destination-picture/{desId}', 'DestinationControllerApi@uploadDestinationPicture');
        Route::post('add-contribution', 'DestinationControllerApi@addContribution');
        Route::get('get-contribution/{userId}', 'DestinationControllerApi@getContributed');
        Route::post('edit-contribution/{desId}', 'DestinationControllerApi@editContribution');
    });
});

Route::group(['middleware'=>'auth:admin-api'], function(){
    Route::get('/users', 'UserController@getUsers');
});
