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
        if(sizeof($news)>0){
            $dateSrc = $news->created_at;
            $date = date('d M Y', strtotime($dateSrc));
    		return view('pages.article', ['news' => $news, 'date' => $date]);
        } else {
            return redirect('/');
        }
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
