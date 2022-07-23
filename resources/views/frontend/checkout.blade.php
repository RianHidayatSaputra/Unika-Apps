@extends('template.main')
@section('content')
<div class="container pt-5 cart">
    <div id="popup" class="w-100">
    <div class="row pt-5 mb-2" >
        <p class="home-checkout"><a href="/" class="text-secondary text-decoration-none home-checkout">HOME</a>/CHECKOUT</p>
        <h6 class="fs-2 mt-3 mb-3 fw-bold">Billing Details</h6>
        <form>
            <div class="mb-3">
                <label for="nama" class="form-label">Full Name<i class="text-danger">*</i></label><br>
                <input class="border py-2 px-3 w-50" type="text" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="street-address" class="form-label">Street address<i class="text-danger">*</i></label><br>
                <input class="border py-2 px-3 w-50"  type="text" id="street-address" name="street-address" placeholder="House number and street name">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Town / City<i class="text-danger">*</i></label><br>
                <input class="border py-2 px-3 w-50"  type="text" id="city" name="city">
            </div>
            <div class="mb-3">
                <label for="no-hp" class="form-label">Phone<i class="text-danger">*</i></label><br>
                <input class="border py-2 px-3 w-50"  type="text" id="no-hp" name="no-hp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address<i class="text-danger">*</i></label><br>
                <input class="border py-2 px-3 w-50"  type="email" id="email" name="email">
            </div>
            </div>
            <h6 class="fs-2 mt-3 mb-3 fw-bold">Billing Details</h6>
            <div class="row border">
                <div class="col-xl-7 border-end">
                    <h6 class="fs-6 mt-2 mb-3 fw-bold">Product</h6>
                </div>
                <div class="col-xl-5">
                    <p class="fs-6 mt-2 mb-3 fw-bold">Total</p>
                </div>
            </div>
            <div class="row border-start border-end d-flex align-items-center">
                <div class="col-xl-7 border-end">
                    <p class="data text-secondary pt-1">Plain White Shirt </p>
                </div>
                <div class="col-xl-5">
                    <h6 class="data-lato text-secondary">$59.00</h6>
                </div>
            </div>
            <div class="row border-top border-bottom border-start border-end d-flex align-items-center">
                <div class="col-xl-7 border-end pt-1">
                    <p class="text-secondary data">Subtotal</p> 
                </div>
                <div class="col-xl-5">
                    <h6 class="data-lato text-secondary">$59.00</h6>
                </div>
            </div>
            <div class="row border-start border-end border-bottom mb-5">
                <div class="col-xl-7 border-end">
                </div>
                <div class="col-xl-5  p-2">
                    <h6 class="data-lato text-dark">$59.00</h6>
                </div>
            </div>
            <div class="row p-4 mb-5 border">
                <div class="col-xl-12 bg-light p-2">
                    <p class="text-secondary">Cash on delivery.  Please contact us if you require assistance or wish to make alternate arrangements.</p>
                </div>
                <div class="col-xl-12 d-flex justify-content-end">
                    <button type="submit" class="px-4 py-2 fs-6 mt-4 text-white place-order" onclick="popUp()">PLACE ORDER</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    popUp = () => {
        var elemen = document.getElementById('popup')
        var footer = document.getElementById('footer')
        var nav = document.getElementById('nav')
        var body = document.getElementById('body')
        
        text = `<div class="d-flex justify-content-center">
                    <h1 class="bg-success p-4 text-white text-center rounded-2" style="border:2px solid white;">Checkout Successfully!!
                        <div class="d-flex justify-content-end">
                            <a href="/" class="btn btn-secondary mt-3 text-white border">Close</a>
                        </div>
                    </h1>
                </div>`
        
        body.style.backgroundColor = '#ccc'
        nav.style.display = 'none'
        footer.style.display = 'none'
        elemen.innerHTML = text
    }
</script>

@endsection