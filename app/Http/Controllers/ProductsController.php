<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Products;
use DB;

class ProductsController extends Controller
{
    function index() {

        $result['datas'] = DB::table('products')->get();

        return view('dashboard.products.index', $result);
    }

    function getAddProducts() {
        return view('dashboard.products.create');
    }

    function postAddProducts() {


        $validate = request()->validate([
            'product_name' => 'required|max:255',
            'product_code' => 'required|max:255',
            'product_photo' => 'image|file|max:1024',
            'product_price' => 'required|numeric',
            'flag' => 'required|numeric',
            'description' => 'required|max:255'
        ]);

        $product_name = Request::get('product_name');
        $product_code = Request::get('product_code');
        $product_photo = Request::file('product_photo')->store('uploads');
        $product_price = Request::get('product_price');
        $flag = Request::get('flag');
        $description = Request::get('description');

        DB::table('products')->insert([
            'product_name' => $product_name,
            'product_code' => $product_code,
            'product_photo' => $product_photo,
            'product_price' => $product_price,
            'flag' => $flag,
            'description' => $description
        ]);
        return redirect('dashboard/products');
    }

    function getEditProducts($id) {

        $result['value'] = DB::table('products')->where('id', $id)->first();

        return view('dashboard.products.edit', $result);
    }

    function postEditProducts() {

        $validate = request()->validate([
            'product_name' => 'required|max:255',
            'product_code' => 'required|max:255',
            'product_photo' => 'image|file|max:6000',
            'product_price' => 'required|numeric',
            'flag' => 'required|numeric',
            'description' => 'required|max:255'
        ]);

        $id = Request::get('id');
        $product_name = Request::get('product_name');
        $product_code = Request::get('product_code');
        $product_photo = Request::file('product_photo')->store('uploads');
        $product_price = Request::get('product_price');
        $flag = Request::get('flag');
        $description = Request::get('description');
        

        DB::table('products')->where('id', $id)->update([
            'product_name' => $product_name,
            'product_code' => $product_code,
            'product_photo' => $product_photo,
            'product_price' => $product_price,
            'flag' => $flag,
            'description' => $description
        ]);

        if (request()->oldPhoto) {
            Storage::delete(request()->oldPhoto);
        }

        return redirect('dashboard/products');
    }

    function deleteProducts($id) {

        $product_photo = DB::table('products')->where('id', $id)->first();

        if ($product_photo->product_photo) {
            Storage::delete($product_photo->product_photo);
        }

        DB::table('products')->where('id', $id)->delete();
        

        return redirect('dashboard/products');
    }
}
