<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
//    public $userModel;
//
//    public function __construct(UserRepository $userModel)
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
        $roles = Role::all();
        return view('backend.user.create', compact('roles'));
    }

    public function store(Request $request)
    {

        $users= new  User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password = Hash::make('password');
        $users->role_id = $request->select;
        $users->save();
        return redirect()->route('users.index',);
    }

    public function show($id)
    {
        $user= User::all()->where('id', $id)->first();
        return view('backend.user.detail', compact('user'));
    }


    public function edit($id)
    {
        $roles= Role::all();
        $user = User::all()->where('id',$id)->first();
        return view('backend.user.update',compact(['id','user','roles']));
    }

    public function update(Request $request, $id)
    {

        $users= User::all()->where('id',$id)->first();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->role_id = $request->role_id;
        $users->save();
        return redirect()->route('users.index', compact(['users']));
    }

    public function destroy($id)
    {
        User::all()->where('id',$id)->first()->delete();
        return redirect()->route('users.index');
    }
}
