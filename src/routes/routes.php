<?php
if(env('APP_ENV','local')=="production"){
	URL::forceScheme('https');
}


Route::prefix('/setups') 
->as('setup.')
->group(function () { 
    Route::get('/', '\App\Setup\SetupController@index')->name('index'); 
    Route::post('/', '\App\Setup\SetupController@post')->name('post'); 
});
/*
Artisan::call('view:clear');
Artisan::call('cache:clear');
Artisan::call('route:clear');
	
//


Route::prefix('/authentification') 
->as('auth.')
->group(function () { 
    Route::get('/', 'Auth\AuthController@index')->middleware('authentification')->name('authentification');
    Route::get('/deconnexion', 'Auth\AuthController@logout')->name('logout');
    Route::post('/', 'Auth\AuthController@post_authentification')->name('post_authentification');
    Route::post('/mot-de-passe', 'Auth\AuthController@post_password_reset')->name('post_password_reset');
    Route::get('/mot-de-passe', 'Auth\AuthController@post_password_reset')->name('get_password_reset'); 
});
  */
		 		 
                  

		 		 
     

