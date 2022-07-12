<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="row banner_inner">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
                <div class="banner_content text-center">
                    <h2>Contact Us</h2>
                    <div class="page_link">
                        <a href="{{route('homepage')}}">Anasayfa</a>
                        @foreach($pages as $page)
                         <a href="{{route('page',$page->slug)}}">{{$page->title}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
