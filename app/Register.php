<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
//class Register extends Model
//{
    //
    protected $table="register_users";

    public static function formstore(){
    	//echo"here model is";
    	//var_dump($data);
    	$pseudo=Input::get('pseudo');
    	//echo $pseudo;
    	$email=Input::get('email');
    	//echo $email;
    	$password=hash::make(Input::get('password'));
    	//echo $password;

    	$users=new Register();
    	$users->pseudo=$pseudo;
    	$users->email=$email;
    	$users->password=$password;

    	$users->save();
    }
}
