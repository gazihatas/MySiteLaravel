@extends('front.layouts.master')

@section('content')
   @include('front.widgets.aboutAuthorWidget')

    <!-- FEATURES -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <h2 class="mb-4">Experiences:</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2020</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span> Intern Software Developer</span><small> Ventura Yazılım A.Ş. </small></h3>
                                <p> <blockquate>Ankara, Turkey</blockquate> </p>
                                <p>
                                    <ul>
                                        <li>- software development intern</li>
                                        <li>- web devopment</li>
                                    </ul>
                                <br>
                                    Technical Environment:
                                    Laravel , Php , MYSQL , Vue.js
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <h2 class="mb-4 mobile-mt-2">Educations:</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2021</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Yüksek İhtisas Üniversitesi</span> <small>Bilgisayar Programcılığı</small></h3>
                                <p> <blockquate>Ankara, Turkey</blockquate> </p>
                                <p>My education life provided me with the necessary infrastructure for Computer Engineering. I developed myself in research, teamwork, problem solving and acquiring different skills. </p>
                            </div>
                        </div>



                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2017</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Sabahattin Zaim Anadolu Öğretmen Lisesi</span> <small>English</small></h3>
                                <p> <blockquate>Ankara, Turkey</blockquate> </p>
                                <p>You can freely use Tooplate's templates for your business or personal sites. You cannot redistribute this template without a permission.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
