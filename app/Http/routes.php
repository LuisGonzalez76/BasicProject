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

Route::get('api/facilities', 'FacilityController@all');

Route::get('api/facilities/{$id}','FacilityController@show');

Route::post('api/facilities','FacilityController@create');


Route::get('api/activities', 'ActivityController@all');

Route::get('api/activities','ActivityController@create');

Route::get('api/activities/{id}', 'ActivityController@show');


Route::get('api/organizations','OrganizationController@all');

Route::get('api/organizations', 'OrganizationController@create');

