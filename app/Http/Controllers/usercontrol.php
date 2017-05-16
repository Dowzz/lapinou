<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\user;

class usercontrol extends Controller
{
    public function majuser(Request $request)
    {	$user= $request->user;
    	$user=user::find($user);
    	$user->nom = $request->x;
		$user->save();
    }
}
