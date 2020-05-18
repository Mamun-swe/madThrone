@extends('layouts.app')
@section('content')

<div class="about">
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
                    <h1 class="text-uppercase mb-3">We are nothing but MAD at coding </h1>
                    <p>You may expect a lot of typical thing shold be written here. But we are sorry to say, we can't satisfy you at content writing.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Titel content -->
    <div class="title-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 text-center text-lg-left mb-4 mb-lg-0">
                    <p class="pb-1 text-muted">Who We Are</p>
                    <div class="line mb-3"></div>
                    <h1 class="mb-0">Profile</h1>
                </div>
                <div class="col-12 col-lg-9 pl-lg-5 pt-lg-4">
                    <p class="text">
                        We are bunch of graduates and "pre-graduates" acting as coder, tester, security activist and some of us don't act as none of this but they are intellectual and potential at other sides. We believe in productivity and quality.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Title content -->

    <!-- main content -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-3 pr-lg-5 text-center text-lg-right color-column">
                    <h5 class="pb-3">Who We Are</h5>
                    <div class="line mb-3"></div>
                    <h3 class="mb-0">ABOUT OUR ORGANIZATION</h3>
                </div>

                <div class="col-12 col-lg-3 text-center text-lg-left text-column px-lg-5">
                    <h3 class="text-uppercase mb-4">our vision</h3>
                    <p>To become one of the most reliable software development agency by providing our clients most secured and quality product as their requirement.</p>
                </div>
                <div class="col-12 col-lg-3 text-center text-lg-left text-column px-lg-5">
                    <h3 class="text-uppercase mb-4">our mission</h3>
                    <p>Provide a memorable experience to our clients what will make them return to us for another solution or service.</p>
                </div>
                <div class="col-12 col-lg-3 text-center text-lg-left text-column px-lg-5">
                    <h3 class="text-uppercase mb-4">our VALUES</h3>
                    <p>Trust, Focus, Integrity, Exelence, Consistency, Team Work</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End main content -->


    <!-- Team -->
    <!-- <div class="team">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-4 text-center px-lg-4 mb-5">
                    <div class="img-box rounded-circle">
                        <img src="{{asset('website/images/team/drogo.jpg')}}" class="img-fluid w-100">
                    </div>
                    <div class="content mt-4">
                        <h4 class="text-capitalize mb-2">Khal Drogo</h4>
                        <h6 class="text-capitalize mb-3">back-end</h6>
                    </div>
                </div>

                <div class="col-12 col-lg-4 text-center px-lg-4 mb-5">
                    <div class="img-box rounded-circle">
                        <img src="{{asset('website/images/team/terrion.jpg')}}" class="img-fluid">
                    </div>
                    <div class="content mt-4">
                        <h4 class="text-capitalize mb-2">Tyrion Lannister</h4>
                        <h6 class="text-capitalize mb-3">founder</h6>
                    </div>
                </div>


                <div class="col-12 col-lg-4 text-center px-lg-4 mb-5">
                    <div class="img-box rounded-circle">
                        <img src="{{asset('website/images/team/rob_stark.jpg')}}" class="img-fluid">
                    </div>
                    <div class="content mt-4">
                        <h4 class="text-capitalize mb-2">rob stark</h4>
                        <h6 class="text-capitalize mb-3">back-end</h6>
                    </div>
                </div>

                <div class="col-12 col-lg-4 text-center px-lg-4 mb-5">
                    <div class="img-box rounded-circle">
                        <img src="{{asset('website/images/team/bokhtiar.jpeg')}}" class="img-fluid">
                    </div>
                    <div class="content mt-4">
                        <h4 class="text-capitalize mb-2">Jaqen H’ghar</h4>
                        <h5 class="text-capitalize">bokhtiar toshar</h5>
                        <h6 class="text-capitalize mb-3">back-end</h6>
                        <div class="d-flex justify-content-center social">
                            <div>
                                <a target="_blank" href="https://www.facebook.com/bokhtiar.toshar.18">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 text-center px-lg-4 mb-5">
                    <div class="img-box rounded-circle">
                        <img src="{{asset('website/images/team/sazid.jpeg')}}" class="img-fluid">
                    </div>
                    <div class="content mt-4">
                        <h4 class="text-capitalize mb-2">jon Snow</h4>
                        <h5 class="text-capitalize">Sazid nur Ratul</h5>
                        <h6 class="text-capitalize mb-3">DevOps</h6>
                        <div class="d-flex justify-content-center social">
                            <div>
                                <a target="_blank" href="https://www.facebook.com/sazidnur">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div>
                                <a target="_blank" href="https://www.linkedin.com/in/sazidnur/">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 text-center px-lg-4 mb-5">
                    <div class="img-box rounded-circle">
                        <img src="{{asset('website/images/team/ratul.jpg')}}" class="img-fluid">
                    </div>
                    <div class="content mt-4">
                        <h4 class="text-capitalize mb-2">Daario Naharis</h4>
                        <h5 class="text-capitalize">Rashedul Hasan Ratul</h5>
                        <h6 class="text-capitalize mb-3">Software Quality Assurance</h6>
                        <div class="d-flex justify-content-center social">
                            <div>
                                <a target="_blank" href="https://www.facebook.com/RashidulHasanRatul">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div>
                                <a target="_blank" href="https://www.linkedin.com/in/rashidul-hasan-799a86167/">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 text-center px-lg-4 mb-5">
                    <div class="img-box rounded-circle">
                        <img src="{{asset('website/images/team/habib.jpg')}}" class="img-fluid">
                    </div>
                    <div class="content mt-4">
                        <h4 class="text-capitalize mb-2">Joffrey Baratheon</h4>
                        <h5 class="text-capitalize">abdullah al habib</h5>
                        <h6 class="text-capitalize mb-3">team player</h6>
                        <div class="d-flex justify-content-center social">
                            <div>
                                <a target="_blank" href="https://www.facebook.com/aalhabib001">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div>
                                <a target="_blank" href="https://www.linkedin.com/in/aalhabib001/">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

               

                


            </div>
        </div>
    </div> -->
    <!-- End Team -->

</div>

@endsection