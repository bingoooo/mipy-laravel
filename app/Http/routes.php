<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\User;

	Route::get('/', function () {
	    return view('pages.accueil');
	});
	Route::get('/actualites.html', function(){
		$test = 'Bouh Bouh';
		var_dump($test);
		return view('pages.article');
	});

	Route::get('/{page}.html', function ($page) {
	    return view('pages.'.$page);
	});
	Route::get('/profile{id}', function($id){
		$users = User::find($id);
		return view('pages.profile', ['users' => $users]);
	});