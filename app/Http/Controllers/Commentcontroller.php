<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\commentaire;

class Commentcontroller extends Controller
{
    public function addcomment(Request $request)
    {
    	session()->flash('success', 'livre ajouté !');
        $commentaire = new commentaire;
    	$commentaire->id_livre = $request->livre;
    	$commentaire->id_user = $request->user;
    	$commentaire->comment = $request->comment;
    	$commentaire->save();
    }
}
