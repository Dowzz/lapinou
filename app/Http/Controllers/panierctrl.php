<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\panier;

class panierctrl extends Controller
{
    public function addpanier(Request $request){
    	$panier = $request->session()->get('Ncommande');
    	if($panier !=null){
		$panier->couverture = "";
    	$panier->titre = "";
    	$panier->auteur = "";
    	$panier->format = "";
    	$panier->prix = "";
    	$panier->save();


    	}else{
			$panier = new panier;
			$panier->couverture = "";
    		$panier->titre = "";
    		$panier->auteur = "";
    		$panier->format = "";
    		$panier->prix = "";
    		$panier->save();
    	}
    	
    }
}
