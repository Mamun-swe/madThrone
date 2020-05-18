@extends('layouts.app')
@section('content')

<div class="contact-us about">
    <div class="header">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12 col-lg-6 p-0 img-column">
                    <img src="{{asset('website/images/static/about_banner.jpg')}}" class="img-fluid w-100">
                    <div class="overlay">
                        <div class="flex-center flex-column">
                            <h1 class="mb-0">About Us</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 content-column text-center text-lg-left">
                    <h1 class="text-uppercase mb-3 mt-lg-5 pt-lg-4">GET IN TOUCH WITH US FOR BEST ADVICE ON BUSINESS</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                    <h1 class="mb-4 text-center text-lg-left">PAY US A VISIT AT ONE OF OUR OFFICES</h1>
                    <h3 class="mb-5 text-center text-lg-left">Mirpur-1, Dhaka, Bangladesh</h3>
                    <ul class="text-center text-lg-left">
                        <li><i class="fas fa-phone mr-2 text-muted"></i>+880 19 6731 1499</li>
                        <li><i class="far fa-envelope mr-2 text-muted"></i><a href="mailto:raven@madthrone.com">raven@madthrone.com</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34725.25470261364!2d90.29185480019402!3d23.817077937586056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0fe08e63923%3A0x9daf2e89fe3579d0!2s1%20Mirpur%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1589814514004!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection