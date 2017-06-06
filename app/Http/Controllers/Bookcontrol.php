<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\livre;
use App\publication;

class Bookcontrol extends Controller
{
    public function notation(Request $request)
    {
    	$note=$request->note;
    	$bookid=$request->bookid;
		$livre=livre::where('id', $bookid)->first();
		$livre->notes = $note;
		$livre->save();
    }
    public function livrestore(Request $request)
    {
        session()->flash('success', 'livre ajouté !');
        $livre = new livre;
        $livre->titre=$request->titre;
        $livre->couverture=$request->couverture;
        $livre->auteur=$request->auteur;
        $livre->editeur=$request->editeur;
        $livre->genre=$request->genre;
        $livre->description=$request->description;
        $livre->format=$request->format;
        $livre->parution=$request->parution;
        $livre->prix=$request->prix;
        $livre->save();
        return redirect('/');
    }
    public function dempublish(Request $request)
    {
        session()->flash('success', 'Votre publication est en cours de validation !');
        $ask = new publication;
        $ask->titre=$request->titre;
        $ask->couverture=$request->couverture;
        $ask->auteur=$request->auteur;
        $ask->editeur=$request->editeur;
        $ask->genre=$request->genre;
        $ask->description=$request->description;
        $ask->format=$request->format;
        $ask->parution=$request->parution;
        $ask->prix=$request->prix;
        $ask->user=$request->id_user; 
        $ask->save();
        return redirect('/');
    }
    public function validpub(Request $request)
    {
        session()->flash('success', 'livre ajouté !');
        $livre=$request->livre;
        $ask=publication::where('id', $livre)->first();
        $ask->publiable='2';
        $ask->save(); 
        $livre = new livre;
        $livre->titre=$ask->titre;
        $livre->couverture=$ask->couverture;
        $livre->auteur=$ask->auteur;
        $livre->editeur=$ask->editeur;
        $livre->genre="amateur";
        $livre->notes=0;
        $livre->description=$ask->description;
        $livre->format=$ask->format;
        $livre->parution=$ask->parution;
        $livre->prix=$ask->prix;
        $livre->save();
        return redirect('/');
    }
    public function refuspub(Request $request)
    {
        $livre=$request->livre;
        $ask=publication::where('id', $livre)->first();
        $ask->publiable='2';
        $ask->save();
    }
    public function pubclean()
    {
        $livre=publication::where('publiable',2)->delete();
        return redirect('/');
    } 
}
