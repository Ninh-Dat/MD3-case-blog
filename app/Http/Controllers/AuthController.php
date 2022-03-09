<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showFormLogin(){
        return view('backend.auth.login');
    }
    public function login(Request $request){

        $user = $request->only('email','password');
        if (Auth::attempt($user)){
            return view('backend.master');
        }
        else{
            Session::flash('msg','Tài khoản không đúng');
            return redirect()->back();
        }
    }

    public function showFormRegister(){
        return view('backend.auth.register');
    }
    public function register(Request $request)
    {
        $user = $request->only('name', 'email', 'password', 'phone');
        $user["password"] = Hash::make($user["password"]);
        DB::table('users')->insert($user);
        return redirect()->route('login');
    }

    public function logout(){
        return redirect()->route('login');
    }

}
