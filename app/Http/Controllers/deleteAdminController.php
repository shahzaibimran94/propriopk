<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class deleteAdminController extends Controller
{
    public function index(Request $request,$id){
    	$email=$request->session()->get('email');
    	if($email){
    	DB::delete('delete from admin where id = ?',[$id]);
    	return redirect()->action('adminViewController@index',['email'=>$email]);
    	}else{
    		return view('login');
    	}
    }
}
