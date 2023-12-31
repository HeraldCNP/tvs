<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="google-site-verification" content="-hYUJAgt_kut60u7q3xIq4uFQnOMad3gx_1Eq0v2ne0" />

    {!! SEO::generate() !!}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"" />
    <meta name="keywords" content="TV´S x TV, tevesporteve, tevesporteve.bolivia.bo, Radio ONLINE, Programa Educativo" />
    <meta name="author" content="HeraldCNP - WonderGroup" />

    <meta name="robots" content="index, follow" />

    <!-- ICONOS -->
    <link rel="shortcut icon" href="{{ asset('images/icono.ico') }}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icons/fontawesome/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icons/fontawesome/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/vendors/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/vendors/audio/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/vendors/swipebox/css/swipebox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/social.css') }}" />


    <!-- SKIN -->
    <link rel="stylesheet" title="skin4" href="css/skins/skin3.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116651165-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-116651165-1');
    </script>
    {{-- code adsence --}}
    <script data-ad-client="ca-pub-7125877501142047" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body id="nava-radio" class="header2 no-padding">
    <!-- HEADER -->
    <header class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="navbar-header pull-left">
                        <!-- Logo -->
                        <a class="navbar-brand" href="{{ route('inicio') }}"><img
                                src="{{ asset('images/logoTvs.png') }}" class="img-responsive" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="lang-search pull-right">
                        <div class="site-lang"><a href="https://www.facebook.com/tvsxtv" target="_blank"><i
                                    class="fa fa-facebook-square"></i></a></div>
                        <div class="site-lang"><a href="https://www.youtube.com/c/TVSxTV" target="_blank"><i
                                    class="fa fa-youtube-play"></i></a></div>

                        @if (auth()->user())
                            @can('admin.home')
                                <a href="{{ route('admin.home') }}"><i
                                        style="color:white">{{ auth()->user()->name }}</i></a>
                            @endcan
                        @else
                            <div class="site-lang"><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i></a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- SEARCH -->
    <div class="search-big">
        <div class="sb-close"></div>
        <div class="container">
            <div class="search-wrap">
                <div class="content-head text-center">
                    <span>All in here - Summer 2014 - Summer 2015</span>
                    <h5>Discover music<br />High Fidelity Streaming</h5>
                </div>

                <div class="sb-form">
                    <input type="text" placeholder="Artist / Track / Album" />
                    <button type="submit" class="btn btn-lg">Search</button>
                </div>
            </div>
        </div>
    </div>

    <!-- RADIO HOME INTRO -->
    <div class="radio-home">
        <div class="mainContainer mt-5">
            <iframe src="{{ url('') . '/repro/index.html' }}" frameborder="0" width="100%" height="300px"
                scrolling="no"></iframe>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
  
                </div>
                <div class="col-md-6 wow fadeInUp text-center" data-wow-duration="1s">
                    <h3>Tv´s X Tv <br> La Mejor Imagen Para Escuchar</h3>
                    <h1 style="font-size: 25px; ">El primer Programa Estudiantil</h1>
                    @if (Request::is('/'))
                        <span>Visita N°: {{ $visit }} </span>
                    @endif
                    <p style="color:white">Es el programa creado para informar, orientar y educar en las diferentes
                        áreas arte, música literatura, matemáticas y demás materias desde nivel inicial hasta el de
                        profesionalización</p>
                    {{-- <h4>Estamos en renovación<br> Esperalo...</h4> --}}

                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <a href="https://drive.google.com/drive/folders/1EO4pGtJRvA5UaNq7HSWR91N9jeYOJdMr?usp=sharing" target="_blank">
                            <img src="{{ asset('images/mix2024.jpg') }}" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);" class="rounded" alt="..." width="250px">
                        </a>
                      </div>   
                </div>
            </div>
        </div>


    </div>
    @if (Request::is('/'))
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <h4 class="h3">Solicita tu canción favorita</h4>
                <form action="#">

                    <label for="nombre" style="color:white; margin-top:5px">¿Cual es tu nombre?</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre"
                        required>


                    <label for="artista" style="color:white; margin-top:5px">Artista o Interprete</label>
                    <input type="text" class="form-control" id="artista"
                        placeholder="Ingresa el nombre de artista" required>


                    <label for="tema" style="color:white; margin-top:5px">Canción</label>
                    <input type="text" class="form-control" id="tema" placeholder="Ingresa la canción"
                        required>
                    <button id="submit" class="btn btn-xs btn-primary"
                        style="margin-top: 5px; padding:7px">Solicitar canción</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    @endif


    <!-- HEADER -->
    <header class="header-scroll wow fadeInUp" data-wow-duration="1s">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="navbar-header pull-left">
                        <!-- Logo -->
                        <a class="navbar-brand" href="{{ route('inicio') }}"><img src="images/logoTvs.png"
                                class="img-responsive" alt="" /></a>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="lang-search pull-right">
                        <div class="site-lang"></div>
                        <div class="site-search">
                            <img src="images/icon/search.png" alt="" />
                        </div>
                    </div>

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- MENU -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ route('inicio') }}">Inicio</a></li>
                            <li class="dropdown">
                                <a href="#">Categorias</a>
                                <ul class="dropdown-menu">
                                    @foreach ($categories as $category)
                                        <li>
                                            <a
                                                href="{{ route('posts.category', $category) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            {{-- <li class="dropdown">
                                <a href="./nava-radio-album.html">Videos</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="./nava-radio-album.html">Contacto</a>
                                    </li>
                                    <li>
                                        <a href="./nava-radio-album-2.html">Album 2</a>
                                    </li>
                                    <li>
                                        <a href="./nava-radio-single-album.html">Album - Single</a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li><a href="{{ route('inicio') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>


    @yield('content')

    <!-- FOOTER -->

    <footer class="wow fadeInUp" data-wow-duration=".7s">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/logoTvs.png') }}" class="footer-logo" alt="" />
                    <p>Nuestra Visión es de seguir mejorando la educación mediante la.interacción de actividades por
                        estudiantes, padres y profesores por una educación con calidad</p>
                    <div class="contact-info">
                        <p>
                            <img src="images/icon/01.png" alt="" />Plaza 25 de mayo s/n SITEL<br />Potosí,
                            Bolivia
                        </p>
                        <p>
                            <img src="images/icon/02.png" alt="" />+591 71835694
                        </p>
                        <p>
                            <img src="images/icon/03.png" alt="" />chrisroj36@gmail.com - Christian Martin
                            Rojas
                        </p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <h4>Enlaces de Interes</h4>
                    <p class="text-muted">-<a href="http://www.labsanmartin.com.bo" target="_blank"
                            class="text-white"> Laboratorio Quimico Instrumental San Martin </a>-</p>
                    <p class="text-muted">-<a href="http://www.colegiopichincha.com" target="_blank"
                            class="text-white"> Colegio Nacional Pichincha </a>-</p>
                    <p class="text-muted">-<a href="" class="text-white"> Tvs Clasico </a>-</p>
                    <p class="text-muted">-<a href="" class="text-white"> Tvs Cumbia </a>-</p>
                </div>
                <div class="col-md-4 text-center">
                    <h4>Publicidad</h4>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid"
                        data-ad-layout-key="-6t+ed+2i-1n-4w" data-ad-client="ca-pub-7125877501142047"
                        data-ad-slot="4390213254"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        &copy; {{ date('Y') }} Tv´s X Tv, Created by <a href="http://wonder.com.bo"
                            target="_blank"> WonderGroup </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- Javascript =============================-->
    <script src="{{ asset('js/form.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendors/wow.min.js') }}"></script>
    <script src="{{ asset('js/vendors/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/vendors/tweecool.js') }}"></script>
    <script src="{{ asset('js/vendors/audio.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/vendors/swipebox/js/jquery.swipebox.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/vendors/audio/mediaelement-and-player.min.js') }}"></script>
    <script src="{{ asset('js/vendors/audio/main.js') }}"></script>

    <script src="{{ asset('js/vendors/isotope/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('js/vendors/isotope/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/5f09ee6d09.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>
</body>

</html>
