<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Reminder;
use Mail;


class ForgotPasswordController extends Controller
{
    public function ForgotPassword()
    {
    	return view('authi.forgot-password');
    }

    public function postForgotPassword(Request $request)
    {
    		$user = User::whereEmail($request->email)->first();
    		if(count($user)==0)
    			return Redirect()->back()->with(['success' =>'Vous allez recevoir un mail pour recreer votre mot de passe.'
    				]);
    		$reminder = Reminder::exists($user) ?: Reminder::create($user);

    		$this->sendEmail($user, $reminder->code);

    		return Redirect()->back()->with(['success' =>'Vous allez recevoir un mail pour recreer votre mot de passe.']);
    }

    private function sendEmail($user, $code)
    {
    	Mail::send('emails.forgot-password', [
    		'user'=>$user,
    		'code' ->$code
    		],
    		function($message) use ($user) {
    		$message->to($user->email);
    		$message->subject("Bonjour $user->pseudo, recréez votre mot de passe. ");
    		});
    }

}
