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
use App\News;
use App\Message;

	Route::get('/', function () {
	    return view('pages.accueil');
	});
	Route::get('/actualites.html', 'NewsController@NewsPage');
	Route::get('/article{id}.html', 'NewsController@ArticlePage');

	Route::get('/{page}.html', 'PageController@HtmlPage');
	Route::get('/profile{id}', 'PageController@ProfilePage');

	Route::post('/send', 'MessageController@postMessage');