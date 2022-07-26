<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Models\TrOrders;
use DB;

class TrOrdersController extends Controller
{
    function index() {

        $result['datas'] = DB::table('tr_orders')->get();

        return view('dashboard.tr-orders.index', $result);
    }

    function getAddTrOrders() {
        return view('dashboard.tr-orders.create');
    }

    function postAddTrOrders() {


        $validate = request()->validate([
            'code_transaction' => 'required|max:255',
            'total_price' => 'required|numeric',
            'customers_id' => 'required|numeric',
            'status' => 'required|max:255'
        ]);

        $code_transaction = Request::get('code_transaction');
        $total_price = Request::get('total_price');
        $customers_id = Request::get('customers_id');
        $status = Request::get('status');

        DB::table('tr_orders')->insert([
            'code_transaction' => $code_transaction,
            'total_price' => $total_price,
            'customers_id' => $customers_id,
            'status' => $status
        ]);
        return redirect('dashboard/tr-orders');
    }

    function getEditTrOrders($id) {

        $result['value'] = DB::table('tr_orders')->where('id', $id)->first();

        return view('dashboard.tr-orders.edit', $result);
    }

    function postEditTrOrders() {

        $validate = request()->validate([
            'code_transaction' => 'required|max:255',
            'total_price' => 'required|numeric',
            'customers_id' => 'required|numeric',
            'status' => 'required|max:255'
        ]);

        $id = Request::get('id');
        $code_transaction = Request::get('code_transaction');
        $total_price = Request::get('total_price');
        $customers_id = Request::get('customers_id');
        $status = Request::get('status');
        

        DB::table('tr_orders')->where('id', $id)->update([
            'code_transaction' => $code_transaction,
            'total_price' => $total_price,
            'customers_id' => $customers_id,
            'status' => $status
        ]);

        return redirect('dashboard/tr-orders');
    }

    function deleteTrOrders($id) {

        DB::table('tr_orders')->where('id', $id)->delete();
        

        return redirect('dashboard/tr-orders');
    }
}