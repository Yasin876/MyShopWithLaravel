<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{


    public function login(Request $request){

        $user = User::where(['email'=>$request->email])->first();

        if(!$user || !Hash::check($request->password,$user->password)){
            return "Please check your password or username";
        }else{
           $request->session()->put('user',$user);
           return redirect()->route('home');
        }
    }

    public function logout(Request $request){
        $request->session()->forget('user');
        return redirect()->route('home');
    }
}
