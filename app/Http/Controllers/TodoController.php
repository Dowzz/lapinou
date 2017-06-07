<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Todolist;
use App\user;

class TodoController extends Controller
{
    public function store(Request $request)
    {
    	$todolist = new todolist;
    	$todolist->champ = $request->todoText;
    	$todolist->user_id = $request->userid;
        $todolist->idbook = $request->data;
    	$todolist->save();
    }
    public function deleteall(Request $request)
    {
		$user_id = $request->userid;
		todolist::where('user_id', $user_id)->delete();

    }
    public function deleteid(Request $request)
    {
        $user_id=$request->user_id;
        $idline=$request->idline;

        todolist::where('user_id', $user_id)AND todolist::Where('id', $idline)->first()->delete();
    }
    public function majtodo(Request $request)
    {
        $todo = $request->todo;
        $user= $request->id_user;
        $maj_user=User::where('id',$user)->first();
        $maj_user->todo= $todo;
        $maj_user->save();
    }
}
