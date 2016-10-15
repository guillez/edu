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

Route::auth();
Route::group(['middleware' => ['web', 'auth']], function () {
	Route::get('/', function()
	{
		return View::make('home');
	});   

	Route::get('/home', 'HomeController@index');

	Route::get('bancos/data', 'BancosController@anyData')->name('bancos.data');
        Route::get('bancos/index', 'BancosController@index');
	Route::resource('bancos', 'BancosController');


	Route::get('alumnos/data', 'AlumnosController@anyData')->name('alumnos.data');
        Route::get('alumnos/index', 'AlumnosController@index');
	Route::resource('alumnos', 'AlumnosController');



	Route::get('proveedores/data', 'ProveedoresController@anyData')->name('proveedores.data');
    Route::get('proveedores/index', 'ProveedoresController@index');
	Route::resource('proveedores', 'ProveedoresController');	
    
    Route::get('clasificacioncuentas/data', 'ClasificacionCuentasController@anyData')->name('clasificacioncuentas.data');
   // Route::get('clasificacioncuentas/index', 'ClasificacionCuentasController@index');
	Route::resource('clasificacioncuentas', 'ClasificacionCuentasController');

    Route::resource('entidades', 'EntidadesController');
    Route::resource('posts', 'PostsController');
    Route::resource('ciclos', 'CiclosController');
    //Route::get('ciclos/create', 'CiclosController@create');


});
