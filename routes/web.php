<?php

/*
|--------------------------------------------------------------------------
| Pages for Views
|--------------------------------------------------------------------------
|
| Pages on the site done in HTML or small use of the projects/company models
*/


/**
 * Pages 
 */
Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');



/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
|
*/
Auth::Routes();



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Route for the admin Section
|  Route::resouce creates
|
*/


/**
 * Dashboard Group
 */
Route::prefix('dashboard')->middleware('auth')->group(function () {
	Route::get('/', 'DashboardController@index');
	
	Route::resource('/projects', 'ProjectController');	
	Route::resource('/company', 'CompanyController');
	Route::resource('/dailyui', 'DailyController');
	Route::resource('/posts',  'PostController');
	Route::resource('/roles', 'RoleController');



	Route::get('/company/sessions/{id}', [
		'as' => 'company-sessions',
		'uses' => 'CompanyController@DisplaySessions'
 	]);

 	Route::get('/company/archives', [
		'as' => 'company.archives',
		'uses' => 'CompanyController@archives'
 	]);


});



/**
 * Case Studies
 */
Route::group(['prefix' => 'work'], function () {
	Route::get('/faith-lutheran-day-school', [
		'as' => 'flds',
		'uses' => 'PagesController@flds'
	]);

	Route::get('/innovation', [
		'as' => 'innovation',
		'uses' => 'PagesController@innovation'
	]);

	Route::get('/assetbuilder', [
		'as' => 'assetbuilder',
		'uses' => 'PagesController@assetbuilder'
	]);


	Route::get('/dallas-baptist-university', [
		'as' => 'dbu',
		'uses' => 'PagesController@dbu'
	]);


	Route::get('/aiga-dfw-design-week', [
		'as' => 'aiga',
		'uses' => 'PagesController@aiga'
	]);

	Route::get('/marks', [
		'as' => 'marks',
		'uses' => 'PagesController@marks'
	]);

	
	Route::get('/wait-rate', [
		'as' => 'wait-rate',
		"uses" => "PagesController@waitrate"
	]);


	Route::get('/mcdaniel-nutrition', [
		'as' => 'mcdaniel',
		"uses" => "PagesController@mcdaniel"
	]);

});

Route::get('about-zack-davis', [
	'as' => 'about',
	'uses' => 'PagesController@about'
]);

Route::get('/posts',[
	'as' => 'posts',
	'uses' => 'PostController@viewAllPosts'
]);

Route::get('/posts/{title}', [
	'as' => 'postsByTitle',
	'uses' => 'PostController@postFromTitle'
]);



Route::get('test', 'PagesController@index');



/**
 * Guid Route for Companies that I setup. 
 */
Route::get('/{guid}', [
	'as' => 'pageWithCompany',
	'uses' => 'PagesController@guid'
]);





