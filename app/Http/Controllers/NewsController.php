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
    public function ArticlePage($id)
    {	
    	$news = $this->getNews($id);
        $dateSrc = $news->created_at;
        $date = date('d M Y', strtotime($dateSrc));
		return view('pages.article', ['news' => $news, 'date' => $date]);
    }
    public function getMultipleNews()
    {
    	$news = News::all();
    	return $news;
    }
    public function getNews($id)
    {
    	$news = News::find($id);
    	return $news;
    }

}
