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
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
	Route::get('/', 'DashboardController@index');
	Route::resource('/project-types', 'ProjectTypeController');	
	Route::resource('/projects', 'ProjectController');	
	Route::resource('/company', 'CompanyController');
	Route::resource('/dailyui', 'DailyController');
	Route::resource('/posts',  'PostController');


	Route::get('/company/sessions/{id}', [
		'as' => 'company-sessions',
		'uses' => 'CompanyController@DisplaySessions'
 	]);


});



Route::group(['prefix' => 'api'], function () {
	Route::resource('project-types', 'ProjectTypeController');
	Route::get('projects', 'ProjectController@apiIndex');
	Route::post('mailme', 'PagesController@mail');
	Route::get('company/{guid}', 'CompanyController@api');
	Route::post('addSession', 'CompanyController@addSession');
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

	Route::get('/100-days-of-ui', [
		'as' => 'ui',
		'uses' => 'PagesController@dailyui'
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



/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
|
*/
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
