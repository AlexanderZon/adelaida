<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

if(Auth::check()):

	Route::controller('/users', 'UserController');
	Route::controller('/roles', 'RoleController');
	Route::controller('/capabilities', 'CapabilityController');
	Route::controller('/projects', 'ProjectController');
	Route::controller('/stock', 'StockController');
	Route::controller('/measurement_units', 'MeasurementUnitController');
	Route::controller('/categories', 'CategoryController');
	Route::controller('/clients', 'ClientController');
	Route::controller('/providers', 'ProviderController');
	Route::controller('/sells', 'SellController');
	Route::controller('/reports', 'ReportController');
	Route::controller('/me', 'MeController');
	Route::controller('/auth', 'AuthenticationController');
	Route::controller('/', 'DashboardController');

else:

	Route::controller('/auth', 'AuthenticationController');
	Route::any('/{one?}/{two?}/{three?}/{four?}/{five?}/', function($one = '' ,$two = '' ,$three = '' ,$four = '' ,$five = '' ){
		return Redirect::to('/auth/login')->with('redirect_to', '/'.Request::path());
	});

endif;
