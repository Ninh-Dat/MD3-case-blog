<?php

namespace App\Http\Controllers;

use App\Repositories\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;

    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }

    public function index()
    {
        $users=$this->userModel->index();
        return view('backend.user.index', compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user=$this->userModel->show($id);
        return view('backend.user.detail', compact('user'));
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $this->userModel->destroy($id);
        return redirect()->route('users.index');
    }
}
