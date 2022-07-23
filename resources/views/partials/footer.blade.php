@extends('template.main')
@section('content')
<div class="row-bawah bg-light" id="footer">
    <div class="container">
        <div class="row mt-5 border-bottom">
            <div class="col-xl-3">
                <h6 class="fs-6 mt-5 mb-3 fw-bold">COMPANY INFO</h6>
                <a href="#" class="fs-6 lh-lg text-decoration-none text-dark">About Us <br> Latest Post <br> Contact Us <br> Shop</a>
            </div>
            <div class="col-xl-3 mb-5">
                <h6 class="fs-6 mt-5 mb-3 fw-bold">HELP LINKS</h6>
                <a href="#" class="fs-6 lh-lg text-decoration-none text-dark">Tracking <br> Order Status <br> Delivery <br> Shipping Info <br> FAQ</a>
            </div>
            <div class="col-xl-3">
                <h6 class="fs-6 mt-5 mb-3 fw-bold">USEFUL LINKS</h6>
                <a href="#" class="fs-6 lh-lg text-decoration-none text-dark">Special Offers <br> Gift Cards <br> Advertising <br> Terms Of Use</a>
            </div>
            <div class="col-xl-3">
                <h6 class="fs-6 mt-5 mb-3 fw-bold">GET IN THE KNOW</h6>
                <form action="#" method="post">
                    <input type="email" name="email" id="email" placeholder="Enter email" class="border-bottom bg-light mt-3"><i class="bi bi-caret-right"></i>
                </form>
            </div>
        </div>
        <div class="row footer d-flex justify-content-between mt-4">
            <div class="col-xl-4">
                <p class="lh-base">&copy; 2022 Crocodic eCommerce <br> Privacy Police  Terms & Conditions</p>
            </div>
            <div class="col-xl-3">
                <div class="img">
                    <img src="{{asset('assets/img/visa-icon.png')}}" alt=" icon-visa" class="img-fluid">
                    <img src="{{asset('assets/img/card-icon.png')}}" alt=" icon-card" class="img-fluid">
                    <img src="{{asset('assets/img/paypal.png')}}" alt=" paypal" class="img-fluid">
                    <img src="{{asset('assets/img/visa-elektron.png')}}" alt=" icon-visa-elektron" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection