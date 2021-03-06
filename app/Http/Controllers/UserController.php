<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4',
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();

        Auth::login($user);

        return redirect()->route('product.index');
    }

    public function getSignin()
    {
        return view('user.signin');
    }
    
    public function postSignin(Request $request)
    {
        $this->validate($request,[
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt([ 'email' => $request->input('email'), 'password' => $request->input('password') ]))
        {
            return redirect()->route('product.index');
        }
        return redirect()->back();
    }

    public function getProfile()
    {
        return view('user.profile');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
