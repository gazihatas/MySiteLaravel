@extends('front.layouts.master')
@section('title',$page->title)
@section('bg',$page->image)
@section('content')

    <!--================Home Banner Area =================-->
    <section class="banner_area" style=" background: url('@yield('bg',asset('front/img/home-bg.jpg'))') no-repeat scroll center left !important;">
        <div class="container">
            <div class="row banner_inner">
                <div class="col-lg-5"></div>
                <div class="col-lg-7">
                    <div class="banner_content text-center">
                        <h2>@yield('title')</h2>
                        <div class="page_link">
                            <a href="{{route('homepage')}}">Anasayfa</a>
                            <a href="#">@yield('title')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->


    <!-- Start Sample Area -->
    <section class="sample-text-area">
        <div class="container">
            <h3 class="text-heading title_color">{{$page->title}}</h3>
            <p class="sample-text">
                {!! $page->content !!}
            </p>
        </div>
    </section>
    <!-- End Sample Area -->
@endsection
