<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Commcontroller extends Controller
{
    public function addcomment(Request $request)
    {
        session()->flash('success', 'Votre commentaire a bien été envoyé !');
        $comm= new comm;
        $comm->id_livre=$request->id_livre;
        $comm->id_user=$request->id_user;
        $comm->commentaire=$request->comm;
        $comm->save();
        return redirect('/');
    }
}
