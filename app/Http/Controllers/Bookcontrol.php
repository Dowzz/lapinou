<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\livre;

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
}
