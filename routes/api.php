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


Route::get('projects', 'ProjectController@apiIndex');
Route::post('mailme', 'PagesController@mail');
Route::get('company/{guid}', 'CompanyController@api');
Route::post('addSession', 'CompanyController@addSession');
Route::post('google', 'GoogleController@password');
Route::get('roles', "RoleController@apiIndex");