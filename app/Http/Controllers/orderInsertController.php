<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class orderInsertController extends Controller
{
    public function index(Request $request){
      $email=$request->session()->get('email');
      if($email){
    	return view('orderCreate',['email'=>$email]);
      }else{
        return view('login');
      }
    }

    public function insert(Request $request){
      $email=$request->session()->get('email');
      if($email){
      $name = $request->input('name');
      $email = $request->input('email');
      $address = $request->input('address');
      $phone = $request->input('phone');
      $waist = $request->input('waist');
      $inseam = $request->input('inseam');
      $outseam = $request->input('outseam');
      $rise = $request->input('rise');
      $hip = $request->input('hip');
      $thigh = $request->input('thigh');
      $jeanfit = $request->input('jeanfit');
      $style = $request->input('style');
      $fabric = $request->input('fabric');
      $fabricColor = $request->input('fabricColor');
      $scrapping = $request->input('scrapping');
      $whiskers = $request->input('whiskers');
      $rip = $request->input('rip');
      $text = $request->input('comment');
      $oderDate=date("Y-m-d");
      $status="pending";

      DB::insert('insert into orders (fullname,email,shippingAddress,phone,orderDate,waist,inseam,outseam,rise,hips,thigh,jeans,style,fabric,fabricColor,scrapping,whiskers,ripped,text,status) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$name,$email,$address,$phone,$oderDate,$waist,$inseam,$outseam,$rise,$hip,$thigh,$jeanfit,$style,$fabric,$fabricColor,$scrapping,$whiskers,$rip,$text,$status]);
        return redirect()->action('orderViewController@index',['email'=>$email]);
      }else{
        return view('login');
      }
   }

    public function fetchData(Request $request,$id){
      $email=$request->session()->get('email');
      if($email){
      $orders = DB::select('select * from orders where id = ?',[$id]);
      return view('auth.orderUpdate',['orders'=>$orders],['email'=>$email]);
      }else{
        return view('login');
      }
   
   }

   public function update(Request $request,$id){
      $email=$request->session()->get('email');    
      $name = $request->input('name');
      $email = $request->input('email');
      $address = $request->input('address');
      $phone = $request->input('phone');
      $waist = $request->input('waist');
      $inseam = $request->input('inseam');
      $outseam = $request->input('outseam');
      $rise = $request->input('rise');
      $hip = $request->input('hip');
      $thigh = $request->input('thigh');
      $jeanfit = $request->input('jeanfit');
      $style = $request->input('style');
      $fabric = $request->input('fabric');
      $fabricColor = $request->input('fabricColor');
      $scrapping = $request->input('scrapping');
      $whiskers = $request->input('whiskers');
      $rip = $request->input('rip');
      $text = $request->input('comment');

    DB::update('update orders set fullname = ? ,email = ? ,shippingAddress = ? ,phone = ? ,waist = ? ,inseam = ?,outseam = ?,rise = ?,hips = ?,thigh = ?,jeans = ?,style = ?,fabric = ?,fabricColor = ?,scrapping = ?,whiskers = ?,ripped = ?,text = ? where id = ?',[$name,$email,$address,$phone,$waist,$inseam,$outseam,$rise,$hip,$thigh,$jeanfit,$style,$fabric,$fabricColor,$scrapping,$whiskers,$rip,$text,$id]);
      return redirect()->action('orderViewController@index',['email'=>$email]);

   }

}
