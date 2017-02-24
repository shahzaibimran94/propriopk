<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\routes\web;

class adminUpdateController extends Controller
{
    public function index(Request $request){
      $email=$request->session()->get('email');
      if($email){
      $admins = DB::select('select * from admin');
      return view('adminView',['admins'=>$admins],['email'=>$email]);
      }else{
         return view('login');
      }
   }
   public function show(Request $request,$id) {
      $email=$request->session()->get('email');
      if($email){
      $admins = DB::select('select * from admin where id = ?',[$id]);
      return view('adminUpdate',['admins'=>$admins],['email'=>$email]);
      }else{
         return view('login');
      }
   }
   public function edit(Request $request,$id) {
      $email=$request->session()->get('email');
      $name = $request->input('name');
      $email = $request->input('email');
      $pass = $request->input('password');
      $phone = $request->input('phone');
      $gender = $request->input('gender');
      DB::update('update admin set name = ? ,email = ? ,password = ? ,gender = ?,phone = ? where id = ?',[$name,$email,$pass,$gender,$phone,$id]);
      return redirect()->action('adminViewController@index',['email'=>$email]);
   }

   public function setting(Request $request){
      
      $email= $request->session()->get('email');
      if($email){
      $admins = DB::select('select * from admin where email= ?',[$email]);
      return view('adminSetting',['admins'=>$admins],['email'=>$email]);  
      }else{
         return view('login');
      }
   }
}
