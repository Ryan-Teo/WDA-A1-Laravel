<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UserFormRequest;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function create()
    {
        $user = new User();
        return view('users.create', ['user' => $user ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
        ]);

        User::create($request->all());
        return redirect()->route('users.create') ->with('success','User is created successfully');
    }

}
