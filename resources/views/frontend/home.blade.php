@extends('frontend.layouts.main')

@section('content')
    <!-- banner section -->
    <section class="banner-section banner-section__home-two">
        <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel"
            data-options='{"loop": true, "items": 1, "margin": 0, "dots": false, "nav": true, "animateOut": "fadeOut", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 6000, "autoplayHoverPause": false}'>
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer lazy-image"
                    style="background-image: url('{{ asset('frontend/images/main-slider/banner-2-1.jpg') }}');"></div>
                <div class="container">
                    <div class="content-box text-center">
                        <h3>Test Data</h3>
                        <h2>The World’s Leading Museum <br />of Contemporary Art</h2>
                        <div class="btn-box">
                            <a href="#" class="thm-btn btn-style-one">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer lazy-image"
                    style="background-image: url('{{ asset('frontend/images/main-slider/banner-2-2.jpg') }}');"></div>
                <div class="container">
                    <div class="content-box text-center">
                        <h3>The Past is our Future</h3>
                        <h2>Discover the Treasures of a Egypt <br> Historical Museum</h2>
                        <div class="btn-box">
                            <a href="#" class="thm-btn btn-style-one">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer lazy-image"
                    style="background-image: url('{{ asset('frontend/images/main-slider/banner-2-3.jpg') }}');"></div>
                <div class="container">
                    <div class="content-box text-center">
                        <h3>Opening On Sat. Oct 20, 2020</h3>
                        <h2>World’s Leading Museum of History <br> Over 2.3 k Collection</h2>
                        <div class="btn-box">
                            <a href="#" class="thm-btn btn-style-one">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner section -->
    <section class="cta-two cta-two__home-two">
        <div class="container">
            <div class="inner-container">
                <div class="row no-gutters">
                    {{-- <div class="col-lg-4">
                    <div class="cta-two__box">
                        <div class="cta-two__icon">
                            <i class="muzex-icon-clock"></i>
                        </div>
                        <!-- /.cta-two__icon -->
                        <div class="cta-two__content">
                            <h3>Open Hours</h3>
                            <p>
                                Daily: 9.30 AM–6.00 PM <br />
                                Sunday & Holidays: Closed
                            </p>
                            <a href="contact.html" class="thm-btn">All Hours</a><!-- /.thm-btn -->
                        </div>
                        <!-- /.cta-two__content -->
                    </div>
                    <!-- /.cta-two__box -->
                </div> --}}
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-6">
                        <div class="cta-two__box">
                            <div class="cta-two__icon">
                                <i class="muzex-icon-location"></i>
                            </div>
                            <!-- /.cta-two__icon -->
                            <div class="cta-two__content">
                                <h3>Our Headquarter</h3>
                                <p>
                                    Muszex Museums 32 Quincy <br />
                                    Street Cambridge, MA
                                </p>
                                <a href="contact.html" class="thm-btn">Getting Here</a><!-- /.thm-btn -->
                            </div>
                            <!-- /.cta-two__box -->
                        </div>
                        <!-- /.cta-two__content -->
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-6">
                        <div class="cta-two__box">
                            <div class="cta-two__icon">
                                <i class="muzex-icon-ticket"></i>
                            </div>
                            <!-- /.cta-two__icon -->
                            <div class="cta-two__content">
                                <h3>Reach Us</h3>
                                <p>
                                    Muszex Museums 32 Quincy <br />
                                    Street Cambridge, MA
                                </p>
                                <a href="contact.html" class="thm-btn">Whatsapp Us</a><!-- /.thm-btn -->
                            </div>
                            <!-- /.cta-two__box -->
                        </div>
                        <!-- /.cta-two__content -->
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.inner-container -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.cta-two -->
    <section class="about-two"
        style="background-image: url( {{ asset('frontend/images/backgrounds/event-bg-1-1.jpg') }}); padding-bottom: 340px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-two__content">
                        <div class="block-title">
                            <p>Your Wedding Journey Starts Here</p>
                            <h3>Royal Weddings International</h3>
                        </div>
                        <!-- /.block-title -->
                        <p class="about-two__highlight">
                            Welcome to Royal Weddings International. We are the largest destination wedding organizer in
                            Singapore.
                        </p>
                        <!-- /.about-two__highlight -->
                        <p>
                            Royal Weddings International was formed to strive for excellence in every aspect of our work,
                            aiming to exceed expectations and deliver exceptional service and experiences to our clients. We
                            at Royal Weddings International uphold the highest standards of integrity, honesty, and
                            transparency in our interactions with clients, partners, and team members.
                        </p>
                    </div>
                    <!-- /.about-two__content -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-5">
                    <div class="about-two__image">
                        <img src="{{ asset('frontend/images/resources/about-2-1.jpg') }}" alt="" />
                    </div>
                    <!-- /.about-two__image -->
                </div>
                <!-- /.col-lg-5 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.about-two -->

    <section class="cta-three">
        <div class="container">
            <div class="inner-container wow fadeInUp" data-wow-duration="1500ms"
                style="background-image: url({{ asset('frontend/images/shapes/cta-bg-2-1.jpg') }});">
                <div class="cta-three__title">
                    <h3><span>Our</span> <br> Specialty</h3>
                </div><!-- /.cta-three__title -->
                <div class="cta-three__content">
                    <p>Experience one stop wedding solution for destination wedding. Enjoy the ultimate priviledge of
                        comfort and peace while we do the magic.</p>
                    <div class="cta-three__list-wrap">
                        <div class="row">
                            <div class="col-4">
                                <ul class="list-unstyled cta-three__list">
                                    <li>Wedding Deco & Planning</li>
                                    <li>Hotel & Venue Reservation</li>
                                    <li>Food & Catering</li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list-unstyled cta-three__list">
                                    <li>Wedding Deco & Planning</li>
                                    <li>Hotel & Venue Reservation</li>
                                    <li>Food & Catering</li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list-unstyled cta-three__list">
                                    <li>Wedding Deco & Planning</li>
                                    <li>Hotel & Venue Reservation</li>
                                    <li>Food & Catering</li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.list-unstyled cta-three__list -->
                    </div><!-- /.cta-three__list-wrap -->
                </div><!-- /.cta-three__content -->
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </section><!-- /.cta-three -->

    {{-- <section class="collection-two">
        <div class="container-fluid">
            <div class="block-title-two text-center">
                <p>Partners</p>
                <h3>Our Trusted Partners</h3>
            </div><!-- /.container-fluid -->
            <div class="container">
                <div class="brand-one__carousel thm__owl-carousel owl-carousel owl-theme"
                    data-options='{
    "items": 5, "margin": 150, "smartSpeed": 700, "loop": true, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": false, "nav": false, "dots": false, "responsive": {"0": {"margin": 20, "items": 2 }, "575": {"margin": 30, "items": 3 }, "767": {"margin": 40, "items": 4 }, "991": {"margin": 70, "items": 4 }, "1199": {"margin": 150, "items": 5 } } }'>
                    <div class="item">
                        <img src="{{ asset('frontend/images/brand/brand-1-1.png') }}" alt="" />
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <img src="{{ asset('frontend/images/brand/brand-1-2.png') }}" alt="" />
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <img src="{{ asset('frontend/images/brand/brand-1-3.png') }}" alt="" />
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <img src="{{ asset('frontend/images/brand/brand-1-4.png') }}" alt="" />
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <img src="{{ asset('frontend/images/brand/brand-1-5.png') }}" alt="" />
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <img src="{{ asset('frontend/images/brand/brand-1-1.png') }}" alt="" />
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <img src="{{ asset('frontend/images/brand/brand-1-2.png') }}" alt="" />
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <img src="{{ asset('frontend/images/brand/brand-1-3.png') }}" alt="" />
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <img src="{{ asset('frontend/images/brand/brand-1-4.png') }}" alt="" />
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <img src="{{ asset('frontend/images/brand/brand-1-5.png') }}" alt="" />
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.brand-one__carousel thm__owl-carousel owl-carousel owl-theme -->
            </div>
            <!-- /.container -->
    </section> --}}

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
    <!-- /.cta-one -->

    {{-- <section class="testimonials-one">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-6 d-flex">
                <div class="my-auto">
                    <div class="testimonials-one__block">
                        <div class="block-title">
                            <p>Testimonials</p>
                            <h3>What Clients Say?</h3>
                        </div><!-- /.block-title -->
                        <div class="testimonials-one__carousel owl-carousel thm__owl-carousel owl-theme" data-options='{
                "items": 1, "loop": true, "margin": 0, "smartSpeed": 700, "autoplayHoverPause": true, "autoplayTimeout": 5000, "autoplay": true, "dots": false, "nav": true }'>
                            <div class="item">
                                <div class="testimonials-one__single">
                                    <img src="{{ asset('frontend/images/shapes/testi-qoute-1-1.png') }}" alt="">
                                    <p>Welcome to the World’s Leading Museum of Modern Art. It includes works of art
                                        created
                                        during the period stretching.</p>
                                    <div class="testimonials-one__author">
                                        <img src="{{ asset('frontend/images/resources/testi-1-1.jpg') }}" alt="">
                                        <h4>Eunice Bailey</h4>
                                    </div><!-- /.testimonials-one__author -->
                                </div><!-- /.testimonials-one__single -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="testimonials-one__single">
                                    <img src="{{ asset('frontend/images/shapes/testi-qoute-1-1.png') }}" alt="">
                                    <p>Welcome to the World’s Leading Museum of Modern Art. It includes works of art
                                        created
                                        during the period stretching.</p>
                                    <div class="testimonials-one__author">
                                        <img src="{{ asset('frontend/images/resources/testi-1-1.jpg') }}" alt="">
                                        <h4>Eunice Bailey</h4>
                                    </div><!-- /.testimonials-one__author -->
                                </div><!-- /.testimonials-one__single -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="testimonials-one__single">
                                    <img src="{{ asset('frontend/images/shapes/testi-qoute-1-1.png') }}" alt="">
                                    <p>Welcome to the World’s Leading Museum of Modern Art. It includes works of art
                                        created
                                        during the period stretching.</p>
                                    <div class="testimonials-one__author">
                                        <img src="{{ asset('frontend/images/resources/testi-1-1.jpg') }}" alt="">
                                        <h4>Eunice Bailey</h4>
                                    </div><!-- /.testimonials-one__author -->
                                </div><!-- /.testimonials-one__single -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="testimonials-one__single">
                                    <img src="{{ asset('frontend/images/shapes/testi-qoute-1-1.png') }}" alt="">
                                    <p>Welcome to the World’s Leading Museum of Modern Art. It includes works of art
                                        created
                                        during the period stretching.</p>
                                    <div class="testimonials-one__author">
                                        <img src="{{ asset('frontend/images/resources/testi-1-1.jpg') }}" alt="">
                                        <h4>Eunice Bailey</h4>
                                    </div><!-- /.testimonials-one__author -->
                                </div><!-- /.testimonials-one__single -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="testimonials-one__single">
                                    <img src="{{ asset('frontend/images/shapes/testi-qoute-1-1.png') }}" alt="">
                                    <p>Welcome to the World’s Leading Museum of Modern Art. It includes works of art
                                        created
                                        during the period stretching.</p>
                                    <div class="testimonials-one__author">
                                        <img src="{{ asset('frontend/images/resources/testi-1-1.jpg') }}" alt="">
                                        <h4>Eunice Bailey</h4>
                                    </div><!-- /.testimonials-one__author -->
                                </div><!-- /.testimonials-one__single -->
                            </div><!-- /.item -->

                            <div class="item">
                                <div class="testimonials-one__single">
                                    <img src="{{ asset('frontend/images/shapes/testi-qoute-1-1.png') }}" alt="">
                                    <p>Welcome to the World’s Leading Museum of Modern Art. It includes works of art
                                        created
                                        during the period stretching.</p>
                                    <div class="testimonials-one__author">
                                        <img src="{{ asset('frontend/images/resources/testi-1-1.jpg') }}" alt="">
                                        <h4>Eunice Bailey</h4>
                                    </div><!-- /.testimonials-one__author -->
                                </div><!-- /.testimonials-one__single -->
                            </div><!-- /.item -->
                        </div><!-- /.testimonials-one__carousel owl-carousel thm__owl-carousel owl-theme -->
                    </div><!-- /.testimonials-one__block -->

                </div><!-- /.my-auto -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="testimonials-one__main-image">
                    <img src="{{ asset('frontend/images/resources/testi-block-1-1.jpg') }}" alt="">
                </div><!-- /.testimonials-one__main-image -->
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row no-gutters -->
    </div><!-- /.container-fluid -->
</section><!-- /.testimonials-one --> --}}
@endsection
