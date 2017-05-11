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
}
