<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class adminViewController extends Controller {
   public function index(Request $request){
      $email=$request->session()->get('email');
      if($email){
      $admins = DB::select('select * from admin');
      return view('adminView',['admins'=>$admins],['email'=>$email]);
  	}else{
  		return view('login');
  	}

   }
}