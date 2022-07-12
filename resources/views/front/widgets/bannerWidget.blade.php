@section('bannerAlani')
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
                        <a href="{{route("@yield('title')")}}">@yield('title')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
@endsection
