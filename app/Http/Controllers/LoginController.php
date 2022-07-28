<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
// use App\Models\Admins;
use DB;


class LoginController extends Controller
{

    function index() {
        // dd(session('data'));

        if(session()->get('data')) {
            return redirect('dashboard');
        }

        return view('dashboard.login.index');
    }

    function login() {

        $check = DB::table('admins')->where('email', Request::get('email'))->first();
        $password = Request::get('password');

        if (!$check) {

            return back()->with('loginError', 'Login Failed!');
        }else {
            
            if( Hash::check($password, $check->password) )
            {
                session(['data' => $check]);
                return redirect()->intended('dashboard');
            }
    
            return back()->with('loginError', 'Login Failed!');
        }

    }

    function logout() {
        Auth::logout();

        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/login')->with('Logout', 'Logout Succcessfully');
    }
}

