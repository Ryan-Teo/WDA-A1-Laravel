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

    public function store(UserFormRequest $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
        ]);

        $user = new User();
        $first_name = $request->name;
        $last_name = $request->last_name;
        $user->name = $first_name.' '.$last_name;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('inquiries.create') ->with('success','User is created successfully');
    }

    public function getUser($user_id){
        $user = User::find($user_id);

    }

}
