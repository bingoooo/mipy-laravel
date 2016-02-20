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
use App\Http\Middleware\AdminMiddleware;

	Route::get('/', function () {
	    return view('pages.accueil');
	});
	Route::get('/actualites.html', 'NewsController@NewsPage');
	Route::get('/article{id}.html', 'NewsController@ArticlePage');

	Route::get('/{page}.html', 'PageController@HtmlPage');
	Route::get('/profile{id}', 'PageController@ProfilePage');

	Route::post('/contact.html', 'MessageController@postEmail');
	Route::post('/send', 'MessageController@postMessage');

	//Admin routing
	Route::group(['middleware' => AdminMiddleware::class], function(){
		//Route::auth();
		Route::controller('admin', 'AdminController');
	});