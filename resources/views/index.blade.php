<!DOCTYPE html>
<html lang="en" ng-app="sharity" ng-controller="sharityController" ng-init="init()">

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
    <link href="{{asset('css/home.css')}}" rel="stylesheet">

</head>

<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Sharity</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#tentang">Tentang Kami</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#kategori">Kategori</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#yayasan">Yayasan</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#event">Event</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Sharity - Mari Berbagi</h1>
                <hr>
                <p>Sharity adalah platform untuk yayasan menyuarakan permintaan mereka</p>
                <a href="#tentang" class="btn btn-primary btn-xl page-scroll">Yuk, Lihat</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="tentang">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Sharity berbagi!</h2>
                    <hr class="light">
                    <p class="text-faded">Sharity merupakan sebuah platform yang dapat digunakan oleh yayasan - yayasan seperti yayasan panti jompo dan panti asuhan untuk menyuarakan permintaan mereka. Anda dapat membantu dengan membuat kegiatan atau menyumbang kebutuhan material yayasan :)</p>
                </div>
            </div>
        </div>
    </section>

    <!--KATEGORI-->
    <section id="kategori">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kategori Yayasan</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center kategori" ng-repeat="n in kategori">
                    <div class="service-box">
                        <img class="kategori-icon" src="icons/test.png"/>
                        <h3>[[n.name]]</h3>
                        <p class="text-muted">[[n.description | limitTo : 80]]...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--YAYASAN-->
    <section class="no-padding" id="yayasan">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6" ng-repeat="n in yayasan">
                    <a href="{{asset('img/portfolio/fullsize/1.jpg')}}" class="portfolio-box">
                        <img src="{{asset('img/portfolio/thumbnails/1.jpg')}}" class="yayasan-box img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    [[n.kategori_name]]
                                </div>
                                <div class="project-name">
                                    [[n.name]]
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Yayasan yang Tergabung Bersama Kami</h2>
                <a href="#" class="btn btn-default btn-xl sr-button">Lihat Semua</a>
            </div>
        </div>
    </aside>

    <section id="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Events</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-6 col-xs-12">
                <div class="col-xs-12 event-box" >
                    <img class="col-xs-4 event-picture" src="{{asset('img/portfolio/thumbnails/6.jpg')}}">
                    <div class="col-xs-8 event-description">
                        <div>
                        <h4 class="event-title">Judul Event</h4>
                        <p class="text-muted">lalalallalallalalalallalalallalalallllllllllllalllllllllllllallllllllllllalalalalallalalalalalalallalallalalalallalalallalalallllllllllllalllllllllllllallllllllllllalalalalallalalalalalalallalallalalalallalalallalalallllllllllllalllllllllllllallllllllllllalalalalallalalalalalalallalallalalalallalalallalalallllllllllllalllllllllllllallllllllllllalalalalallalalalalalalallalallalalalallalalallalalallllllllllllalllllllllllllallllllllllllalalalalallalalalalalalallalallalalalallalalallalalallllllllllllalllllllllllllallllllllllllalalalalallalalalalalalallalallalalalallalalallalalallllllllllllalllllllllllllallllllllllllalalalalallalalala</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="col-xs-12 event-box" >
                    <img class="col-xs-4 event-picture" src="{{asset('img/portfolio/thumbnails/6.jpg')}}">
                    <div class="col-xs-8 event-description">
                        <div>
                        <h4 class="event-title">Judul Event</h4>
                        <p class="text-muted">lalalallalallalalalallalalallalalallllllllllllalllllllllllllallllllllllllalalalalallalalalalalalallalallalalalallalalallalalallllllllllllalllllllllllllallllllllllllalalalalallalalalalalalallalallalalalallalalallalalallllllllllllalllllllllllllallllllllllllalalalalallalalalalalalallalallalalalallalalallalalallllllllllllalllllllllllllallllllllllllalalalalallalalalalalalallalallalalalallalalallalalallllllllllllalllllllllllllallllllllllllalalalalallalalalalalalallalallalalalallalalallalalallllllllllllalllllllllllllallllllllllllalalalalallalalalalalalallalallalalalallalalallalalallllllllllllalllllllllllllallllllllllllalalalalallalalala</p>
                        </div>
                    </div>
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
    <script src="{{asset('js/controller/index.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('js/plugins/jquery-easing.js')}}"></script>
    <script src="{{asset('js/plugins/scroll-reveal.js')}}"></script>
    <script src="{{asset('js/plugins/magnific-popup.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{asset('js/creative.min.js')}}"></script>

</body>

</html>