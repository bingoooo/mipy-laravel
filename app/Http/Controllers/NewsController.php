<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    private $lastCount = 0;
    public function NewsPage()
    {
        //if(count(News::all())>0){
            $lastNews = $this->getLastNews();
            $lastNewsForDays = date('d-M-Y', time());
            if($lastNews != null) $lastNewsForDays = $this->forDays($lastNews->event_date);
            $lastEvents = $this->getLastEvents($this->lastCount);
            $thirdRow = $this->getLastEvents($this->lastCount);
            $fourthRow = $this->getLastEvents($this->lastCount);
            return view('pages.actualites', ['lastNews' => $lastNews, 'lastEvents' => $lastEvents, 'lastNewsForDays' => $lastNewsForDays, 'thirdRow' => $thirdRow, 'fourthRow' => $fourthRow]);
        //}
		//return redirect('/');
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
        $this->lastCount = $news['id'];
        $this->lastCount --;
    	return $news;
    }
    public function getLastEvents($start){
        $currentTime = time();
        $newsData = News::all();
        $last = $start;
        $news = [];
        for ($i = 0, $count = 0; $count < 3 && $i < $last; $i++){
            if($newsData->find($last-$i)){
                $news[] = $newsData->find($last-$i);
                $count ++;
            }
            $this->lastCount --;
        }
        foreach ($news as $new) {
            $new->forDays = $this->forDays($new->event_date);
            $new->preview = substr($new->contenu, 0, 400).'...<br>';
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
        $currentYear = substr($date, 0, 4);
        $month = $currentYear%4 && $currentMonth>2? 1 : 0;
        $event = $currentYear * 365 + substr($date, 8, 2) + $currentMonth + $currentYear/4;
        $month = date('Y')%4 && (date('m')>2)? 1 : 0;
        $current = date('Y') * 365 + $months[date('m')] + date('d') + $month + date('Y')/4;
        $diff = $current - $event;
        if($diff > 0){
            if($divide = floor($diff/365)) return 'il y a '.$divide.' an(s)';
            if($divide = floor($diff/30)) return 'il y a '.$divide.' mois';
            if($divide = floor($diff/7)) return 'il y a '.$divide.' semaines';
            return 'il y a '.$diff.' jours';
        } else return 'Aujourd\'hui';
    }

}