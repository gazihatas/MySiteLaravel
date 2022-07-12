@extends('front.layouts.master')
@section('title','İletişim Sayfası')
@section('bg','frontNew/img/banner/demo.png')
@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area" style=" background: url('@yield('bg',asset('frontNew/img/banner/bulutTassarım.png'))') no-repeat scroll center left !important;">
        <div class="container">
            <div class="row banner_inner">
                <div class="col-lg-5"></div>
                <div class="col-lg-7">
                    <div class="banner_content text-center">
                        <h2></h2>
                        <div class="page_link">
                            <a href="{{route('homepage')}}"></a>
                            <a href=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->



    <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-12">
                    <form class=" contact_form"  method="post" action="{{route('contact.post')}}" id="contactForm" novalidate="novalidate">
                     @csrf
                        <div class="mt-10">
                            <input type="text" value="{{old('name')}}" name="name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="email" nvalue="{{old('email')}}" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
                        </div>

                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa fa-thumb-tack" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select2">
                                <select name="topic">
                                    <option>Konu</option>
                                    <option @if(old('topic')=="Bilgi") selected @endif>Bilgi</option>
                                    <option @if(old('topic')=="Destek") selected @endif>Destek</option>
                                    <option @if(old('topic')=="Genel")  selected @endif>Genel</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-10">
                            <textarea rows="8"  id="message" name="message" class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required>
                                  {{ old(('message')) }}
                            </textarea>
                        </div>


                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn submit_btn">Mesajı Gönder</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
@endsection

