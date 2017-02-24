<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(Request $request){
    		$email=$request->session()->get('email');

    		if($email){
    		return view('portalView',['email'=>$email]);
    		}else{
    			$msg="Credentials you entered were incorrect";
    			return view('login')->with(['$msg'=>$msg]);
    		}
    }
    
}
