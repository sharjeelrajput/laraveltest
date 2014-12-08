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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/home', function()
{
    $model = array( 'page' => 'home', 'title' => 'Home Page' );
    return View::make('pages.homepage', $model);
});
Route::get('/tools', function()
{
    $model = array(
        'page' => 'tools',
        'title' => 'tools Page'
    );

    return View::make('pages.tools', $model);
});

Route::get('/market', function()
{
    $model = array( 'page' => 'market', 'title' => 'Market Page' );
    return View::make('pages.market', $model);
});

Route::get('/about', function()
{
    $model = array( 'page' => 'about', 'title' => 'About Page' );
    return View::make('pages.about', $model);
});

Route::get('users', function()
{

    return 'List of all users Users!';
});

/*Route::get('/loadUser', function()
{
    $model = array( 'page' => 'about', 'title' => 'About Page' );
    return View::make('loadUser', $model);
});
*/
Route::get('loadUser', 'MyController@loadUser');
Route::get('createUser', 'MyController@saveUser');
//Route::get('userList', function()
//{
//    return View::make('userList');
//});
//Route::get('user/{id}', 'UserController@showProfile');
Route::get('userList', 'MyController@init');
//Route::get('userhello', 'MyController@showWelcome');

