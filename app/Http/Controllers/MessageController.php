<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    //
    public function getMessage(){
    	$form = $_POST;
    	$adrs = $_SERVER['REMOTE_ADDR'];
		return view('tests.test', ['form' => $form, 'adrs' => $adrs]);
    }
}
