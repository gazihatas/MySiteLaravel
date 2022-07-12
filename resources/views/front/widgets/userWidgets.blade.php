<aside class="single_sidebar_widget author_widget">
    <img class="author_img img-fluid rounded-circle" src="{{asset('frontNew/')}}/img/author.jpeg" height="150px" alt="Gazi Hataş">
    <h4>Gazi Hataş</h4>
    <p>PHP DEVELOPER</p>
    <p>I have been dealing with web development for 2 years. I have 1 year of Laravel experience.<br><br>
        Tech Stack:<br>
        Laravel | Php | OOP | Html5 | CSS3 | Jquery | VueJs | Bootstrap4 | Github | Linux | PhpStorm | SQL | Docker | MySql
    </p>
    <div class="social_icon">
        @php $socials=['facebook','twitter','github','linkedin','youtube','instagram']; @endphp
        @foreach($socials as $social)
            @if($config->$social!=null)
                <a href="{{$config->$social}}" target="_blank"><i class="fa fa-{{$social}}"></i></a>
            @endif
        @endforeach
    </div>
    <div class="br"></div>
</aside>
