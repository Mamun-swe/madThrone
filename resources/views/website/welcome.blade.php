@extends('layouts.app')
@section('content')

<div class="home">
    <!-- Banner -->
    <div class="banner">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h5 class="my-4">Annual Review Of Oliverwood Finance</h5>
                        <h1 class="mb-4">See What Sets Us Apart</h1>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        <a href="" class="btn shadow-none">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Section 1 -->
    <div class="section-1">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12 col-lg-10 ml-auto">
                    
                    <div class="container-fluid px-0">
                        <div class="row">
                            <div class="col-12 col-lg-4 black-column bg-dark px-5 text-center text-lg-left">
                                <img src="{{asset('website/icons/investment.png')}}" class="img-fluid mb-5">
                                <h3 class="pb-4 mb-4 text-uppercase">BEST INVESTMENT PLANS</h3>
                                <p class="mb-4">Qui dolore ipsum quia dolor sit amet, consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt lores ta porro ame.</p>
                                <a href="" class="btn shadow-none">know more<i class="fas fa-angle-right ml-2"></i></a>
                            </div>
                            <div class="col-12 col-lg-8 px-0 img-content">
                                <img src="{{asset('website/images/static/img1.jpg')}}" class="img-fluid w-100">
                                <div class="content px-5 text-center text-lg-left py-5">
                                    <h1 class="mb-4 pb-4">We Teach You How To Invest Your Money</h1>
                                    <p>Neque porro quisquam est, qui dolore ipsum quia dolor sit amet, consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt lores ta porro ame.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Section 1 -->


        <!-- Section 2 -->
        <div class="section-2">
            <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12 col-lg-10">
                    
                    <div class="container-fluid px-0">
                        <div class="row">
                        <div class="col-12 col-lg-8 px-0 img-content">
                                <img src="{{asset('website/images/static/img2.jpg')}}" class="img-fluid w-100">
                                <div class="content px-5 text-center text-lg-left py-5">
                                    <h1 class="mb-4 pb-4">WE HELP YOU TRACK YOUR INVESTMENT PERFORMANCE</h1>
                                    <p>Neque porro quisquam est, qui dolore ipsum quia dolor sit amet, consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt lores ta porro ame.</p>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 color-column px-5 text-center text-lg-left">
                                <img src="{{asset('website/icons/investment.png')}}" class="img-fluid mb-5">
                                <h3 class="pb-4 mb-4 text-uppercase">TRACK YOUR INVESTMENT WITH OUR EXPERTS</h3>
                                <p class="mb-4">Qui dolore ipsum quia dolor sit amet, consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt lores ta porro ame.</p>
                                <a href="" class="btn shadow-none">know more<i class="fas fa-angle-right ml-2"></i></a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Section 2 -->

    <!-- Section 3 -->
    <div class="section-3">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-5">
                    <h1 class="mb-4">Our Core Values</h1>
                    <p class="mb-4">Driving Technology For Leading Brands</p>
                    <div class="boder mb-4"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-md-4 col-lg-2 text-center mb-5 mb-lg-0">
                    <img src="{{asset('website/icons/icon1.png')}}" class="img-fluid">
                    <h3 class="mb-0">trust</h3>
                </div>

                <div class="col-6 col-md-4 col-lg-2 text-center mb-5 mb-lg-0">
                    <img src="{{asset('website/icons/icon2.png')}}" class="img-fluid">
                    <h3 class="mb-0">Focus</h3>
                </div>

                <div class="col-6 col-md-4 col-lg-2 text-center mb-5 mb-lg-0">
                    <img src="{{asset('website/icons/icon3.png')}}" class="img-fluid">
                    <h3 class="mb-0">Integrity</h3>
                </div>

                <div class="col-6 col-md-4 col-lg-2 text-center mb-5 mb-lg-0">
                    <img src="{{asset('website/icons/icon4.png')}}" class="img-fluid">
                    <h3 class="mb-0">Excellence</h3>
                </div>

                <div class="col-6 col-md-4 col-lg-2 text-center mb-5 mb-lg-0">
                    <img src="{{asset('website/icons/icon5.png')}}" class="img-fluid">
                    <h3 class="mb-0">Consistency</h3>
                </div>

                <div class="col-6 col-md-4 col-lg-2 text-center mb-5 mb-lg-0">
                    <img src="{{asset('website/icons/icon6.png')}}" class="img-fluid">
                    <h3 class="mb-0">Team work</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section 3 -->


    <!-- Work Flow -->
    <div class="work-flow bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-5 title">
                    <p class="mb-2">Dummy text here</p>
                    <h1 class="mb-0 text-capitalize">our work process</h1>
                </div>
            </div>

            <div class="row circle-row">
            <div class="line d-none d-lg-block"></div>

                <div class="col-12 col-md-6 col-lg-2 text-center mb-5 mb-lg-0 circle-column">
                    <div class="circle rounded-circle border text-center mb-4">
                        <div class="flex-center flex-column">
                            <h2 class="mb-0">01</h2>
                        </div>
                    </div>
                    <h4 class="text-capitalize mb-3">concept</h4>
                    <p class="mb-0">Lorem ipsum, or lipsum as it is sometimes.</p>
                </div>

                <div class="col-12 col-md-6 col-lg-2 text-center mb-5 mb-lg-0">
                    <div class="circle rounded-circle border text-center mb-4">
                        <div class="flex-center flex-column">
                            <h2 class="mb-0">02</h2>
                        </div>
                    </div>
                    <h4 class="text-capitalize mb-3">plan</h4>
                    <p class="mb-0">Lorem ipsum, or lipsum as it is sometimes.</p>
                </div>

                <div class="col-12 col-md-6 col-lg-2 text-center mb-5 mb-lg-0">
                    <div class="circle rounded-circle border text-center mb-4">
                        <div class="flex-center flex-column">
                            <h2 class="mb-0">03</h2>
                        </div>
                    </div>
                    <h4 class="text-capitalize mb-3">design</h4>
                    <p class="mb-0">Lorem ipsum, or lipsum as it is sometimes.</p>
                </div>

                <div class="col-12 col-md-6 col-lg-2 text-center mb-5 mb-lg-0">
                    <div class="circle rounded-circle border text-center mb-4">
                        <div class="flex-center flex-column">
                            <h2 class="mb-0">04</h2>
                        </div>
                    </div>
                    <h4 class="text-capitalize mb-3">development</h4>
                    <p class="mb-0">Lorem ipsum, or lipsum as it is sometimes.</p>
                </div>

                <div class="col-12 col-md-6 col-lg-2 text-center mb-5 mb-lg-0">
                    <div class="circle rounded-circle border text-center mb-4">
                        <div class="flex-center flex-column">
                            <h2 class="mb-0">05</h2>
                        </div>
                    </div>
                    <h4 class="text-capitalize mb-3">testing</h4>
                    <p class="mb-0">Lorem ipsum, or lipsum as it is sometimes.</p>
                </div>

                <div class="col-12 col-md-6 col-lg-2 text-center">
                    <div class="circle rounded-circle border text-center mb-4">
                        <div class="flex-center flex-column">
                            <h2 class="mb-0">06</h2>
                        </div>
                    </div>
                    <h4 class="text-capitalize mb-3">deployment</h4>
                    <p class="mb-0">Lorem ipsum, or lipsum as it is sometimes.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- End Work Flow -->

    <!-- Focused -->
    <div class="focused">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 mb-lg-5">
                    <h4>We Are Always Focused On</h4>
                    <h1 class="mb-3">Growth​ Of Clients</h1>
                    <div class="boder"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 pr-lg-5">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h2 class="text-uppercase">INVESTMENT</h2>
                            <p>Qui dolore ipsum quia dolor sit amet, consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt lores ta porro ame.</p>
                        </div>
                        <div class="col-12 mb-4">
                            <h2 class="text-uppercase">LOANS</h2>
                            <p>Qui dolore ipsum quia dolor sit amet, consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt lores ta porro ame.</p>
                        </div>
                        <div class="col-12 mb-4">
                            <h2 class="text-uppercase">BUSINESS ADVICE</h2>
                            <p>Qui dolore ipsum quia dolor sit amet, consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt lores ta porro ame.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{asset('website/images/static/graph.png')}}" class="img-fluid w-100 mb-4">
                    <h2 class="text-uppercase">PROGRESS</h2>
                    <p>Qui dolore ipsum quia dolor sit amet, consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt lores ta porro ame.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Focused -->

    <!-- Count -->
    <div class="count-parallax">
        <div class="count">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3 mb-5 mb-lg-0 text-center">
                        <h1 class="mb-0">1</h1>
                        <p class="mb-0">Project Manager</p>
                    </div>
                    <div class="col-12 col-lg-3 mb-5 mb-lg-0 text-center">
                        <h1 class="mb-0">10</h1>
                        <p class="mb-0">Software Engineer</p>
                    </div>
                    <div class="col-12 col-lg-3 mb-5 mb-lg-0 text-center">
                        <h1 class="mb-0">2</h1>
                        <p class="mb-0">QA Engineer</p>
                    </div>
                    <div class="col-12 col-lg-3 mb-5 mb-lg-0 text-center">
                        <h1 class="mb-0">2</h1>
                        <p class="mb-0">Business Analysist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Count -->

</div>

@endsection