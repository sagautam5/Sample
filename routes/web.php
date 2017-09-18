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

Route::get('/',function ()
{
    return redirect()->to('/home');
});
Route::get('/home', 'HomeController@getHome');
Route::get('/project', 'HomeController@getProject');
Route::get('/contact', 'HomeController@getContact');
Route::get('/aboutus','HomeController@getAboutUs');
