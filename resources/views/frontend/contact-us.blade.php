@extends('template.main')
@section('content')
<img src="{{asset('assets/img/bg-contact.png')}}" alt="Background contact" class="img-fluid mt-5">

<p class="contact-us fs-1 text-white">CONTACT US</p>

<div class="container">
    <div class="row mt-5">
        <div class="col-xl-9" id="massage">
            <h6 class="fs-3 mt-4 mb-4 fw-bold">We would love to hear from you.</h6>
            <p class="Recently mb-4">If you have any query or any type of suggestion, you can contact us here. We would love to hear from you.</p>
            <form action="/message/send" method="post">
                <div class="input d-flex">
                    <div class="input-nama w-50">
                        <label for="nama">Nama</label><br>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="input-email w-50">
                        <label for="email" class="ms-2">Email</label><br>
                        <input type="email" name="email" id="email" class="form-control ms-1">
                    </div>
                </div>
                <label for="message" class="mt-3">Message</label><br>
                <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>

                <button class="text-white px-4 py-3 mt-4 mb-5" type="submit" onclick="ganti()">SEND MESSAGE</button>
            </form>
        </div>
        <div class="col-xl-3">
            <h6 class="fs-4 mt-4 mb-3 fw-bold">Visit Us</h6>
            <p class="Recently mb-4 fs-6">UET Lahore, Punjab, Pakistan <br> Phone: +923039898987</p>
            <h6 class="fs-4 mt-4 mb-3 fw-bold">Get In Touch</h6>
            <p class="Recently mb-4">You can get in touch with us on this provided email. <br><br>Email:hmjawad087@gmail.com</p>
        </div>
    </div>
</div>

<script>
    ganti = () => {

        var elemen = document.getElementById('massage')
        var text = `<h1 class="text-center">
                        Message sent. We'll contact you soon.
                    </h1><br><br><br><br><br><br><br>

                    <a href="/" class="text-white text-decoration-none px-4 py-2 bg-primary">Go Back</a>
                `
        elemen.innerHTML = text
    }
</script>
@endsection