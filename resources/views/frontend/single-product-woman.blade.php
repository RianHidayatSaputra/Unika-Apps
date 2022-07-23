@extends('template.main')
@section('content')
<div class="container single-product-woman">
    <div class="row">
        <div class="col-xl-6">
            <img src="{{asset('assets/img/img-single-product-woman.png')}}" alt="Single Product Woman" class="w-100 mt-5 img-fluid">
        </div>
        <div class="col-xl-6">
            <p class="home-shop"><a href="/" class="text-secondary text-decoration-none home-shop">HOME</a>/SHOP</p>
            <h6 class="fs-2 mt-2 mb-3 fw-bold">Plain White Shirt</h6>
            <div class="d-flex">
                <div class="img">
                    <img src="{{asset('assets/img/icon-star-color.png')}}" alt="Star" class="img-fluid">
                    <img src="{{asset('assets/img/icon-star-color.png')}}" alt="Star" class="img-fluid">
                    <img src="{{asset('assets/img/icon-star-color.png')}}" alt="Star" class="img-fluid">
                    <img src="{{asset('assets/img/icon-star-color.png')}}" alt="Star" class="img-fluid">
                    <img src="{{asset('assets/img/icon-star-no-color.png')}}" alt="Star no color">
                </div>
                <div class="text">
                    <p class=" ms-2">(15)</p>
                </div>
            </div>
            <form action="/cart">
                <div class="d-flex">
                    <p class="Recently mb-4 text-secondary fs-4"><del>$69.00</del></p>
                    <p class="Recently mb-4 fs-4 ms-2 text-primary">$59.00</p>
                </div>
                <p class="Recently mb-4">A classic t-shirt never goes out of style. This is our most premium collection of shirt. This plain white shirt is made up of pure cotton and has a premium finish.</p>
                <div class="row">
                    <div class="col-xl-6">
                        <select class="mb-3 py-3 px-4 mt-3 bg-light fs-5 w-75">
                            <option>Select Size</option>
                            <option value="1">S</option>
                            <option value="2">L</option>
                            <option value="3">XL</option>
                            <option value="4">XXL</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="px-4 py-3 fs-6 mt-4 text-white">ADD TO CART</button>
            </form>
            <p class="mt-5"><span class="fw-bold">Category: </span>Women, Polo, Casual</p>
            <p><span class="fw-bold"> Tags: </span>Modern, Design, cotton</p>
            <div class="d-flex mt-5">
                <div class="bg-light rounded-circle">
                    <p class="text-light">ajsjg</p>
                </div>
                <div class="bg-light rounded-circle mx-2">
                    <p class="text-light">ajsjg</p>
                </div>
                <div class="bg-light rounded-circle">
                    <p class="text-light">ajsjg</p>
                </div>
                <div class="bg-light rounded-circle mx-2">
                    <p class="text-light">ajsjg</p>
                </div>
                <div class="bg-light p-2 rounded-circle">
                    <i class="bi bi-envelope"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="diskon p-1 bg-warning rounded-circle">
        <p class="fw-bold mt-1">-24%</p>
    </div>
    <div class="row mt-2 mb-5">
        <div class="col-xl-6 d-flex">
                <div class="bg-light px-4 py-5">
                    <p class="text-light">jasdhjshjndi</p>
                </div>
                <div class="bg-light mx-2 px-4 py-5">
                    <p class="text-light">jasdhjshjnii</p>
                </div>
                <div class="bg-light px-4 py-5">
                    <p class="text-light">jasdhjshjndi</p>
                </div>
                <div class="bg-light mx-2 px-4 py-5">
                    <p class="text-light">jasdhjshjndi</p>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 d-flex">
            <a href="#" class="border text-decoration-none text-dark px-3 py-2">Description</a>
            <a href="#" class="border text-decoration-none text-secondary bg-light p-2">Reviews(0)</a>
        </div>
    </div>
    <div class="row p-5 border">
        <p>A key objective is engaging digital marketing customers and allowing them to interact with the brand through servicing and delivery of digital media. Information is easy to access at a fast rate through the use of digital communications. Users with access to the Internet can use many digital mediums, such as Facebook, YouTube, Forums, and Email etc. Through Digital communications it creates a Multi-communication channel where information can be quickly exchanged around the world by anyone without any regard to whom they are.[28] Social segregation plays no part through social mediums due to lack of face to face communication and information being wide spread instead to a selective audience. </p>
    </div>
</div>
@endsection