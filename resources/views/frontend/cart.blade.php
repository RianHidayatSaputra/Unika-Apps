@extends('template.main')
@section('content')
<div class="container pt-5 cart">
    <div class="row pt-5 border-bottom mb-2">
        <p class="home-cart"><a href="/" class="text-secondary text-decoration-none home-cart">HOME</a>/CART</p>
        <div class="col-xl-3">
            
        </div>
        <div class="col-xl-2">
            <h6 class="fs-6 mt-2 mb-3 fw-bold">Product</h6>
        </div>
        <div class="col-xl-2">
            <h6 class="fs-6 mt-2 mb-3 fw-bold">Price</h6>
        </div>
        <div class="col-xl-2">
            <h6 class="fs-6 mt-2 mb-3 fw-bold">Quantity</h6>
        </div>
        <div class="col-xl-2">
            <h6 class="fs-6 mt-2 mb-3 fw-bold">Total</h6>
        </div>
    </div>
    <div class="row border-bottom pb-2 mt-2">
        <div class="col-xl-3 d-flex justify-content-between align-items-center">
            <a href="#"><i class="bi bi-x text-secondary"></i></a>
            <div class="bg-light">
                <p class="text-light">knada</p>
            </div>
        </div>
        <div class="col-xl-2 d-flex align-items-center">
            <h6 class="data">Plain White Shirt </h6>
        </div>
        <div class="col-xl-2 d-flex align-items-center">
            <h6 class="data-lato text-secondary">$59.00</h6>
        </div>
        <div class="col-xl-2 d-flex align-items-center">
            <div class="border px-3 py-1">
                1
            </div>
        </div>
        <div class="col-xl-2 d-flex align-items-center">
            <h6 class="data-lato text-dark">$59.00</h6>
        </div>
    </div>
    <div class="row totals">
        <div class="col-xl-4">
            <form action="/checkout" >
                <h6 class="fs-2 mt-5 mb-3 fw-bold">Cart Totals</h6>
                <div class="border-bottom mt-4 d-flex justify-content-between">
                    <p class="text-secondary">Subtotal</p>
                    <p>$59.00</p>
                </div>
                <div class="border-bottom mt-4 d-flex justify-content-between">
                    <p class="text-secondary">Shopping Free</p>
                    <p class="text-secondary">FREE!!!</p>
                </div>
                <div class="mt-4 d-flex justify-content-between">
                    <p class="total fw-bold">Total</p>
                    <p>$59.00</p>
                </div>
                <button type="submit" class="px-4 py-3 fs-6 mt-4 text-white">PROCEED TO CHECKOUT</button>
            </form>
        </div>
    </div>
</div>
@endsection