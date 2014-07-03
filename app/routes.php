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
Route::resource('sessions', 'SessionsController');
Route::resource('users', 'UsersController');
//
//Route::get('login', 'SessionsController@create');
//Route::get('logout', 'SessionsController@destroy');

Route::post('login', 'SessionsController@store');
Route::post('logout', 'SessionsController@destroy');
Route::post('session-status', 'SessionsController@session_status');

Route::get('profile', function(){
    return "Bienvenido usuario " . Auth::user()->email;
})->before('auth');

Route::get('/', ['as' => 'home', function(){
    return 'Página principal';
}]);

Route::get('mysubjects/{id}', 'SubjectsController@index');
Route::get('exam-dates/{id}', 'SubjectsController@examDates');
Route::get('academic-status/{id}', 'SubjectsController@academicStatus');

Route::get('/', function()
{
	return View::make('hello');
});
