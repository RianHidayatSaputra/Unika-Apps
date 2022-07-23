@extends('template.main')
@section('content')
<img src="{{asset('assets/img/bg-about.png')}}" alt="background" class="img-fluid">

<p class="northstar fs-1 text-white">ABOUT NORTHSTAR</p>

<div class="container mt-4 about">
    <div class="row d-flex justify-content-between">
        <div class="col-xl-6">
            <img src="{{asset('assets/img/img-about-1.png')}}" alt="image about perempuan" class="img-fluid">
        </div>
        <div class="col-xl-6">
            <img src="{{asset('assets/img/img-about-2.png')}}" alt="image about laki-laki" class="img-fluid">
        </div>
    </div>
    <div class="row button-1">
        <div class="col-xl-4">
            <a href="/single-product-woman" class="btn btn-light text-primary rounded-pill py-2 px-3">BUY NOW</a>
        </div> 
    </div>
    <div class="row button-2">
        <div class="col-xl-4">
            <a href="/single-product-man" class="btn btn-light text-primary rounded-pill py-2 px-3">BUY NOW</a>
        </div> 
    </div>
    <h6 class="text-center fs-3 mt-5 mb-5 fw-bold">The Founders</h6>
    <div class="row">
        <div class="col-xl-3">
            <img src="{{asset('assets/img/hm-jawad.png')}}" alt="HM Jawad" class="img-fluid">
            <p class="text-center nama-products fw-bold mt-3">HM Jawad</p>
        </div>
        <div class="col-xl-3">
            <img src="{{asset('assets/img/furqan-abid.png')}}" alt="Furqan Abid" class="img-fluid">
            <p class="text-center nama-products fw-bold mt-3">Furqan Abid</p>
        </div>
        <div class="col-xl-3">
            <img src="{{asset('assets/img/abdullah-ah.png')}}" alt="Abdullah Ah" class="img-fluid">
            <p class="text-center nama-products fw-bold mt-3">Abdullah Ah</p>
        </div>
        <div class="col-xl-3">
            <img src="{{asset('assets/img/abrar-khan.png')}}" alt="Abrar Khan" class="img-fluid">
            <p class="text-center nama-products fw-bold mt-3">Abrar Khan</p>
        </div>
    </div>
    <h6 class="text-center fs-3 mt-5 mb-5 fw-bold">Testimonials</h6>
    <div class="row">
        <div class="col-xl-9 m-auto d-flex"> 
            <img src="{{asset('assets/img/stacy.png')}}" alt="icon-truk" class="img-fluid icon">
            <div class="text-icon ms-3">
                <img src="{{asset('assets/img/quote.png')}}" alt="Quote">
                <p class="fs-5 mt-3 fw-bold">Once we ordered some accessories items and we got the products delivered in our doorstep, the customer support was super helpful and they answered all my queries.</p>
                <p class="people fw-bold">Stacy</p>
            </div>
        </div>
    </div>
    <div class="row mt-5 mt-3">
        <div class="col-xl-9 m-auto d-flex"> 
            <img src="{{asset('assets/img/tiffany.png')}}" alt="icon-truk" class="img-fluid icon">
            <div class="text-icon ms-3">
                <img src="{{asset('assets/img/quote.png')}}" alt="Quote">
                <p class="fs-5 mt-3 fw-bold">Once we ordered some accessories items and we got the products delivered in our doorstep, the customer support was super helpful and they answered all my queries.</p>
                <p class="people fw-bold">Tiffany</p>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-xl-9 m-auto d-flex"> 
            <img src="{{asset('assets/img/james.png')}}" alt="icon-truk" class="img-fluid icon">
            <div class="text-icon ms-3">
                <img src="{{asset('assets/img/quote.png')}}" alt="Quote">
                <p class="fs-5 mt-3 fw-bold">Once we ordered some accessories items and we got the products delivered in our doorstep, the customer support was super helpful and they answered all my queries.</p>
                <p class="people fw-bold">James</p>
            </div>
        </div>
    </div>
    
</div>
@endsection