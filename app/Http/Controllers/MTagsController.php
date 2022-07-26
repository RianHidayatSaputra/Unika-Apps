<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Models\MTags;
use DB;

class MTagsController extends Controller
{
    function index() {

        $result['datas'] = DB::table('m_tags')->get();

        return view('dashboard.m-tags.index', $result);
    }

    function getAddMTags() {
        return view('dashboard.m-tags.create');
    }

    function postAddMTags() {

        $validate = request()->validate([
            'name' => 'required|max:255'
        ]);

        $name = Request::get('name');

        DB::table('m_tags')->insert([
            'name' => $name
        ]);

        return redirect('dashboard/master-tags');
    }

    function getEditMTags($id) {

        $result['value'] = DB::table('m_tags')->where('id', $id)->first();

        return view('dashboard.m-tags.edit', $result);
    }

    function postEditMTags() {

        $validate = request()->validate([
            'name' => 'required|max:255'
        ]);

        $id = Request::get('id');
        $name = Request::get('name');
        

        DB::table('m_tags')->where('id', $id)->update([
            'name' => $name
        ]);

        return redirect('dashboard/master-tags');
    }

    function deleteMTags($id) {

        DB::table('m_tags')->where('id', $id)->delete();
        

        return redirect('dashboard/master-tags');
    }
}
