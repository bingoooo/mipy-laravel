<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //
    public function HtmlPage($page){
		return view('pages.'.$page);
    }
    public function ProfilePage($id){
    	$users = User::find($id);
    	if(sizeof($users)>0){
			return view('pages.profile', ['users' => $users]);
    	} else {
    		return redirect('/promotion.html');
    	}
    }
}
