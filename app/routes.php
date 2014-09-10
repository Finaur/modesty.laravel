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
/*authentication*/
Route::get('login', array('as' => 'login', 'uses' => 'LoginController@getIndex'))->before('guest');
Route::post('login', array('as' => 'login', 'uses' => 'LoginController@login'));
Route::get('logout', array('uses' => 'LoginController@logout'))->before('auth');

Route::group(array('before' => 'auth'), function()
{
	Route::resource('user', 'UsersController');
});

/*Route Resouce controller*/
Route::group(array('before' => 'auth'), function()
{
	Route::resource('tags', 'TagsController'); 
});
Route::group(array('before' => 'auth'), function()
{
Route::resource('news', 'NewsController');
});
Route::group(array('before' => 'auth'), function()
{
Route::resource('command', 'CommandController');
});
/*end of Route Resouce controller*/

/*tricky untuk penambahan tags di page insert news*/
Route::get('tags/create/{id}', 'TagsController@create' )->before('auth');
//Route::get('tags/create/{id}', 'TagsController@create' );

/*standart routing*/
Route::get('category', 'CategoryController@getIndex' )->before('auth');
Route::get('category/create', 'CategoryController@create' )->before('auth');
Route::post('category/insert', 'CategoryController@insert' )->before('auth');
Route::get('category/edit_category/{id}', 'CategoryController@edit_category' )->before('auth');
Route::post('category/edit_category/{id}', 'CategoryController@update_category')->before('auth');
Route::get('category/show/{id}', 'CategoryController@show' )->before('auth');
Route::get('category/{id}/delete', 'CategoryController@delete' )->before('auth');
/*end of standart routing*/

Route::group(array('before' => 'auth'), function()
{
    Route::group(array('prefix' => '/' ), function(){
		Route::get('form', 'BackendController@demoForm');
		Route::get('table', 'BackendController@demoTable');
		Route::get('backend',array('as' => 'backend', 'uses' =>'BackendController@getIndex' ));
	});
});

Route::get('/', 'BackendController@getIndex' )->before('auth');

//Route::get('login', 'BackendController@login');





