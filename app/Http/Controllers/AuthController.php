<?php

namespace App\Http\Controllers;

use App\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public $userService;
    public function __construct(UserService $userService)
    {
        $this->userService =$userService;
    }

    public function showFormLogin()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request){
        if ($this->userService->login($request)){
            return redirect()->route('blogs.index');
        } else {
            Session::flash('msg', 'Tài khoản, mạt khẩu không đúng');
            return redirect()->back();
        }
    }

    public function showFormRegister()
    {
        $roles = DB::table('roles')->get();
        return view('backend.auth.register', compact('roles'));
    }

    public function register(Request $request)
    {

      $response= $this->userService->create($request);
        return redirect()->route('showFormLogin');
    }
}