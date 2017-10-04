<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class HelpdeskLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:helpdesk');
    }

    public function showLoginForm(){
        return view('auth.helpdesk-login');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password' =>'required|min:8'
        ]);

        if(Auth::guard('helpdesk')->attempt(['email' => $request->email,'password' =>$request->password],
            $request->remember)){

            return redirect()->intended(route('helpdesk.dashboard'));

        }

        return redirect()->back();
    }
}
