<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\contact;
class contactcontrol extends Controller
{
     public function storecontact(Request $input)
    {
    	session()->flash('success', 'Votre demande de contact a bien été envoyé. Nous vous repondrons rapidement!');
        $contact = new contact;
    	$contact->pseudo = $input['pseudo'];
    	$contact->mail = $input['email'];
    	$contact->commande = $input['Ncommande'];
    	$contact->objet = $input['subject'];
    	$contact->demande = $input['contact-text'];
    	$contact->save();
    	return redirect('/');
    }



}
