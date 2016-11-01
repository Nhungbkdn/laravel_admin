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
	CRUD::resource('news', 'Admin\NewsCrudController');
	CRUD::resource('promotion', 'Admin\PromotionCrudController');
    CRUD::resource('cinema', 'Admin\CinemaCrudController');
    CRUD::resource('movie', 'Admin\MovieCrudController');
    CRUD::resource('schedule', 'Admin\ScheduleCrudController');
 CRUD::resource('rating', 'Admin\RatingCrudController');
  CRUD::resource('age', 'Admin\AgeCrudController');
    // [...] other routes

    // Dick CRUD: Define the resources for the entities you want to CRUD here.
   
});

Route::group(['prefix' => 'api' ], function()
{
    
	 Route::resource('news', 'API\NewsAPIController',['middleware' => 'cors']);
      Route::resource('categories', 'API\CateAPIController',['middleware' => 'cors']);
      Route::resource('movies', 'API\MovieAPIController',['middleware' => 'cors']);
       Route::resource('promotions', 'API\PromotionAPIController',['middleware' => 'cors']); 

    // [...] other routes

    // Dick CRUD: Define the resources for the entities you want to CRUD here.
   
});
