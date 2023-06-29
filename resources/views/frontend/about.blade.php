@extends('frontend.layouts.main')

@section('content')
<!-- Header Content -->
<section class="page-header" style="background-image: url({{ asset('frontend/images/backgrounds/page-header-bg-1-1.jpg') }});">
    <div class="container">
        <h2>About Page</h2>
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
                        <p>About muzex</p>
                        <h3>The Modern Art Museum</h3>
                    </div><!-- /.block-title -->
                    <div class="about-four__highlite-text">
                        <p>Welcome to the World’s Leading Museum of Modern Art. It includes works of art created during the period stretching from about 1860 to the 1970s.</p>
                    </div><!-- /.about-four__highlite-text -->
                    <p>Man face fruit divided seasons herb from herb moveth whose. Dominion gathered winged morning, man won’t had fly beginning. Winged have saying behold morning greater void shall created whose blessed herb light fruitful open void without itself whales.</p>
                    <p>Good every beginning had one two gathered from living place seasons them divide fourth them. </p>
                </div><!-- /.about-four__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-four -->

<section class="history-one">
    <img src="{{ asset('frontend/images/shapes/history-1-sculp.png') }}" class="history-one__sculp" alt="">
    <div class="container">
        <div class="block-title-two text-center">
            <p>Timeline</p>
            <h3>Our History</h3>
        </div><!-- /.block-title-two -->
        <div class="history-one__single">
            <div class="row">
                <div class="col-lg-6">
                    <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="{{ asset('frontend/images/history/history-1-1.jpg') }}" alt="">
                    </div><!-- /.history-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 d-flex">
                    <div class="history-one__content my-auto">
                        <div class="history-one__top block-title">
                            <p>1980</p>
                            <h3>The Archive Gallery</h3>
                        </div><!-- /.history-one__top block-title -->
                        <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                            the whole one feels that wind up Union Jack doolally bloke.</p>
                    </div><!-- /.history-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.history-one__single -->
        <div class="history-one__single">
            <div class="row">
                <div class="col-lg-6">
                    <div class="history-one__image wow fadeInRight" data-wow-duration="1500ms">
                        <img src="{{ asset('frontend/images/history/history-1-2.jpg') }}" alt="">
                    </div><!-- /.history-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 d-flex">
                    <div class="history-one__content my-auto">
                        <div class="history-one__top block-title">
                            <p>2003</p>
                            <h3>Moving in New Home</h3>
                        </div><!-- /.history-one__top block-title -->
                        <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                            the whole one feels that wind up Union Jack doolally bloke.</p>
                    </div><!-- /.history-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.history-one__single -->
        <div class="history-one__single">
            <div class="row">
                <div class="col-lg-6">
                    <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="{{ asset('frontend/images/history/history-1-3.jpg') }}" alt="">
                    </div><!-- /.history-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 d-flex">
                    <div class="history-one__content my-auto">
                        <div class="history-one__top block-title">
                            <p>2009</p>
                            <h3>Art & Science Events</h3>
                        </div><!-- /.history-one__top block-title -->
                        <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                            the whole one feels that wind up Union Jack doolally bloke.</p>
                    </div><!-- /.history-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.history-one__single -->
        <div class="history-one__single">
            <div class="row">
                <div class="col-lg-6">
                    <div class="history-one__image wow fadeInRight" data-wow-duration="1500ms">
                        <img src="{{ asset('frontend/images/history/history-1-4.jpg') }}" alt="">
                    </div><!-- /.history-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 d-flex">
                    <div class="history-one__content my-auto">
                        <div class="history-one__top block-title">
                            <p>2018</p>
                            <h3>Art Gallery Showcasing</h3>
                        </div><!-- /.history-one__top -->
                        <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                            the whole one feels that wind up Union Jack doolally bloke.</p>
                    </div><!-- /.history-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.history-one__single -->
    </div><!-- /.container -->
</section><!-- /.history-one -->

<section class="video-one text-center" style="background-image: url({{ asset('frontend/images/resources/video-parallax-1-1-.jpg') }});">
    <div class="container">
        <a href="https://www.youtube.com/watch?v=hO1tzmi1V5g" class="video-popup video-one__btn"><i class="fa fa-play"></i></a><!-- /.video-popup video-one__btn -->
    </div><!-- /.container -->
</section><!-- /.video-one -->
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

<section class="cta-one" style="background-image: url({{ asset('frontend/images/shapes/cta-bg-1-1.jpg') }});">
    <div class="container text-center">
        <h3>More Than 1250 Exhibits!</h3>
        <p>
            Every day more exhibits arrive in our museum. Do not <br />
            wait and buy a ticket now.
        </p>
        <div class="cta-one__btn-block">
            <a href="#" class="thm-btn cta-one__btn-one">Become A Member</a><!-- /.thm-btn cta-one__btn-one -->
            <a href="#" class="thm-btn cta-one__btn-two">Buy Online</a><!-- /.thm-btn cta-one__btn-two -->
        </div>
        <!-- /.cta-one__btn-block -->
    </div>
    <!-- /.container -->
</section>

@endsection
