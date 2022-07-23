@extends('template.main')
@section('content')
<nav class="navbar bg-body position-fixed w-100 navbar-expand-lg ps-5 pt-3" id="nav">
        <img src="{{asset('assets/img/crocodic.png')}}" alt="logo crocodic" class="img-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 ms-5 mb-lg-0">
                <li class="nav-item ms-3">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }} " aria-current="page" href="#">Home</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }} " href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }} " href="#">Contact Us</a>
                </li>
            </ul>
        </div>
        
        <div class="collapse navbar-collapse d-flex flex-row-reverse menu-right" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#"><i class="bi bi-person"></i></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-handbag"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-list"></i></a>
                </li>
            </ul>
        </div>
</nav>
@endsection