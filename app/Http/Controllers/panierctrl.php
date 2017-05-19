<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\panier;
use App\commande;

class panierctrl extends Controller
{
    public function addpanier(Request $request){
    	$panier = $request->session()->get('idpanier');
    	if($panier = null){
            $panier = new panier;
        }            
            $commande= new commande;
            $commande->couverture ="test"; 
            $commande->titre ="test";
            $commande->auteur ="test"; 
            $commande->format ="test"; 
            $commande->prix ="0.1"; 
            $commande->save();
            $panier->Ncommande=$this->$commande->Ncommande;
            $panier->save();
            
        }
    	
    }

