<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function auth(Request $req){
        $credentials = $req->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect('/dashboardadmin');
        }

        return redirect()->back();
    }
    function show(){
        return view('dashboardadmin');
    }

    function index(){
        return view('loginadmin');
    }
    public function alumni(Request $req){
        $credentials = $req->only('email','password');

        If (Auth::guard('alumnis')->attempt($credentials)) {

            return redirect()->intended('/dashboardalumni');
        }
        return back()->withErrors(['email' => 'Invalid credebtials']);
    }
    function view(){
        return view('dashboardalumni');
    }

    function logout(){
        Auth::guard('web')->logout();
        return redirect('loginadmin');
    }

    function logoutalumni(){
        Auth::guard('alumnis')->logout();
        return redirect('loginalumni');
    }
}



