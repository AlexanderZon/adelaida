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

Route::get('/hash', function(){
	return Hash::make('alexis23498535');
})

if(Auth::check()):

	Route::controller('/users', 'UserController');
	Route::controller('/projects', 'ProjectController');
	Route::controller('/stock', 'StockController');
	Route::controller('/clients', 'ClientController');
	Route::controller('/providers', 'ProviderController');
	Route::controller('/sells', 'SellController');
	Route::controller('/reports', 'ReportController');
	Route::controller('/me', 'MeController');
	Route::controller('/auth', 'AuthenticationController');
	Route::controller('/', 'DashboardController');

else:

	Route::controller('/auth', 'AuthenticationController');
	Route::any('/{arg1?}/{arg2?}/{arg3?}/{arg4?}/', function($arg1 = '' ,$arg2 = '' ,$arg3 = '' ,$arg4 = '' ){
		$route = '/'.$arg1.'/'.$arg2.'/'.$arg3.'/'.$arg4.'/';
		return Redirect::to('/auth/login')->with('redirect_to', $route);
	});

endif;
