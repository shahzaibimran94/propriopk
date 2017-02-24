<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class orderViewController extends Controller { 
    
   public function index(Request $request){
      $email=$request->session()->get('email');
      if($email){
      $orders = DB::select('select * from orders');
      return view('orderView',['orders'=>$orders],['email'=>$email]);
      }else{
         return view('login');
      }
   }

   public function view(Request $request,$id){
      $email=$request->session()->get('email');
      if($email){
      $order = DB::select('select * from orders where id = ?',[$id]);
      return view('viewSingleOrder',['order'=>$order],['email'=>$email]);
      }else{
         return view('login');
      }
   }

   public function delete(Request $request,$id){
      $email=$request->session()->get('email');
      if($email){
   	DB::delete('delete from orders where id = ?',[$id]);
    	 return redirect()->action('orderViewController@index',['email'=>$email]);
      }else{
         return view('login');
      }
   }

   public function change(Request $request,$id){
      $email=$request->session()->get('email');
      if($email){
      $status="delivered";
      DB::update('update orders set status = ?  where id = ?',[$status,$id]);
      return redirect()->action('orderViewController@index',['email'=>$email]);
      }else{
         return view('login');
      }   
   }
}