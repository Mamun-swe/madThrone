@extends('layouts.app')
@section('content')

<div class="service about">
    <div class="header">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12 col-lg-6 content-column text-center text-lg-left">
                    <h1 class="text-uppercase mb-3">CAPABLE TO HANDLE</h1>
                    <p>We are capable to build your desired projects and make your investment worthy.</p>
                </div>
                <div class="col-12 col-lg-6 p-0 img-column">
                    <img src="{{asset('website/images/static/about_banner.jpg')}}" class="img-fluid w-100">
                    <div class="overlay">
                        <div class="flex-center flex-column">
                            <h1 class="mb-0">Our Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="all-services pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-4">
                    <h2>Services not limited to</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-12 col-sm-6 col-lg-4 service-column">
                    <div class="card shadow border-0">
                        <div class="card-body p-4">
                            <i class="fas fa-code"></i>
                            <h5 class="mb-3">custom software development</h5>
                            <p class="mb-0">Have your problem solved with a fully funcntional solution and stay calm with your business or some other idea.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 service-column">
                    <div class="card shadow border-0">
                        <div class="card-body p-4">
                            <i class="fab fa-codepen"></i>
                            <h5 class="mb-3">web application development</h5>
                            <p class="mb-0">Help yourself by migrating your web based idea into rality. We are capable to provide you satisfactory delevery.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 service-column">
                    <div class="card shadow border-0">
                        <div class="card-body p-4">
                            <i class="fas fa-mobile"></i>
                            <h5 class="mb-3">mobile application development</h5>
                            <p class="mb-0">Nowadays, most used device is mobile. Make us your development partner to develop your dream application.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 service-column">
                    <div class="card shadow border-0">
                        <div class="card-body p-4">
                            <i class="fas fa-bug"></i>
                            <h5 class="mb-3">software quality assurance</h5>
                            <p class="mb-0">We believe in quality. Before deliver a project we make sure it's quality by our experts. </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 service-column">
                    <div class="card shadow border-0">
                        <div class="card-body p-4">
                            <i class="fas fa-shield-alt"></i>
                            <h5 class="mb-3">security audit</h5>
                            <p class="mb-0">They say, no system is secured. But we try our best to make it secured by throwing a security audit. </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 service-column">
                    <div class="card shadow border-0">
                        <div class="card-body p-4">
                            <i class="fas fa-puzzle-piece"></i>
                            <h5 class="mb-3">API integration service</h5>
                            <p class="mb-0">If you don't know API, leave it. But if you know, need one? We love to play with APIes.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="portfolio pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-4">
                    <h2>These projects may give you some idea about our skill set</h2>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-sm-6 col-lg-4 portfolio-column p-0">
                    <a target="_blank" href="https://axistro.herokuapp.com">
                        <div class="poster">
                            <img src="{{asset('website/images/portfolio/1.png')}}" class="img-fluid">
                            <div class="overlay">
                                <div class="flex-center flex-column">
                                    <h5 class="mb-0 text-white">Axistro Web Application</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 portfolio-column p-0">
                    <a target="_blank" href="https://xio-fod.herokuapp.com">
                        <div class="poster">
                            <img src="{{asset('website/images/portfolio/2.png')}}" class="img-fluid">
                            <div class="overlay">
                                <div class="flex-center flex-column">
                                    <h5 class="mb-0 text-white">XIO-food Web Application v0.1</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 portfolio-column p-0">
                    <a target="_blank" href="https://xiofood.herokuapp.com/">
                        <div class="poster">
                            <img src="{{asset('website/images/portfolio/3.png')}}" class="img-fluid">
                            <div class="overlay">
                                <div class="flex-center flex-column">
                                    <h5 class="mb-0 text-white">XIO-food Web Application v0.2</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 portfolio-column p-0">
                    <a target="_blank" href="https://www.thetitanesports.com">
                        <div class="poster">
                            <img src="{{asset('website/images/portfolio/4.png')}}" class="img-fluid">
                            <div class="overlay">
                                <div class="flex-center flex-column">
                                    <h5 class="mb-0 text-white">The TiTan Esports </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 portfolio-column p-0">
                    <a target="_blank" href="https://medicoocean.herokuapp.com">
                        <div class="poster">
                            <img src="{{asset('website/images/portfolio/5.png')}}" class="img-fluid">
                            <div class="overlay">
                                <div class="flex-center flex-column">
                                    <h5 class="mb-0 text-white">Medicoocean</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 portfolio-column p-0">
                    <a target="_blank" href="http://medi-rider.herokuapp.com">
                        <div class="poster">
                            <img src="{{asset('website/images/portfolio/6.png')}}" class="img-fluid">
                            <div class="overlay">
                                <div class="flex-center flex-column">
                                    <h5 class="mb-0 text-white">Medi-Rider</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 portfolio-column p-0">
                    <a target="_blank" href="https://dinajpursheba.com">
                        <div class="poster">
                            <img src="{{asset('website/images/portfolio/7.png')}}" class="img-fluid">
                            <div class="overlay">
                                <div class="flex-center flex-column">
                                    <h5 class="mb-0 text-white">দিনাজপুর সেবা</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

              

                


            </div>
        </div>
    </div>


</div>

@endsection