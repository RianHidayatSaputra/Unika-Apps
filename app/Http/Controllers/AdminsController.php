<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Admins;
use DB;

class AdminsController extends Controller
{

    function index() {

        $result['datas'] = DB::table('admins')->get();

        return view('dashboard.admins.index', $result);
    }

    function getAddAdmins() {
        return view('dashboard.admins.create');
    }

    function postAddAdmins() {

        $validate = request()->validate([
            'name' => 'required',
            'photo' => 'image|file|max:1024',
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        $name = Request::get('name');
        $photo = Request::file('photo')->store('uploads');
        $email = Request::get('email');
        $password = Request::get('password');

        DB::table('admins')->insert([
            'name' => $name,
            'photo' => $photo,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        return redirect('dashboard/admins');
    }

    function getEditAdmins($id) {

        $result['value'] = DB::table('admins')->where('id', $id)->first();

        return view('dashboard.admins.edit', $result);
    }

    function postEditAdmins() {

        $validate = request()->validate([
            'name' => 'required',
            'photo' => 'image|file|max:1024',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $id = Request::get('id');
        $name = Request::get('name');
        $photo = Request::file('photo')->store('uploads');
        $email = Request::get('email');
        $password = Request::get('password');
        

        DB::table('admins')->where('id', $id)->update([
            'name' => $name,
            'photo' => $photo,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        if (request()->oldPhoto) {
            Storage::delete(request()->oldPhoto);
        }

        return redirect('dashboard/admins');
    }

    function deleteAdmins($id) {

        $photo = DB::table('admins')->where('id', $id)->first();

        if ($photo->photo) {
            Storage::delete($photo->photo);
        }

        DB::table('admins')->where('id', $id)->delete();
        

        return redirect('dashboard/admins');
    }
}
