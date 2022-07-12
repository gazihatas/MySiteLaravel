@extends('front.layouts.master')
@section('title',$category->name.' Kategorisi |'.count($articles).' yazı bulundu.')
@section('content')
    <!--================Blog Area =================-->
    <section class="blog_area p_120">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @include('front.widgets.blogListesi')
                    </div>
                </div>

                @include('front.widgets.letfBarWidgetsManager')

            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection

