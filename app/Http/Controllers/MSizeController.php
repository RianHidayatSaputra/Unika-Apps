<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Models\MSize;
use DB;

class MSizeController extends Controller
{
    function index() {

        $result['datas'] = DB::table('m_size')->get();

        return view('dashboard.m-size.index', $result);
    }

    function getAddMSize() {
        return view('dashboard.m-size.create');
    }

    function postAddMSize() {

        $validate = request()->validate([
            'name' => 'required|max:255'
        ]);

        $name = Request::get('name');

        DB::table('m_size')->insert([
            'name' => $name
        ]);

        return redirect('dashboard/master-size');
    }

    function getEditMSize($id) {

        $result['value'] = DB::table('m_size')->where('id', $id)->first();

        return view('dashboard.m-size.edit', $result);
    }

    function postEditMSize() {

        $validate = request()->validate([
            'name' => 'required|max:255'
        ]);

        $id = Request::get('id');
        $name = Request::get('name');
        

        DB::table('m_size')->where('id', $id)->update([
            'name' => $name
        ]);

        return redirect('dashboard/master-size');
    }

    function deleteMSize($id) {

        DB::table('m_size')->where('id', $id)->delete();
        

        return redirect('dashboard/master-size');
    }
}
