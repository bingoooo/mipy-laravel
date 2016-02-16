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
        $lastNews = $this->getLastNews();
        $lastEvents = $this->getLastEvents();
        if($lastNews!==0){
            //$lastNews->preview = substr($lastNews->contenu, 0, 400);
            return view('pages.actualites', ['lastNews' => $lastNews, 'lastEvents' => $lastEvents]);
        }
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
    public function getLastNews()
    {
    	$newsData = News::all();
        $news = $newsData->last();
    	return $news;
    }
    public function getLastEvents(){
        $currentTime = time();
        $newsData = News::all();
        $last = $newsData->last()->id;
        $news = [];
        for ($i = 0; $i < 3; $i++){
            $news[] = $newsData->find($last-$i);
        }
        return $news;
        }
    public function getNews($id)
    {
    	$news = News::find($id);
    	return $news;
    }

}
