<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\livre;
use Cart;
use App\order;
use App\recap;

class shopController extends Controller
{
    public function addpanier(Request $request)
    {
    	$id= $request->livre;
    	$livre= livre::find($id);
    	$titre= $livre->titre;
    	$prix =$livre->prix;
    	Cart::add(['id' => $id, 'name' => $titre, 'qty' => 1, 'price' => $prix,])->associate('livre');
    }
    public function deleterow(Request $request)
    {
    	$id = $request->rowid;
    	Cart::remove($id);
    }
    public function deletepanier()
    {
    	Cart::destroy();
    	return redirect('/');
    }
    public function createorder(Request $request)
    {
        $recap = new recap;
        $recap->id_user=$request->user_id;
        $recap->totalttc=$request->totalttc;
        $recap->save();
        foreach (Cart::content() as $row) {
        $livre=livre::find($row->id);
        $order = new order;
        $order->Norder=(recap::orderBy('identifier', 'desc')->first())->identifier;
        $order->id_livre=$row->id;        
        $order->save();
         }
    }
    public function payok(Request $request)
    {
        $user=$request->userid; 
        $recap = recap::where('id_user',$user)->orderBy('identifier', 'desc')->first();
        $recap->paiement = '1';
        $recap->save();
        return redirect('/');
        session()->flash('success', 'Nous vous remercions por votre achat ! Vous trouverez vose-books sur votre page de profil, rubrique "mes commandes".');
    }
}
