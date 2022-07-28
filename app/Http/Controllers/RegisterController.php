<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use DB;

class RegisterController extends Controller
{
    public function index() {
        return view('dashboard.register.index');
    }
    
    public function store() {
        
        $validate = request()->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:admins',
            'password' => 'required',
            'photo' => 'required|file|image|max:1024'
        ]);
        
        $name = Request::get('name');
        $_token = Request::get('_token');
        $email = Request::get('email');
        $password = Request::get('password');
        $photo = Request::file('photo')->store('uploads');
        
        DB::table('admins')->insert([
            'name' => $name,
            'email' => $email,
            'remember_token' => $_token,
            'password' => bcrypt($password),
            'photo' => $photo
        ]);
        
        return redirect('/login')->with('success', 'Regristration Successfully!');;
    }
}
