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


/**Routes for my own Larvel learning purposes*/
Route::get('/', 'PagesController@index');

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');



/**Routes for NB View testing*/
Route::get('index', 'PagesController@nbIndex');

Route::get('post', 'PagesController@nbPost');

Route::get('login', 'PagesController@nbLogin');

Route::get('club', 'PagesController@nbClub');