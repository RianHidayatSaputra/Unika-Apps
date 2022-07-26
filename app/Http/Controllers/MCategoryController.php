<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Models\MCategory;
use DB;

class MCategoryController extends Controller
{
    function index() {

        $result['datas'] = DB::table('m_category')->get();

        return view('dashboard.m-category.index', $result);
    }

    function getAddMCategory() {
        return view('dashboard.m-category.create');
    }

    function postAddMCategory() {

        $validate = request()->validate([
            'name' => 'required|max:255'
        ]);

        $name = Request::get('name');

        DB::table('m_category')->insert([
            'name' => $name
        ]);

        return redirect('dashboard/master-category');
    }

    function getEditMCategory($id) {

        $result['value'] = DB::table('m_category')->where('id', $id)->first();

        return view('dashboard.m-category.edit', $result);
    }

    function postEditMCategory() {

        $validate = request()->validate([
            'name' => 'required|max:255'
        ]);

        $id = Request::get('id');
        $name = Request::get('name');
        

        DB::table('m_category')->where('id', $id)->update([
            'name' => $name
        ]);

        return redirect('dashboard/master-category');
    }

    function deleteMCategory($id) {

        DB::table('m_category')->where('id', $id)->delete();
        

        return redirect('dashboard/master-category');
    }
}
