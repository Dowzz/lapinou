<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\livre;
use Cart;

class shopController extends Controller
{
    public function addpanier(Request $request)
    {
    	$id= $request->livre;
    	$livre= livre::find($id);
    	$titre= $livre->titre;
    	$prix =$livre->prix;
    	Cart::add(['id' => $id, 'name' => $titre, 'qty' => 1, 'price' => $prix,]);
    }
    public function deleterow(Request $request)
    {
    	$id = $request->rowid;
    	Cart::remove($id);
    	Cart::update($id);
    }
    public function deletepanier()
    {
    	Cart::destroy();
    	return redirect('/');
    }
}
