<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\MCategoryController;
use App\Http\Controllers\MSizeController;
use App\Http\Controllers\MTagsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TrOrdersController;
use App\Http\Controllers\TrOrdersDetailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['CekBelumLogin']], function() {

    // Route Frontend
    Route::get('/home', function () {
        return view('frontend.home');
    });

    Route::get('/about', function () {
        return view('frontend.about');
    });

    Route::get('/contact-us', function () {
        return view('frontend.contact-us');
    });

    Route::get('/single-product-man', function () {
        return view('frontend.single-product-man');
    });

    Route::get('/single-product-woman', function () {
        return view('frontend.single-product-woman');
    });

    Route::get('/cart', function () {
        return view('frontend.cart');
    });

    Route::get('/checkout', function () {
        return view('frontend.checkout');
    });

    // Route Backend
    Route::get('/dashboard', function () {

        return view('dashboard.index');
    });

    //Route Logout
    Route::post('/logout', [LoginController::class, 'logout']);

    Route::controller(CustomersController::class)->group(function () {
        Route::get('/dashboard/customers', 'index');
        Route::get('/dashboard/customers/add', 'getAddCustomers');
        Route::post('/dashboard/customers/store', 'postAddCustomers');
        Route::get('/dashboard/customers/edit/{id}', 'getEditCustomers');
        Route::post('/dashboard/customers/update', 'postEditCustomers');
        Route::get('/dashboard/customers/delete/{id}', 'deleteCustomers');
    });
    
    Route::controller(AdminsController::class)->group(function () {
        Route::get('/dashboard/admins', 'index');
        Route::get('/dashboard/admins/add', 'getAddAdmins');
        Route::post('/dashboard/admins/store', 'postAddAdmins');
        Route::get('/dashboard/admins/edit/{id}', 'getEditAdmins');
        Route::post('/dashboard/admins/update', 'postEditAdmins');
        Route::get('/dashboard/admins/delete/{id}', 'deleteAdmins');
    });
    
    Route::controller(MTagsController::class)->group(function () {
        Route::get('/dashboard/master-tags', 'index');
        Route::get('/dashboard/master-tags/add', 'getAddMTags');
        Route::post('/dashboard/master-tags/store', 'postAddMTags');
        Route::get('/dashboard/master-tags/edit/{id}', 'getEditMTags');
        Route::post('/dashboard/master-tags/update', 'postEditMTags');
        Route::get('/dashboard/master-tags/delete/{id}', 'deleteMTags');
    });
    
    Route::controller(MSizeController::class)->group(function () {
        Route::get('/dashboard/master-size', 'index');
        Route::get('/dashboard/master-size/add', 'getAddMSize');
        Route::post('/dashboard/master-size/store', 'postAddMSize');
        Route::get('/dashboard/master-size/edit/{id}', 'getEditMSize');
        Route::post('/dashboard/master-size/update', 'postEditMSize');
        Route::get('/dashboard/master-size/delete/{id}', 'deleteMSize');
    });
    
    Route::controller(MCategoryController::class)->group(function () {
        Route::get('/dashboard/master-category', 'index');
        Route::get('/dashboard/master-category/add', 'getAddMCategory');
        Route::post('/dashboard/master-category/store', 'postAddMCategory');
        Route::get('/dashboard/master-category/edit/{id}', 'getEditMCategory');
        Route::post('/dashboard/master-category/update', 'postEditMCategory');
        Route::get('/dashboard/master-category/delete/{id}', 'deleteMCategory');
    });
    
    Route::controller(ProductsController::class)->group(function () {
        Route::get('/dashboard/products', 'index');
        Route::get('/dashboard/products/add', 'getAddProducts');
        Route::post('/dashboard/products/store', 'postAddProducts');
        Route::get('/dashboard/products/edit/{id}', 'getEditProducts');
        Route::post('/dashboard/products/update', 'postEditProducts');
        Route::get('/dashboard/products/delete/{id}', 'deleteProducts');
    });
    
    Route::controller(TrOrdersController::class)->group(function () {
        Route::get('/dashboard/tr-orders', 'index');
        Route::get('/dashboard/tr-orders/add', 'getAddTrOrders');
        Route::post('/dashboard/tr-orders/store', 'postAddTrOrders');
        Route::get('/dashboard/tr-orders/edit/{id}', 'getEditTrOrders');
        Route::post('/dashboard/tr-orders/update', 'postEditTrOrders');
        Route::get('/dashboard/tr-orders/delete/{id}', 'deleteTrOrders');
    });
});


Route::group(['middleware' => ['CekSudahLogin']], function() {

    // Route Login
    Route::controller(LoginController::class)->group( function() {
        Route::get('/login', 'index');
        Route::post('/login', 'login');
    });
    
    // Route Register
    Route::controller(RegisterController::class)->group( function() {
        Route::get('/register', 'index');
        Route::post('/register', 'store');
    });
});
