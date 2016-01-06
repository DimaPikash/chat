<?php

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin', 'AdminController@index');
});

Route::get('test', 'TestController@index');

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', 'ChatController@index');
    Route::get('admin', 'AdminController@index');
});

Route::post('userManage/{id}', 'AdminController@UserManage');