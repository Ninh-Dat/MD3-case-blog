<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
//    public $userModel;
//
//    public function __construct(UserModel $userModel)
//    {
//        $this->userModel = $userModel;
//    }

    public function index()
    {
        $users=User::all();
        return view('backend.user.index', compact('users'));
    }

    public function create()
    {
        return view('backend.user.create');
    }

    public function store(Request $request)
    {
        $users= new  User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password = Hash::make('password');
        $users->phone = $request->phone;
        $users->save();
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $user= User::all()->where('id')->first();
        return view('backend.user.detail', compact('user'));
    }


    public function edit($id)
    {
        $user = User::all()->where('id',$id)->first();
        return view('backend.user.update',compact(['id','user']));
    }

    public function update(Request $request, $id)
    {
        $users= User::all()->where('id',$id)->first();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->phone = $request->phone;
        $users->save();
        return redirect()->route('users.index', compact('users'));
    }

    public function destroy($id)
    {
        User::all()->where('id',$id)->first()->delete();
        return redirect()->route('users.index');
    }
}
