<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; //to import the database 
use Illuminate\Models\User;
use Illuminate\Http\Request;
use Validator;
use Auth;

class UserController extends Controller
{
    // //to show the login page
    // public function showLogin(){
    //     return view('user/login');
    // }
    // //to validate the user login details
    // public function userLogin(Request $req){ //data must come with post reuqest
    //     // $req->validate([
    //     //     'email'=>['required', 'max:20', 'regex:/(.*)@(mrbglobalbd|millwardbrown)\.com/i'],
    //     //     'password'=>'required',

    //     // ]);

    //     $login_data=array(
    //         'email'=>$req->get('email'),
    //         'password'=>$req->get('password')
    //     );

    //     if(Auth::attempt($login_data)){
    //         return redirect('loginSuccess');
    //     }
    //     else{
    //         return back()->with('error','Invalid Login Details!');
    //     }
    // }
    // public function loginSuccess(){
    //     return view('user/home');
    // }
}