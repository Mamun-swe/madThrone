@extends('layouts.app')
@section('content')

<div class="home">
    <!-- Banner -->
    <div class="banner">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h5 class="my-4">Capable to handle</h5>
                        <h1 class="mb-4">Another Typical Software Development Agency</h1>
                        <p class="mb-5">Though we are typical but skilled and experienced in the world's most powerful and strong technologies to make our clients tensionless about products.</p>
                        <a href="#tools-technology" class="btn shadow-none">tools & technologies</a>
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
                                <h3 class="pb-4 mb-4 text-uppercase">CAPABLE TO HANDLE</h3>
                                <p class="mb-4">Before starting a project we ensure proper Requirement Analysis to understand your idea perfectly. Our teammates are concerned to make your investment worthy.</p>
                            </div>
                            <div class="col-12 col-lg-8 px-0 img-content">
                                <img src="{{asset('website/images/static/img1.jpg')}}" class="img-fluid w-100">
                                <div class="content px-5 text-center text-lg-left py-5">
                                    <h1 class="mb-4 pb-4">Quality Assurance and Security</h1>
                                    <p>You would be happy to know that we are highly concerned to ensure your product’s quality and security.</p>
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
                                <div class="content px-5 py-5">
                                    <h1 class="mb-4 pb-4">Focused services but not limited to</h1>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <ul>
                                                <li><p>Management Information System (MIS)</p></li>
                                                <li><p>Enterprise Resourse Planning (ERP)</p></li>
                                                <li><p>Customer Relationship Management (CRM)</p></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul>
                                                <li><p>Human Resource Management (HRM)</p></li>
                                                <li><p>E-commerce </p></li>
                                                <li><p>POS</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 color-column px-5 text-center text-lg-left">
                                <img src="{{asset('website/icons/investment.png')}}" class="img-fluid mb-5">
                                <h3 class="pb-4 mb-4 text-uppercase">Our Speciality</h3>
                                <p class="mb-4">Aren't you interested to check out our skill set and recent works?</p>
                                <a href="{{route('service')}}" class="btn shadow-none">know more<i class="fas fa-angle-right ml-2"></i></a>
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
                    <p class="mb-2">We believe in professionalism</p>
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
                    <h4 class="text-capitalize mb-3">Concept</h4>
                    <p class="mb-0">Idea generation or brainstorming to solution a problem or to make a difference.</p>
                </div>

                <div class="col-12 col-md-6 col-lg-2 text-center mb-5 mb-lg-0">
                    <div class="circle rounded-circle border text-center mb-4">
                        <div class="flex-center flex-column">
                            <h2 class="mb-0">02</h2>
                        </div>
                    </div>
                    <h4 class="text-capitalize mb-3">Requirement Analysis</h4>
                    <p class="mb-0">Gathering requirments from the client and analysing them.</p>
                </div>

                <div class="col-12 col-md-6 col-lg-2 text-center mb-5 mb-lg-0">
                    <div class="circle rounded-circle border text-center mb-4">
                        <div class="flex-center flex-column">
                            <h2 class="mb-0">03</h2>
                        </div>
                    </div>
                    <h4 class="text-capitalize mb-3">design</h4>
                    <p class="mb-0">Making the architechture for the required idea to be developed.</p>
                </div>

                <div class="col-12 col-md-6 col-lg-2 text-center mb-5 mb-lg-0">
                    <div class="circle rounded-circle border text-center mb-4">
                        <div class="flex-center flex-column">
                            <h2 class="mb-0">04</h2>
                        </div>
                    </div>
                    <h4 class="text-capitalize mb-3">development</h4>
                    <p class="mb-0">Starting to code to develop the project as requirement.</p>
                </div>

                <div class="col-12 col-md-6 col-lg-2 text-center mb-5 mb-lg-0">
                    <div class="circle rounded-circle border text-center mb-4">
                        <div class="flex-center flex-column">
                            <h2 class="mb-0">05</h2>
                        </div>
                    </div>
                    <h4 class="text-capitalize mb-3">testing</h4>
                    <p class="mb-0">Checking the project to testify it's productivity and quality by following the given requiremnt.</p>
                </div>

                <div class="col-12 col-md-6 col-lg-2 text-center">
                    <div class="circle rounded-circle border text-center mb-4">
                        <div class="flex-center flex-column">
                            <h2 class="mb-0">06</h2>
                        </div>
                    </div>
                    <h4 class="text-capitalize mb-3">deployment</h4>
                    <p class="mb-0">Making the project usable and live if after completing all the processes.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- End Work Flow -->

    <!-- Focused -->
    <!-- <div class="focused">
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
    </div> -->
    <!-- End Focused -->

    <!-- Tools & Technology -->
    <div class="tools-technology" id="tools-technology">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center title mb-5">
                    <h1 class="mb-2">Tools & Technology</h1>
                    <p class="mb-0">Which technology we are use</p>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/node.jpg')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Node JS</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/react.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">React JS</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/vue.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Vue JS</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/angular.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Angular 8</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/java.jpeg')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Java 11</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/laravel.jpg')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Laravel</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/spring.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Spring Boot</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/mongodb.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">MongoDB</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/oracle.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Oracle DB</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/docker.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Docker</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/selenium.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Selenium</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/aws.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">AWS</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center pt-5">
                    <a href="{{route('tools-tech')}}" class="btn shadow-none text-white">Know More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Tools & Technology -->


    <!-- Count -->
    <div class="count-parallax">
        <div class="count">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3 mb-5 mb-lg-0 text-center">
                        <h1 class="mb-0">5</h1>
                        <p class="mb-0">Software Engineer</p>
                    </div>
                    <div class="col-12 col-lg-3 mb-5 mb-lg-0 text-center">
                        <h1 class="mb-0">1</h1>
                        <p class="mb-0">DevOps</p>
                    </div>
                    <div class="col-12 col-lg-3 mb-5 mb-lg-0 text-center">
                        <h1 class="mb-0">1</h1>
                        <p class="mb-0">QA Engineer</p>
                    </div>
                    <div class="col-12 col-lg-3 mb-5 mb-lg-0 text-center">
                        <h1 class="mb-0">2</h1>
                        <p class="mb-0">Sales & Marketing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Count -->

</div>

@endsection