<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Customers;
use DB;

class CustomersController extends Controller
{
    function index() {

        $result['datas'] = DB::table('customers')->get();

        return view('dashboard.customers.index', $result);
    }

    function getAddCustomers() {
        return view('dashboard.customers.create');
    }

    function postAddCustomers() {

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

        DB::table('customers')->insert([
            'name' => $name,
            'photo' => $photo,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        return redirect('dashboard/customers');
    }

    function getEditCustomers($id) {

        $result['value'] = DB::table('customers')->where('id', $id)->first();

        return view('dashboard.customers.edit', $result);
    }

    function postEditCustomers() {

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
        

        DB::table('customers')->where('id', $id)->update([
            'name' => $name,
            'photo' => $photo,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        if (request()->oldPhoto) {
            Storage::delete(request()->oldPhoto);
        }

        return redirect('dashboard/customers');
    }

    function deleteCustomers($id) {

        $photo = DB::table('customers')->where('id', $id)->first();

        if ($photo->photo) {
            Storage::delete($photo->photo);
        }

        DB::table('customers')->where('id', $id)->delete();
        

        return redirect('dashboard/customers');
    }
}
