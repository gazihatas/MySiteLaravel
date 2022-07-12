
@extends('front.layouts.master')
@section('title',$article->title)
@section('bg',$article->image)
@section('content')

    <section class="blog_area p_120 single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main_blog_details">
                        <img class="img-fluid" src="{{asset($article->image)}}" alt="">
                        <a href="#"><h4>{{$article->title}} </h4></a>
                        {!! $article->content !!}
                        <div class="news_d_footer">
                            <a href="#"><i class="lnr lnr lnr-heart"></i>{{$article->hit}} people reead this</a>
                            <a class="justify-content-center ml-auto" href="#"><i class="lnr lnr lnr-bubble"></i>06 Comments</a>
                            <div class="news_socail ml-auto">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                @include('front.widgets.letfBarWidgetsManager')
            </div>
        </div>
    </section>


@endsection
