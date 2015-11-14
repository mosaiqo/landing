<?php

namespace App\Http\Controllers;

use App\Suscriber;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests\SuscribeRequest;

class SuscriptionsController extends Controller
{
  public function store(SuscribeRequest $request)
  {
  	$message = Lang::get('page.suscriptions.error');
  	$status = 401;
  	$registered = false;
  	
  	$suscriber = Suscriber::create([
	  		"email" => $request->get("email"),
	  		"first_name" => $request->get("fname"),
	  		"last_name" => $request->has("lname")? $request->get("lname"): "",
	  		"locale" => App::getLocale(),
	  		"domain" =>  $request->server("HTTP_HOST"),
	  		"ip" => $request->server("REMOTE_ADDR"),
	  		"user_agent" => $request->server("HTTP_USER_AGENT"),
	  		"accepted_language" => $request->server("HTTP_ACCEPT_LANGUAGE")
	  	]);
	  
	  if($suscriber)
	  {
	  	$message = Lang::get('page.suscriptions.success');
	  	$status = 200;
	  	$registered = true;
	  }

  	$message = Lang::get('page.suscriptions.success');
  	return response()->json(["status" => $status, "message" => $message])
  		->withCookie( cookie('registered', $registered) );
  }
}
