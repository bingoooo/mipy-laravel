<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;
use App\Job;
use App\MailingList;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    //
    public function postEmail(Request $request){
      $form = $request;
      if($form['name']===""){
        $email['email'] = htmlspecialchars($request->email);
        $data = MailingList::all();
        $check = $data->where('email', $email['email']);
        if(count($check)>0){
          return view('pages.contact', ['request' => $request, 'message' => 'Votre e-mail existe déjà dans notre base de données']);        
        } else {
          $email['created_at'] = date('Y-m-d H:m:s', time());
          MailingList::insert($email);
          return view('pages.contact', ['request' => $request, 'message' => 'Votre e-mail a été enregistré dans notre base de données']);        
        }
      } else {
        return redirect('/');
      }
    }
    public function postMessage(Request $request){
    	$form = $request->except('_token');
    	if($request['name']===""){
    		$form['created_at'] = date('Y-m-d H:m:s',time());
	    	if($request['database']=='message'){
	    		$test = $this->messCheck($form);
				$this->sendToMessageTable($test);
				return view('tests.send', ['message' => 'Votre message à bien été envoyé']);
	    	} elseif ($request['database']=='job') {
	    		$test = $this->jobCheck($form);
	    		$this->sendToJobTable($test);
				return view('tests.send', ['message' => 'Votre demande à bien été enregistrée']);
	    	}
    	} else return redirect('/');
    }
    public function sendMessage(){
    	return view('tests.send');
    }
    public function messCheck($form){
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
    public function jobCheck($form){
    	if(count($form)>0){
   		 	$check['nom'] = (trim($form['nom'])=='')?'Non renseigné':$form['nom'];
   		 	$check['prenom'] = (trim($form['prenom'])=='')?'Non renseigné':$form['prenom'];
   		 	$check['email'] = (trim($form['email'])=='')?'Non renseigné':$form['email'];
   		 	$check['titre_annonce'] = (trim($form['titre_annonce'])=='')?'Non renseigné':$form['titre_annonce'];
   		 	$check['message'] = (trim($form['message'])=='')?'Non renseigné':$form['message'];
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
