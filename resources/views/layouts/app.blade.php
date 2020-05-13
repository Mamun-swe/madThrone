<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/website.css') }}" rel="stylesheet">

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
                                    <img src="{{asset('website/images/static/logo.png')}}" class="img-fluid">
                                </div>
                                <div class="ml-auto d-none d-lg-block">
                                    <ul>
                                        <li><a href="">home</a></li>
                                        <li><a href="">services</a></li>
                                        <li><a href="">about us</a></li>
                                        <li><a href="">contact us</a></li>
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
                <li><a href="">home</a></li>
                <li><a href="">services</a></li>
                <li><a href="">about us</a></li>
                <li><a href="">contact us</a></li>
            </ul>
        </div>
        <!-- End Side Menu -->
        <main style="margin-top: 98px;">
            @yield('content')
        </main>


        <!-- Footer -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 pr-lg-5 mb-4 mb-lg-0">
                            <img src="{{asset('website/images/static/logo.png')}}" class="img-fluid mb-4">
                            <p class="mb-0">Qui dolore ipsum quia dolor sit amet, consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt lores ta porro ame.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h3 class="text-uppercase mb-4">connect with us</h3>
                            <ul>
                                <li><a target="_blank" href="https://www.facebook.com/MadThrone"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="mailto:someone@example.com"><i class="far fa-envelope"></i></a></li>
                            </ul>
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
