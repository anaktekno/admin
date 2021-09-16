<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function getLogin()
    {
        return view ('login');
    }

    public function postLogin (Request $request)
    {
        
        if(!\Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            return redirect()->back();
        }
        return redirect()->route('dashboard');

    }

    public function getRegistration()
    {
        return view ('regiz');
    }

    public function postRegistration (Request $request)
    {
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->back();
        // dd('Registration OK');

    }

    public function logout(){
        \Auth::logout();
        return redirect()->route('login');
    }
}