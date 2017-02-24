<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class adminInsertController extends Controller
{
    public function index(Request $request){
      $email=$request->session()->get('email');
      if($email){
    	return view('adminCreate',['email'=>$email]);
      }else{
        return view('login');
      }
    }

    public function insert(Request $request){
      $email=$request->session()->get('email');
      if($email){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $gender = $request->input('gender');
        $phone = $request->input('phone');
        
        DB::insert('insert into admin (name,email,password,gender,phone) values(?,?,?,?,?)',[$name,$email,$password,$gender,$phone]);
        return redirect()->action('adminViewController@index',['email'=>$email]);
      }else{
      return view('login');
      }

  }
}