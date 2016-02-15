<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    public function NewsPage()
    {
		return view('pages.actualites');
    }
    public function ArticlePage()
    {
		return view('pages.article');
    }
    public function getMultipleNews()
    {
    	//
    }
    public function getNews()
    {
    	//
    }

}
