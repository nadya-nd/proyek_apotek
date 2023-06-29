<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);


        if (Auth::attempt($credentials)){
            if(Auth::user()->role_id == '1'){
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/pegawai');
            }
        } else{
            return redirect()->back()->withErrors(['message' => 'Invalid']);
        }
    }

    public function signout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
