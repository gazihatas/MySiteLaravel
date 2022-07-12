<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Gazi Hataş portfolyo ve blog sitesidir. Yazılım ve diğer alanlardaki notlarımı ve özgeçmiş bilgilerimin bulunduğu kişisel web siteme Hoş Geldin.">
    <meta name="keywords" content="Gazi Hataş, özgeçmiş, cv, blog, php developer, laravel developer, web developer">
    <meta name="author" content="Gazi Hataş">
    <meta name="robots" content="index,follow" />
    <link rel="canonical" href="https://gazihatas.xyz"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="PG37lxmTGKGRrJ-Uzf_ldQK5QVlNf7Mkrk71Py74vCU" />

    <link rel="icon" href="{{asset($config->favicon)}}" type="image/png">
    <title>@yield('title') - {{$config->title}}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontNew/')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('frontNew/')}}/vendors/linericon/style.css">
    <link rel="stylesheet" href="{{asset('frontNew/')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontNew/')}}/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontNew/')}}/vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="{{asset('frontNew/')}}/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('frontNew/')}}/vendors/animate-css/animate.css">
    <link rel="stylesheet" href="{{asset('frontNew/')}}/vendors/jquery-ui/jquery-ui.css">



    <!-- main css -->
    <link rel="stylesheet" href="{{asset('frontNew/')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('frontNew/')}}/css/responsive.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="{{asset('frontNew/')}}/css/tooplate-style.css">



    <link rel="stylesheet" href="{{asset('frontNew/demo/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontNew/demo/')}}/css/unicons.css">
    <link rel="stylesheet" href="{{asset('frontNew/demo/')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontNew/demo/')}}/css/owl.theme.default.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="{{asset('frontNew/demo/')}}/css/tooplate-style.css">

    @yield('css')
</head>
<body  class="dark">

<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{route('homepage')}}">
                    @if($config->logo!=null)
                        <img src="{{asset($config->logo)}}" width="150px" alt="logo">
                    @else
                        {{$config->title}}
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav">
                        <li class="nav-item active"><a class="nav-link" href="{{route('homepage')}}">Anasayfa</a></li>
                        @foreach($pages as $page)
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('page',$page->slug)}}">{{$page->title}}</a>
                            </li>
                        @endforeach
                      <!--
                        <li class="nav-item"><a class="nav-link" href="archive.html">Archive</a></li>

                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="single-blog.html">Sinlge Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                            </ul>
                        </li>
                        -->
                        <li class="nav-item"><a class="nav-link" href="{{route('about')}}">Hakkımda</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">İletişim</a></li>
                    </ul>
                    {{--
                    <ul class="nav navbar-nav navbar-right header_social ml-auto">
                        @php $socials=['facebook','twitter','github','linkedin','youtube','instagram']; @endphp
                        @foreach($socials as $social)
                            @if($config->$social!=null)
                                <li class="nav-item"><a href="{{$config->$social}}" target="_blank"><i class="fa fa-{{$social}}"></i></a></li>
                            @endif
                        @endforeach
                    </ul>
                    --}}
                    <ul class="navbar-nav ml-lg-auto">
                        <div class="ml-lg-4">
                            <div class="color-mode d-lg-flex justify-content-center align-items-center">
                                <i class="color-mode-icon"></i>
                                Color mode
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="logo_part">
        <div class="container">
            @if($config->logo!=null)
                <a class="logo" href="{{route('homepage')}}"><img src="{{asset($config->logo)}}" width="150px" alt="logo"></a>
            @else
                {{$config->title}}
            @endif

        </div>
    </div>
</header>
<!--================Header Menu Area =================-->







