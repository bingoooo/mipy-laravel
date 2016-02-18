<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;
use App\Job;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    //
    public function postMessage(Request $request){
    	//dd($request->all());
    	$form = $request->except('_token');
    	if($request['name']===""){
    		$form['created_at'] = date('Y-m-d H:m:s',time());
	    	$test = $this->formCheck($form);
	    	if($request['database']=='message'){
				$this->sendToMessageTable($test);
				return view('tests.send', ['message' => 'Votre message à bien été envoyé']);
	    	} elseif ($request['database']=='job') {
	    		$this->sendToJobTable($test);
				return view('tests.send', ['message' => 'Votre demande à bien été enregistrée']);
	    	}
    	} else return redirect('/');
    }
    public function sendMessage(){
    	return view('tests.send');
    }
    public function formCheck($form){
    	if(count($form)>0){
   		 	$check['nom'] = (trim($form['nom'])=='')?'Non renseigné':$form['nom'];
   		 	$check['prenom'] = (trim($form['prenom'])=='')?'Non renseigné':$form['prenom'];
   		 	$check['email'] = (trim($form['email'])=='')?'Non renseigné':$form['email'];
   		 	$check['sujet'] = (trim($form['sujet'])=='')?'Non renseigné':$form['sujet'];
   		 	$check['avis'] = (trim($form['avis'])=='')?'Non renseigné':$form['avis'];
   		 	$check['created_at'] = (trim($form['created_at'])=='')?time():$form['created_at'];
    	}
    	return $check;
    }
    public function sendToMessageTable($form){
    	Message::insert($form);
    }
    public function sendToJobTable($form){
    	Job::insert($form);
    }
}
