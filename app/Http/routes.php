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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
    Route::get('dashboard', 'Admin\AdminController@index');

    // [...] other routes

    // Dick CRUD: Define the resources for the entities you want to CRUD here.
   
});