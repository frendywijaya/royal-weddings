@extends('frontend.layouts.main')

@section('content')
    <!-- banner section -->
    <section class="banner-section banner-section__home-two">
        <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel"
            data-options='{"loop": true, "items": 1, "margin": 0, "dots": false, "nav": true, "animateOut": "fadeOut", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 6000, "autoplayHoverPause": false}'>
            <!-- Slide Item -->
            @foreach ($sliders as $item)
            <div class="slide-item">
                <div class="image-layer lazy-image"
                    style="background-image: url('{{ asset($pathSlider.$item->image) }}');"></div>
                <div class="container">
                    <div class="content-box text-center">
                        <h3>{{$item->title}}</h3>
                        <h2>{{$item->subtitle}}</h2>
                        <div class="btn-box">
                            <a href="{{$item->button_link}}" class="thm-btn btn-style-one">{{$item->button_text}}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
                                    {!! @$staticContactInfo->company_address !!}
                                </p>
                                <a href="https://www.google.com/maps/place/190+Clemenceau+Ave,+Singapore+239924/@1.298162,103.844132,16z/data=!4m6!3m5!1s0x31da199804a12a3d:0xa3eddf5a5ae7c117!8m2!3d1.2981622!4d103.844132!16s%2Fg%2F11csjb3lfr?hl=en&entry=ttu" class="thm-btn">Getting Here</a><!-- /.thm-btn -->
                            </div>
                            <!-- /.cta-two__box -->
                        </div>
                        <!-- /.cta-two__content -->
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-6">
                        <div class="cta-two__box">
                            <div class="cta-two__icon">
                                <i class="ph ph-phone"></i>
                            </div>
                            <!-- /.cta-two__icon -->
                            <div class="cta-two__content">
                                <h3>Reach Us</h3>
                                <p>
                                    {!! @$staticContactInfo->company_email !!}<br />
                                    {!! @$staticContactInfo->company_phone !!}
                                </p>
                                <a href="https://wa.me/{{ preg_replace("/[^0-9]/","", $staticContactInfo->company_phone)}}" class="thm-btn">Whatsapp Us</a><!-- /.thm-btn -->
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
                            <p>{{ @$staticHome->about_title }}</p>
                            <h3>{{ @$staticHome->about_subtitle }}</h3>
                        </div>
                        <!-- /.block-title -->
                        <p class="about-two__highlight">
                            {{ @$staticHome->about_text_1 }}
                        </p>
                        <!-- /.about-two__highlight -->
                        <p>
                            {{ @$staticHome->about_text_2 }}
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
                    <p> {{ @$staticHome->specialty_text }}</p>
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
