<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class store extends Controller
{
    public function reg(Request $request){

         $request->validate([
            'phone'=>['regex:/\d{3}-\d{7}|\d{10}/',],
            'password'=>[
                'required',
                'min:8',             // must be at least 10 characters in length
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'uname'=>[
                'required',
                'min:6',
            ],
            'nic' => 'required|regex:/^\d{9}V$/',
        ]); 
        
        

        
        
        if($request->password==$request->rpassword && $request->agree=="on"){

            DB::table('users')->insert([
                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'uname' => $request->uname,
                'address' => $request->address,
                'password' => Hash::make($request->password),
                'nic' => $request->nic,
                'phone' => $request->phone,
                'agree' => "agreed",
            ]);
            $p1="";
            $p2="";
            $p3="";
            if($request->p1=="on"){
                $p1="package 1 X ".$request->p1q." => sub total:".$request->p1t.",  ";
            }
            if($request->p2=="on"){
                $p2="package 2 X ".$request->p2q." => sub total:".$request->p2t.",  ";
            }
            if($request->p3=="on"){
                $p3="package 3 X ".$request->p3q." => sub total:".$request->p3t;
            }

            DB::table('orders')->insert([
                'uname' => $request->uname,
                'details' => $p1.$p2.$p3,
                'total' => $request->total,
            ]);

            $details=['title'=>'Thank you for making a order here. Your order has been placed succesfully.',
                   'body'=>$p1."  ".$p2."  ".$p3.",  Total:".$request->total];
            Mail::to($request->email)->send(new TestMail($details));

            $s="Registered successfully";
            return redirect()->route('login')->with('msg',$s);
        }
        else{
            if($request->agree=="off"){
                $s="Please agree to terms & conditions";
                return redirect()->back()->with('msg',$s);
            }
            else{
                $s="Password Retype Is Wrong.";
                return redirect()->back()->with('msg',$s);
            }
        }
        
        
        
    }
}
