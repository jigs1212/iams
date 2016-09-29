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

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::get('/dashboard', array('as' => 'admin.get_home', 'uses' => 'HomeController@getDashboard'));
    Route::get('/auth/logout', array('as' => 'admin.get_logout', 'uses' => 'Auth\AuthController@getLogout'));
    Route::get('/errors/404', array('as' => 'admin.get_404', 'uses' => 'HomeController@get404'));
});


// Route::get('dashboard', ['middleware' => 'auth', function(){
//         return view('pages.dashboard');
// }]);


// Route::get('/dashboard', array('as' => 'admin.get_home', 'uses' => 'HomeController@getDashboard'));
//
// Route::get('admin',['middleware' => 'admin', function(){
//     return "Admin";
// }]);


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
