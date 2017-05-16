<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\user;

class usercontrol extends Controller
{
    public function majuser(Request $request)
    {	$user= $request->user;
    	$id= $request->id;
    	$user=user::find($user);
    	if (!empty($request->x)) {
    	$user->$id = $request->x;	
    	}
		$user->save();
    }
}
