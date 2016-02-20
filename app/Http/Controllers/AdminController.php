<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function getIndex(){
    	return view('admin.index');
    }
    public function getEditArticles(){
    	return view('admin.edit_articles');
    }
    public function postIndex(){
    	return view('pages.article');
    }
}
