<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class portalController extends Controller
{
    public function index(Request $request){
        $email=$request->session()->get('email');
        if($email){
        $totalOrders = DB::select('select count(id) as sum from orders where status="pending"');
        $count=$totalOrders[0]->sum;
        $deliveredOrders = DB::select('select count(id) as sum from orders where status="delivered"');
        $dcount=$deliveredOrders[0]->sum;
        $tcount = DB::table('orders')->count('id');
    	return view('portalView',['email'=>$email],['count'=>$count])->with(['dcount'=>$dcount])->with(['tcount'=>$tcount]);
        }else{
            return view('login');
        }
    }

    public function check(Request $request){
    	
    	$email=$_POST['email'];
    	$password=$_POST['password'];
        
    	$data = DB::select("select * from admin where email='$email'");
    	if(empty($data)){
            return view('login');
        }else{

        $dbEmail=$data[0]->email;
    	$dbPass=$data[0]->password;
        $name=$data[0]->name;
        $id=$data[0]->id;
        
    	   if($email==$dbEmail && $password==$dbPass){
    		$request->session()->put('email',"$dbEmail");
            //$totalOrders = DB::table('orders')->count('id');
            $email=$request->session()->get('email');

            $totalOrders = DB::select('select count(id) as sum from orders where status="pending"');
            $count=$totalOrders[0]->sum;
            $deliveredOrders = DB::select('select count(id) as sum from orders where status="delivered"');
            $dcount=$deliveredOrders[0]->sum;
            $tcount = DB::table('orders')->count('id');
            
    		return view('portalView',['email'=>$email],['count'=>$count])->with(['dcount'=>$dcount])->with(['tcount'=>$tcount]);
    	   }else{
                $msg="Credentials you entered were incorrect";
                return view('login')->with(['$msg'=>$msg]);
    	   }
        }
    }

    public function logout(Request $request){
    	$request->session()->forget('email');
    	return view('login'); 
    }

}
