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
use Illuminate\Support\Facades\Input;


/**Routes for NB View testing*/
Route::get('/',function(){return view('pages.selection');});

Route::get('index', function(){return view('pages.index');});

Route::get('post', function(){return view('pages.post');});

Route::get('login', function(){return view('pages.login');});

Route::get('club', function(){return view('pages.club');});

Route::get('voteselect', function(){return view('pages.vote.select');});

Route::get('voteresult', function(){return view('pages.vote.result');});

Route::get('votedisplay', function(){return view('pages.vote.display');});

Route::post('testvote',function(){
	$selected = Input::get('selected');
	echo $selected;
});