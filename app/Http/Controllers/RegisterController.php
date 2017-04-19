<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Register;
class RegisterController extends Controller{
		//
public function store(){
	//echo "test here";
	$data=Input::except(array('token'));
	//var_dump($data);
	$rule=array(
		'pseudo'=>'required',
		'email'=>'required|email',
		'password'=>'required|min:6',
		'cpassword'=>'required|same:password'
		);

	$message=array(
		'cpassword.required'=>'merci de confirmer votre mot de passe',
		'cpassword.min'=>'Votre mot de passe doit comporter au moins 6 caractères',
		'cpassword.same'=>'Les deux mots de passes doivent etre identiques',
	);
	$validator=Validator::make($data,$rule,$message);

	if ($validator->fails()) {
		return Redirect::to('accueil')->withErrors($validator);
	}else{
		Register::formstore(Input::except(array('token','cpassword')));
		return Redirect::to('accueil')->with('success','vous etes enregistré');
	}

}
}





