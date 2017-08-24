<!DOCTYPE html>
<html lang="en" ng-app="sharity" ng-controller="yayasanDetailController" ng-init="init('{{Request::path()}}')">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sharity - Mari Berbagi</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('css/bootstrap/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/fonts/google-font.css')}}" rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{asset('css/creative.css')}}" rel="stylesheet">
    <link href="{{asset('css/pages.css')}}" rel="stylesheet">

</head>
<body id="page-top" class="profile">
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll primary-color" href="/">Sharity</a>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="profile-picture">
                        <img src="{{asset('img/banner/[[yayasan.banner_pict]]')}}">
                    </div>
                </div>

                <div class="col-md-8 col-xs-6">
                    <div class="profile-name">
                        <h3 class="primary-color"> [[yayasan.name]]</h3>
                    </div>
                    <hr/>
                    <div class="profile-description">
                        <span>
                            [[yayasan.description]]
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark events">
        <div class="container text-center">
            <div class="row">
                <h2 class="title">Past Events</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-lg-6 col-xs-12 photos">
                <a href="{{asset('img/portfolio/fullsize/1.jpg')}}" class="portfolio-box">
                    <img src="{{asset('img/portfolio/thumbnails/1.jpg')}}" class="yayasan-box img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Nama
                            </div>
                            <div class="project-name">
                                Tanggal
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-xs-12">
                <div class="col-lg-6 col-xs-6 photos" ng-repeat="n in [1,2,3,4]">
                    <a href="{{asset('img/portfolio/fullsize/1.jpg')}}" class="portfolio-box">
                        <img src="{{asset('img/portfolio/thumbnails/1.jpg')}}" class="yayasan-box img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Nama
                                </div>
                                <div class="project-name">
                                    Tanggal
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="{{asset('js/core/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/core/bootstrap.min.js')}}"></script>

    <!-- Angular JavaScript -->
    <script src="{{asset('js/core/angular.min.js')}}"></script>

    <!-- Angular Controller -->
    <script src="{{asset('js/controller/yayasan.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('js/plugins/jquery-easing.js')}}"></script>
    <script src="{{asset('js/plugins/scroll-reveal.js')}}"></script>
    <script src="{{asset('js/plugins/magnific-popup.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{asset('js/creative.min.js')}}"></script>
</body>
