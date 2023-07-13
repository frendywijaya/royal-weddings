@extends('frontend.layouts.main')

@section('content')
    <!-- Header Content -->
    <section class="page-header"
        style="background-image: url({{ asset('frontend/images/backgrounds/page-header-bg-1-1.jpg') }});">
        <div class="container">
            <h2>About Us</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="about-four">
        <div class="container">
            <div class="about-four__image wow fadeInRight" data-wow-duration="1500ms">
                <img src="{{ asset('frontend/images/resources/about-4-1.jpg') }}" alt="">
            </div><!-- /.about-four__image -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-four__content">
                        <div class="block-title">
                            <p>About Us</p>
                            <h3>Royal Weddings International</h3>
                        </div><!-- /.block-title -->
                        <div class="about-four__highlite-text">
                            <p>Welcome to Royal Weddings International. We are the largest destination wedding organizer in
                                Singapore.</p>
                        </div><!-- /.about-four__highlite-text -->
                        <p>Royal Weddings International was formed to strive for excellence in every aspect of our work,
                            aiming to exceed expectations and deliver exceptional service and experiences to our clients. We
                            at Royal Weddings International uphold the highest standards of integrity, honesty, and
                            transparency in our interactions with clients, partners, and team members. We believe in
                            building trusting relationships based on mutual respect and ethical conduct. We value the
                            uniqueness of each couple and their vision for their special day. We are dedicated to creating
                            personalized, tailor-made experiences that reflect their individual style, preferences, and
                            cultural backgrounds.We embrace creativity and innovation, constantly seeking fresh ideas and
                            unique solutions to make each wedding extraordinary and memorable.</p>
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
                                <img src="{{ asset('frontend/images/event/event-2-3.jpg') }}" alt="">
                            </div><!-- /.event-two__image-inner -->
                        </div><!-- /.event-two__image -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7 d-flex">
                        <div class="my-auto">
                            <div class="event-two__content">
                                <div class="block-title event-two__title">
                                    <p>Our Mission</p>
                                    {{-- <h3>Calvert Richard Jones’s Duomo.</h3> --}}
                                </div><!-- /.event-two__title -->
                                <p>Our mission is to create unforgettable moments of love and celebration, crafting exceptional weddings that reflect the unique personalities and dreams of each couple.
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
                                <img src="{{ asset('frontend/images/event/event-2-3.jpg') }}" alt="">
                            </div><!-- /.event-two__image-inner -->
                        </div><!-- /.event-two__image -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7 d-flex">
                        <div class="my-auto">
                            <div class="event-two__content">
                                <div class="block-title event-two__title">
                                    <p>Our Values</p>
                                </div><!-- /.event-two__title -->
                                <p>We are dedicated to providing the highest level of service, professionalism, and attention to detail, ensuring that every aspect of the wedding journey is seamlessly planned and executed. By combining our expertise, creativity, and passion, we aim to exceed expectations and deliver extraordinary experiences that leave lasting memories for our cherished clients and their loved ones.
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
                                <img src="{{ asset('frontend/images/event/event-2-3.jpg') }}" alt="">
                            </div><!-- /.event-two__image-inner -->
                        </div><!-- /.event-two__image -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7 d-flex">
                        <div class="my-auto">
                            <div class="event-two__content">
                                <div class="block-title event-two__title">
                                    <p>Our Promise</p>
                                </div><!-- /.event-two__title -->
                                <p>With a commitment to inclusivity, diversity, and personalized care, we strive to make every couple feel valued, supported, and celebrated as they embark on their lifelong journey together. Our ultimate goal is to transform dreams into reality, weaving together love, joy, and enchantment, one breathtaking wedding at a time.
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
            <a href="https://www.youtube.com/watch?v=hO1tzmi1V5g" class="video-popup video-one__btn"><i
                    class="fa fa-play"></i></a><!-- /.video-popup video-one__btn -->
        </div><!-- /.container -->
    </section><!-- /.video-one -->
@endsection
