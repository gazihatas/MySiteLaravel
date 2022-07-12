
<!--================ start footer Area  =================-->
<footer class="footer-area p_120">
    <div class="container">



            {{--
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget f_social_wd">
                    <h6 class="footer_title">Follow Us</h6>
                    <p>Let us be social</p>
                    <div class="f_social">
                        @php $socials=['facebook','twitter','github','linkedin','youtube','instagram']; @endphp
                        @foreach($socials as $social)
                            @if($config->$social!=null)
                                <a href="{{$config->$social}}" target="_blank"><i class="fa fa-{{$social}} fa-stack-1x"></i></a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        --}}
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Powered by  <a href="{{route('about')}}"> Gazi Hataş</a>  Copyright &copy; {{date('Y')}}
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>

</footer>
<!--================ End footer Area  =================-->




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('frontNew/')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{asset('frontNew/')}}/js/popper.js"></script>
<script src="{{asset('frontNew/')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontNew/')}}/js/stellar.js"></script>
<script src="{{asset('frontNew/')}}/vendors/lightbox/simpleLightbox.min.js"></script>
<script src="{{asset('frontNew/')}}/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="{{asset('frontNew/')}}/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('frontNew/')}}/vendors/isotope/isotope-min.js"></script>
<script src="{{asset('frontNew/')}}/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="{{asset('frontNew/')}}/vendors/jquery-ui/jquery-ui.js"></script>
<script src="{{asset('frontNew/')}}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('frontNew/')}}/js/mail-script.js"></script>
<script src="{{asset('frontNew/')}}/js/theme.js"></script>



<script src="{{asset('frontNew/demo/')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('frontNew/demo/')}}/js/popper.min.js"></script>
<script src="{{asset('frontNew/demo/')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontNew/demo/')}}/js/Headroom.js"></script>
<script src="{{asset('frontNew/demo/')}}/js/jQuery.headroom.js"></script>
<script src="{{asset('frontNew/demo/')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('frontNew/demo/')}}/js/smoothscroll.js"></script>
<script src="{{asset('frontNew/demo/')}}/js/custom.js"></script>

@yield('js')

</body>
</html>


