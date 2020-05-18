<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MadThrone | Software Development Agency</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="website/images/static/title_logo.png">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/website.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/service.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/toolstech.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/contact.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <!-- Website Nav -->
        <div class="website-nav">
            <div class="nav py-4 shadow-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div>
                                    <a href="{{route('welcome')}}"><img src="{{asset('website/images/static/logo.png')}}" class="img-fluid"></a>
                                </div>
                                <div class="ml-auto d-none d-lg-block">
                                    <ul>
                                        <li><a href="{{route('welcome')}}">home</a></li>
                                        <li><a href="{{route('service')}}">services</a></li>
                                        <li><a href="{{route('about-us')}}">about us</a></li>
                                        <li><a href="{{route('contact-us')}}">contact us</a></li>
                                    </ul>
                                </div>
                                <div class="ml-auto d-lg-none">
                                    <i class="fas fa-bars bar open-menu"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Website Nav -->

        <!-- Side Menu -->
        <div class="side-menu d-lg-none">
            <div class="close-section text-right">
                <span class="close-icon">&times;</span>
            </div>
            <ul>
                <li><a href="{{route('welcome')}}">home</a></li>
                <li><a href="{{route('service')}}">services</a></li>
                <li><a href="{{route('about-us')}}">about us</a></li>
                <li><a href="{{route('contact-us')}}">contact us</a></li>
            </ul>
        </div>
        <!-- End Side Menu -->
        <main style="margin-top: 98px;">
            @yield('content')
        </main>


        <!-- Footer -->
            <div class="footer">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 col-lg-6 pr-lg-5 mb-4 mb-lg-0">
                            <a href="{{route('welcome')}}"><img src="{{asset('website/images/static/logo.png')}}" class="img-fluid mb-4"></a>
                            <p class="mb-0">We are bunch of graduates and "pre-graduates" acting as coder, tester, security activist and some of us don't act as none of this but they are intellectual and potential at other sides. We believe in productivity and quality.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h3 class="text-uppercase mb-4">connect with us</h3>
                            <ul>
                                <li><a target="_blank" href="https://www.facebook.com/MadThrone"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank"href="https://www.linkedin.com/company/madthrone/"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="mailto:someone@example.com"><i class="far fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 copyright py-3 text-center border-top">
                            <p class="mb-0 text-dark">Copyright 2020 <span><b>MadThrone</b></span> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Footer -->
    </div>

    <script>
        $(document).ready(function(){
            $('.open-menu').click(function(){
                $('.side-menu').addClass('open-menu');
            });
            $('.close-icon').click(function(){
                $('.side-menu').removeClass('open-menu');
            })
        })
    </script>
</body>
</html>
