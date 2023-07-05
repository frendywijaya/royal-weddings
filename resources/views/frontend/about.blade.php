@extends('frontend.layouts.main')

@section('content')
<!-- Header Content -->
<section class="page-header" style="background-image: url({{ asset('frontend/images/backgrounds/page-header-bg-1-1.jpg') }});">
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
                        <p>Welcome to Royal Weddings International. We are the largest destination wedding organizer in Singapore.</p>
                    </div><!-- /.about-four__highlite-text -->
                    <p>Royal Weddings International was formed to strive for excellence in every aspect of our work, aiming to exceed expectations and deliver exceptional service and experiences to our clients. We at Royal Weddings International uphold the highest standards of integrity, honesty, and transparency in our interactions with clients, partners, and team members. We believe in building trusting relationships based on mutual respect and ethical conduct. We value the uniqueness of each couple and their vision for their special day. We are dedicated to creating personalized, tailor-made experiences that reflect their individual style, preferences, and cultural backgrounds.We embrace creativity and innovation, constantly seeking fresh ideas and unique solutions to make each wedding extraordinary and memorable.</p>
                </div><!-- /.about-four__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-four -->

<section class="team-one">
    <div class="container">
        <div class="block-title-two text-center">
            <p>Our Team</p>
            <h3>Expert Members</h3>
        </div><!-- /.block-title-two -->
        <div class="row">
            <div class="col-lg-4">
                <div class="team-one__single">
                    <div class="team-one__image">
                        <img src="{{ asset('frontend/images/team/team-1-1.jpg') }}" alt="">
                        <div class="team-one__social">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-linkedin-in"></a>
                            <a href="#" class="fab fa-google-plus-g"></a>
                        </div><!-- /.team-one__social -->
                    </div><!-- /.team-one__image -->
                    <div class="team-one__content">
                        <h3>Violet Jones</h3>
                        <p>Developer</p>
                    </div><!-- /.team-one__content -->
                </div><!-- /.team-one__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="team-one__single">
                    <div class="team-one__image">
                        <img src="{{ asset('frontend/images/team/team-1-2.jpg') }}" alt="">
                        <div class="team-one__social">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-linkedin-in"></a>
                            <a href="#" class="fab fa-google-plus-g"></a>
                        </div><!-- /.team-one__social -->
                    </div><!-- /.team-one__image -->
                    <div class="team-one__content">
                        <h3>Sarah Boyd</h3>
                        <p>Developer</p>
                    </div><!-- /.team-one__content -->

                </div><!-- /.team-one__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="team-one__single">
                    <div class="team-one__image">
                        <img src="{{ asset('frontend/images/team/team-1-3.jpg') }}" alt="">
                        <div class="team-one__social">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-linkedin-in"></a>
                            <a href="#" class="fab fa-google-plus-g"></a>
                        </div><!-- /.team-one__social -->
                    </div><!-- /.team-one__image -->
                    <div class="team-one__content">
                        <h3>Marguerite Holt</h3>
                        <p>Developer</p>
                    </div><!-- /.team-one__content -->

                </div><!-- /.team-one__single -->
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.team-one -->

<section class="video-one text-center" style="background-image: url({{ asset('frontend/images/resources/video-parallax-1-1-.jpg') }});">
    <div class="container">
        <a href="https://www.youtube.com/watch?v=hO1tzmi1V5g" class="video-popup video-one__btn"><i class="fa fa-play"></i></a><!-- /.video-popup video-one__btn -->
    </div><!-- /.container -->
</section><!-- /.video-one -->

@endsection
