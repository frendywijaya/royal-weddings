@extends('frontend.layouts.main')

@section('content')
    {{-- <!-- Header Content -->
    <section class="page-header"
        style="background-image: url({{ asset('frontend/images/backgrounds/page-header-bg-1-1.jpg') }});">
        <div class="container">
            <h2>{{ @$staticAbout->page_title }}</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header --> --}}

    <!-- Header Content -->
    <section class="page-header video-header">

            <video id="bgVideo" preload="true" autoplay loop muted>
                <source src="{{ asset('frontend/video/bg_video.mp4') }}" type="video/mp4" />
             </video>

    </section><!-- /.page-header -->

    <section class="about-four">
        <div class="container">
            <div class="about-four__image wow fadeInRight" data-wow-duration="1500ms">
                <img src="{{ asset('uploads/staticpage/'.$staticAbout->about_company_image) }}" alt="">
            </div><!-- /.about-four__image -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-four__content">
                        <div class="block-title">
                            <p>{{ @$staticAbout->about_company_title }}</p>
                            <h3>{{ @$staticAbout->about_company_section_subtitle }}</h3>
                        </div><!-- /.block-title -->
                        <div class="about-four__highlite-text">
                            <p>{{ @$staticAbout->about_company_section_text }}</p>
                        </div><!-- /.about-four__highlite-text -->
                        <p>{{ @$staticAbout->about_company_section_text_2 }}</p>
                    </div><!-- /.about-four__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-four -->

    <section class="event-two">
        <img src="{{ asset('frontend/images/shapes/event-sculpture-2-1.png') }}" class="event-two__sculpture" alt="">
        <div class="container">
            <div class="event-two__single" style="padding-top: 120px; display: none;">
                <div class="row">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="event-two__image">
                            <div class="event-two__image-inner">
                                <img src="{{ asset('frontend/images/event/event-2-2.jpg') }}" alt="">
                            </div><!-- /.event-two__image-inner -->
                        </div><!-- /.event-two__image -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7 d-flex">
                        <div class="my-auto">
                            <div class="event-two__content">
                                <div class="block-title event-two__title">
                                    <p>Oct 20, 2020 - Oct 25, 2020</p>
                                    <h3>Intern Insights Tour</h3>
                                </div><!-- /.event-two__title -->
                                <p>Man face fruit divided seasons herb from herb moveth whose. Dominion gathered winged
                                    morning,
                                    man won’t had fly beginning. Winged have saying behold morning. greater void shall
                                    created.
                                </p>
                                <a href="#" class="thm-btn event-two__btn">Learn More</a>
                                <!-- /.thm-btn event-two__btn -->
                            </div><!-- /.event-two__content -->

                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-7 -->

                </div><!-- /.row -->
            </div><!-- /.event-two__single -->
            <div class="event-two__single" style="padding-top: 30px;">
                <div class="row">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">

                        <div class="event-two__image">
                            <div class="event-two__image-inner">
                                <img src="{{ asset('uploads/staticpage/'.$staticAbout->extra_image_1) }}" alt="">
                            </div><!-- /.event-two__image-inner -->
                        </div><!-- /.event-two__image -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7 d-flex">
                        <div class="my-auto">
                            <div class="event-two__content">
                                <div class="block-title event-two__title">
                                    <p>{{ @$staticAbout->extra_title_1 }}</p>
                                    {{-- <h3>Calvert Richard Jones’s Duomo.</h3> --}}
                                </div><!-- /.event-two__title -->
                                <p>{{ @$staticAbout->extra_text_1 }}
                                </p>
                                <!-- /.thm-btn event-two__btn -->
                            </div><!-- /.event-two__content -->

                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-7 -->


                </div><!-- /.row -->
            </div><!-- /.event-two__single -->
            <div class="event-two__single">
                <div class="row">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">

                        <div class="event-two__image">
                            <div class="event-two__image-inner">
                                <img src="{{ asset('uploads/staticpage/'.$staticAbout->extra_image_2) }}" alt="">
                            </div><!-- /.event-two__image-inner -->
                        </div><!-- /.event-two__image -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7 d-flex">
                        <div class="my-auto">
                            <div class="event-two__content">
                                <div class="block-title event-two__title">
                                    <p>{{ @$staticAbout->extra_title_2 }}</p>
                                    {{-- <h3>Calvert Richard Jones’s Duomo.</h3> --}}
                                </div><!-- /.event-two__title -->
                                <p>{{ @$staticAbout->extra_text_2 }}
                                </p>
                                <!-- /.thm-btn event-two__btn -->
                            </div><!-- /.event-two__content -->

                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.event-two__single -->
            <div class="event-two__single">
                <div class="row">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">

                        <div class="event-two__image">
                            <div class="event-two__image-inner">
                                <img src="{{ asset('uploads/staticpage/'.$staticAbout->extra_image_3) }}" alt="">
                            </div><!-- /.event-two__image-inner -->
                        </div><!-- /.event-two__image -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7 d-flex">
                        <div class="my-auto">
                            <div class="event-two__content">
                                <div class="block-title event-two__title">
                                    <p>{{ @$staticAbout->extra_title_3 }}</p>
                                    {{-- <h3>Calvert Richard Jones’s Duomo.</h3> --}}
                                </div><!-- /.event-two__title -->
                                <p>{{ @$staticAbout->extra_text_3 }}
                                </p>
                                <!-- /.thm-btn event-two__btn -->
                            </div><!-- /.event-two__content -->

                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.event-two__single -->
        </div><!-- /.container -->
    </section><!-- /.event-two -->

    <section class="team-one">
        <div class="container">
            <div class="block-title-two text-center">
                <p>Our Team</p>
                <h3>Expert Members</h3>
            </div><!-- /.block-title-two -->
            <div class="row">
                @foreach($teams as $team)
                <div class="col-lg-4">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img src="{{ asset('uploads/team/'.@$team->image)}}" alt="">
                            <div class="team-one__social">
                                <a href="{{ @$team->facebook }}" class="fab fa-facebook-f"></a>
                                {{-- <a href="#" class="fab fa-twitter"></a> --}}
                                <a href="{{ @$team->linkedin }}" class="fab fa-linkedin-in"></a>
                            </div><!-- /.team-one__social -->
                        </div><!-- /.team-one__image -->
                        <div class="team-one__content">
                            <h3>{{ $team->name }}</h3>
                            <p>{{ $team->position }}</p>
                        </div><!-- /.team-one__content -->
                    </div><!-- /.team-one__single -->
                </div><!-- /.col-lg-4 -->

                @endforeach

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.team-one -->

    <section class="video-one text-center"
        style="background-image: url({{ asset('frontend/images/resources/video-parallax-1-1-.jpg') }});">
        <div class="container">
            <a href="{{ asset('frontend/video/royal.mp4') }}" class="video-popup video-one__btn"><i
                    class="fa fa-play"></i></a><!-- /.video-popup video-one__btn -->
        </div><!-- /.container -->
    </section><!-- /.video-one -->
@endsection
