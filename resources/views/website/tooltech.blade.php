@extends('layouts.app')
@section('content')

<div class="tools_and_tech">
    <div class="header">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12 col-lg-6 content-column text-center text-lg-left">
                    <h1 class="text-uppercase mb-3">WE ARE "OLIVERWOOD FINANCE"</h1>
                    <p>Neque porro quisquam est, quiipsum quia dolor sit amet, consectetur adipisci numquam eius modi tempora incidunt lores ta porro ame.</p>
                </div>
                <div class="col-12 col-lg-6 p-0 img-column">
                    <img src="{{asset('website/images/static/about_banner.jpg')}}" class="img-fluid w-100">
                    <div class="overlay">
                        <div class="flex-center flex-column">
                            <h1 class="mb-0">Tools & Technologies</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="d-flex">
                        <div class="flex-fill">
                            <button type="button" class="btn btn-block shadow-none" id="tech">technologies</button>
                        </div>
                        <div class="flex-fill">
                            <button type="button" class="btn btn-block shadow-none" id="tools">tools</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="technologies">

                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/java.jpeg')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Java</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/spring.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Spring Boot</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/node.jpg')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Node JS</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/react.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">React JS</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/vue.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Vue JS</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/angular.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Angular 8</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/ionic.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Ionic JS</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/flutter.jpg')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Flutter</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/electron.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Electron JS</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/express.jpg')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Express JS</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/c.jpg')}}" class="img-fluid">
                            <p class="mb-0 text-muted">C#</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/jquery.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Jquery</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/laravel.jpg')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Laravel</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/socket.jpg')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Socket JS</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/mongodb.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">MongoDB</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/oracle.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Oracle</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/mysql.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">MySQL</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/aws.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">AWS</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/php.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">PHP</p>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row" id="allTools">
   
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/api.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">REST API</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/bitbucket.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Bitbucket</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/docker.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Docker</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/git.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Git</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/jenkins.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Jenkins</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/kubernetes.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Kubernetes</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/postman.jpg')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Postman</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/selenium.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Selenium</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/tomcat.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Tomcat</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/ubuntu.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Ubuntu</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/vscode.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">VSCode</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/xampp.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">xampp</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/zoho.jpg')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Zoho Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/burpsuite.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Burp Suite</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/metasploit.jpg')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Metasploit</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/nmap.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">nmap</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/heroku.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Heroku</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center m-auto">
                    <div class="card logo-card">
                        <div class="card-body">
                            <img src="{{asset('website/images/technoloy/jira.png')}}" class="img-fluid">
                            <p class="mb-0 text-muted">Jira</p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>


<script>
    $('#tech').addClass('active');

    $('#technologies').show();
    $('#allTools').hide();

    $('#tech').click(function(){
        $('#tech').addClass('active');
        $('#tools').removeClass('active');

        $('#technologies').show();
        $('#allTools').hide();
    })

    $('#tools').click(function(){
        $('#tools').addClass('active');
        $('#tech').removeClass('active');

        $('#allTools').show();
        $('#technologies').hide();
    })
</script>
</div>

@endsection