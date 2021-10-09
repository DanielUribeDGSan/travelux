<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travelux</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    {{-- Bootsrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    {{-- Fontawosone --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/utilidades.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet" media="screen">

</head>

<body>

    <!-- Loader -->

    <div class="loader">
        <div class="page-lines">
            <div class="container">
                <div class="col-line col-xs-4">
                    <div class="line"></div>
                </div>
                <div class="col-line col-xs-4">
                    <div class="line"></div>
                </div>
                <div class="col-line col-xs-4">
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="loader-brand">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>

    <!-- Header -->

    <header id="top" class="header-home">
        <div class="brand-panel">
            <a href="#top" class="brand js-target-scroll">
                <img class="img-fluid" src="{{ asset('img/logo/logo.svg') }}" alt="travelux" />
            </a>
            <div class="brand-name">
                Travelux

            </div>
            <div class="slide-number">
                <span class="current-number text-primary">0<span class="count">1</span></span>
                <sup><span class="delimiter">/</span> 0<span class="total-count"></span></sup>
            </div>
        </div>
        <div class="header-phone">55 000 000</div>
        <div class="vertical-panel"></div>
        <div class="vertical-panel-content">
            <div class="vertical-panel-info">
                <div class="vertical-panel-title">Architecture buro</div>
                <div class="line"></div>
            </div>
            <ul class="social-list">
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>

        <!-- Navigation Desctop -->

        <nav class="navbar-desctop visible-md visible-lg">
            <div class="container">
                <a href="#top" class="brand js-target-scroll">
                    <img class="img-fluid" src="{{ asset('img/logo/logo.svg') }}" alt="travelux" />

                </a>
                <ul class="navbar-desctop-menu">
                    <li class="active">
                        <a href="index.html">Inicio</a>
                        {{-- <ul>
                            <li class="active"><a href="index.html">Home - Light</a></li>
                            <li>
                                <a href="../dark/index.html">Home - Dark</a>
                            </li>
                        </ul> --}}
                    </li>
                    <li>
                        <a href="about.html">Cotizador</a>
                    </li>
                    <li>
                        <a href="about.html">Nosotros</a>
                    </li>
                    <li>
                        <a href="about.html">¿Como lo hacemos?</a>
                    </li>
                    <li>
                        <a href="contacts.html">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Navigation Mobile -->

        <nav class="navbar-mobile">
            <a href="#top" class="brand js-target-scroll">
                <img class="img-fluid" src="{{ asset('img/logo/logo.svg') }}" alt="travelux" />

            </a>

            <!-- Navbar Collapse -->

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="navbar-nav-mobile">
                    <li class="active">
                        <a href="#">Home <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li class="active"><a href="index.html">— Home - Light</a></li>
                            <li>
                                <a href="../dark/index.html">Home - Dark</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.html">About us</a>
                    </li>
                    <li>
                        <a href="#">Projects <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="projects.html">Projects - List</a></li>
                            <li>
                                <a href="project.html">Project - details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="blog.html">Blog - List</a></li>
                            <li>
                                <a href="blog-details.html">Blog - Post</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contacts.html">Contacts</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Layout -->

    <div class="layout">

        <!-- Home -->

        <main class="main">
            {{ $slider }}
        </main>

        <div class="content">
            {{ $slot }}

            <!-- Footer -->

            <footer id="footer" class="footer">
                <div class="container">
                    <div class="row-base row">
                        <div class="col-base text-left-md col-md-4">
                            <a href="#" class="brand">
                                <img class="img-fluid" src="{{ asset('img/logo/logo.svg') }}" alt="travelux" />
                            </a>
                        </div>
                        <div class="text-center-md col-base col-md-4">
                            <a href="https://themeforest.net/user/murren20" class="author-link">
                                by Murren20
                            </a>
                        </div>
                        <div class="text-right-md col-base col-md-4">
                            © go.arch 2016. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Lines -->

            <div class="page-lines">
                <div class="container">
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <!-- SLIDER REVOLUTION -->
    <script src="{{ asset('js/rev-slider/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS   -->
    <script src="{{ asset('js/rev-slider/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('js/interface.js') }}"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/form.js') }}"></script>

    <script>
        $('.dropdown-menu').on('click', function(e) {
            e.stopPropagation();
        });
    </script>


</body>

</html>
