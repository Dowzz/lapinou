<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\user;

class usercontrol extends Controller
{
    public function majuser(Request $request)
    {	
    	$user=$request->user;
    	$user=user::where('id', $user)->first();

		$nom = $request->nom;
		$prenom = $request->prenom;
		$email = $request->email;
		$naissance = $request->naissance;

		$user->nom = $nom;
		$user->prenom = $prenom;
		$user->email = $email;
		$user->naissance = $naissance;

		$user->save();
    }
}
