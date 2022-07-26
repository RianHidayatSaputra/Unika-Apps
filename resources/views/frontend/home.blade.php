@extends('template.main')
@section('content')
    <img src="{{ asset('assets/img/img_1.png') }}" alt="background" class="img-fluid">

    <p class="fw-bold stylist text-white">STYLIST PICK BEAT <span class="ms-5 ps-5">THE HEAT</span></p>
    <div class="home"><a href="/single-product-woman" class="btn btn-info bg-transparent text-white">Shop Now</a></div>

    <h6 class="text-center fs-3 mt-4 mb-2 fw-bold">Discover New Arrival</h6>
    <p class="Recently text-center">Recently added shirts!</p>

    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="col-xl-3">
                <img src="{{ asset('assets/img/img-1.png') }}" alt="gambar 1" class="img-fluid">
                <a href="#" class="text-decoration-none text-dark">
                    <p class="text-center nama-products fw-bold mt-3">Plain White Shirt</p>
                </a>
                <p class="text-center dolar text-primary">$29.00</p>
            </div>
            <div class="col-xl-3">
                <img src="{{ asset('assets/img/img-2.png') }}" alt="gambar 2" class="img-fluid">
                <a href="#" class="text-decoration-none text-dark">
                    <p class="text-center nama-products fw-bold mt-3">Denim Jacket</p>
                </a>
                <p class="text-center dolar text-primary">$69.00</p>
            </div>
            <div class="col-xl-3">
                <img src="{{ asset('assets/img/img-3.png') }}" alt="gambar 3" class="img-fluid">
                <a href="#" class="text-decoration-none text-dark">
                    <p class="text-center nama-products fw-bold mt-3">Black Polo Shirt</p>
                </a>
                <p class="text-center dolar text-primary">$49.00</p>
            </div>
            <div class="col-xl-3">
                <img src="{{ asset('assets/img/img-4.png') }}" alt="gambar 4" class="img-fluid">
                <a href="#" class="text-decoration-none text-dark">
                    <p class="text-center nama-products fw-bold mt-3">Blue Sweatshirt</p>
                </a>
                <p class="text-center dolar text-primary">$79.00</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-xl-3">
                <img src="{{ asset('assets/img/img-5.png') }}" alt="gambar 5" class="img-fluid">
                <a href="#" class="text-decoration-none text-dark">
                    <p class="text-center nama-products fw-bold mt-3">Blue Plain Shirt</p>
                </a>
                <p class="text-center dolar text-primary">$49.00</p>
            </div>
            <div class="col-xl-3">
                <img src="{{ asset('assets/img/img-6.png') }}" alt="gambar 6" class="img-fluid">
                <a href="#" class="text-decoration-none text-dark">
                    <p class="text-center nama-products fw-bold mt-3">Dark Blue Shirt</p>
                </a>
                <p class="text-center dolar text-primary">$89.00</p>
            </div>
            <div class="col-xl-3">
                <img src="{{ asset('assets/img/img-7.png') }}" alt="gambar 7" class="img-fluid">
                <a href="#" class="text-decoration-none text-dark">
                    <p class="text-center nama-products fw-bold mt-3">Outcast T Shirt</p>
                </a>
                <p class="text-center dolar text-primary">$19.00</p>
            </div>
            <div class="col-xl-3">
                <img src="{{ asset('assets/img/img-8.png') }}" alt="gambar 8" class="img-fluid">
                <a href="#" class="text-decoration-none text-dark">
                    <p class="text-center nama-products fw-bold mt-3">Polo Plain Shirt</p>
                </a>
                <p class="text-center dolar text-primary">$29.00</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-xl-3 d-flex">
                <img src="{{ asset('assets/img/icon-truk.png') }}" alt="icon-truk" class="img-fluid icon">
                <div class="text-icon ms-3">
                    <h5 class="fs-6 fw-bold">FREE SHIPPING</h5>
                    <p class="fs-6">Enjoy free shipping on all orders above $100</p>
                </div>
            </div>
            <div class="col-xl-3 d-flex">
                <img src="{{ asset('assets/img/icon-bundar.png') }}" alt="icon-bundar" class="img-fluid icon">
                <div class="text-icon ms-3">
                    <h5 class="fs-6 fw-bold">SUPPORT 24/7</h5>
                    <p class="fs-6">Our support team is thereto help you for queries</p>
                </div>
            </div>
            <div class="col-xl-3 d-flex">
                <img src="{{ asset('assets/img/icon-refresh.png') }}" alt="icon-refresh" class="img-fluid icon">
                <div class="text-icon ms-3">
                    <h5 class="fs-6 fw-bold">30 DAYS RETURN</h5>
                    <p class="fs-6">Simply return it within 30 days for an exchange.</p>
                </div>
            </div>
            <div class="col-xl-3 d-flex">
                <img src="{{ asset('assets/img/icon-sidik-jari.png') }}" alt="icon-sidik-jari" class="img-fluid icon">
                <div class="text-icon ms-3">
                    <h5 class="fs-6 fw-bold">100% PAYMENT SECURE</h5>
                    <p class="fs-6">Oue payment are secured with 256 bit encryption</p>
                </div>
            </div>
        </div>
        <div class="row mb-5 peace d-flex justify-content-between">
            <div class="col-xl-6 mb-2 bg-dark">
                <div class="m-auto w-50 my-5 py-5">
                    <p class="text-white fs-3 text-center">PEACE OF MIND</p>
                    <p class="text-white text-center">A one-stop platform for all your fashion needs, hassle free, Buy with
                        a peace of mind.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="bg-light text-decoration-none p-2">BUY NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 mb-2 bg-dark">
                <div class="m-auto w-75 my-5 py-5">
                    <p class="text-white fs-3 text-center">BUY 2 GET 1 FREE</p>
                    <p class="text-white text-center">End of season sale. Buy any 2 item of your choice and get 1 free.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="bg-light text-decoration-none p-2">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>

        <h6 class="text-center fs-3 mt-4 mb-2 fw-bold">Top Sellers</h6>
        <p class="Recently text-center">Browse our top-selling products</p>

        <div class="row mb-5 mt-5">
            <div class="col-xl-3">
                <img src="{{ asset('assets/img/img-9.png') }}" alt="gambar 9" class="img-fluid">
                <p class="text-center nama-products fw-bold mt-3">Gray Polo Shirt</p>
                <p class="text-center dolar text-primary">$49.00</p>
            </div>
            <div class="col-xl-3">
                <img src="{{ asset('assets/img/img-10.png') }}" alt="gambar 10" class="img-fluid">
                <p class="text-center nama-products fw-bold mt-3">Red Shirt</p>
                <p class="text-center dolar text-primary">$69.00</p>
            </div>
            <div class="col-xl-3">
                <img src="{{ asset('assets/img/img-11.png') }}" alt="gambar 11" class="img-fluid">
                <p class="text-center nama-products fw-bold mt-3">Polo White Shirt</p>
                <p class="text-center dolar text-primary">$29.00</p>
            </div>
            <div class="col-xl-3">
                <img src="{{ asset('assets/img/img-12.png') }}" alt="gambar 12" class="img-fluid">
                <p class="text-center nama-products fw-bold mt-3">Pink Casual Shirt</p>
                <p class="text-center dolar text-primary">$39.00</p>
            </div>
            <div class="button mt-4 d-flex justify-content-center">
                <a href="#" class="text-white text-decoration-none px-4 py-3">SHOP NOW</a>
            </div>
        </div>
    </div>
@endsection
