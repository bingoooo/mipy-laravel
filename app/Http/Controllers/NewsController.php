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
        $lastNewsForDays = $this->forDays($lastNews->event_date);
        $lastEvents = $this->getLastEvents();
        if($lastNews!==0 && count($lastNews)>0){
            //$lastNews->preview = substr($lastNews->contenu, 0, 400);
            return view('pages.actualites', ['lastNews' => $lastNews, 'lastEvents' => $lastEvents, 'lastNewsForDays' => $lastNewsForDays]);
        }
		return view('pages.accueil');
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
            $news[] = $newsData->find($last-$i-1);
        }
        return $news;
        }
    public function getNews($id)
    {
    	$news = News::find($id);
    	return $news;
    }
    public function forDays($date){
        $months = ['00' => 0, '01' => 0, '02' => 31, '03' => 59, '04' => 90, '05' => 120, '06' => 151, '07' => 181, '08' => 212, '09' => 243, '10' => 273, '11' => 304, '12' => 334, '13' => 365];
        $currentMonth = $months[substr($date, 5, 2)];
        $event = substr($date, 0, 4) * 365 + $months[substr($date, 5, 2)] + substr($date, 8, 2) + $currentMonth;
        $month = date('Y')%4 && (date('m')>2)? 1 : 0;
        $current = date('Y') * 365 + $months[date('m')] + date('d') + $month;
        $diff = $current - $event;
        if($diff > 0){
            if($divide = floor($diff/365)) return 'il y a '.$divide.' an(s)';
            if($divide = floor($diff/30)) return 'il y a '.$divide.' mois';
            if($divide = floor($diff/7)) return 'il y a '.$divide.' semaines';
            return 'il y a '.$diff.' jours';
        }
    }

}
