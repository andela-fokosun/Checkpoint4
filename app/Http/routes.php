<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Landing page
 */
Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);

/*
| -------------------------------------------------------------
| * Authentication routes
|--------------------------------------------------------------
*/
Route::get('/auth/register', [
  'uses'        => 'Auth\AuthController@getRegister',
  'as'          => 'getRegister'
]);

Route::post('/auth/register' , [
  'uses'        => 'Auth\AuthController@postRegister',
  'as'          =>  'postRegister'
]);

Route::get('/auth/login', [
    'uses'      => 'Auth\AuthController@getLogin',
    'as'        =>  'getLogin'
]);

Route::post('/auth/login', [
  'uses'        => 'Auth\AuthController@postLogin',
  'as'          => 'postLogin'
]);

Route::get('/auth/logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as'   => 'getLogout'
]);

/*
|-------------------------------------------------------
| Social auth route
|-------------------------------------------------------
*/

Route::get('/login/{provider}', [
    'uses' => 'OauthController@redirect',
    'as'   => 'socialLogin'
]);

Route::get('/user/profile', [
    'uses' => 'UserController@index',
    'as'   => 'profile'
]);

Route::get('/user/profile/video', [
    'uses' => 'VideoController@index',
    'as'   => 'viewUploadVideoForm'
]);

Route::post('/user/profile/video', [
  'uses'        => 'VideoController@store',
  'as'          => 'createVideo'
]);