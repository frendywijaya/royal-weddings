@extends('frontend.layouts.main')

@section('content')
    <!-- Header Content -->
    <section class="page-header"
        style="background-image: url({{ asset('frontend/images/backgrounds/page-header-bg-1-1.jpg') }});">
        <div class="container">
            <h2>Contact Us</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <div class="contact-one">
        <div class="container">
            <div class="block-title-two text-center">
                <p>Reach Us</p>
                <h3>Stay in Touch With Royal<br>Weddings International</h3>
            </div><!-- /.block-title-two -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-one__box">
                        <h3>{{ @$staticKontak->address_title }}</h3>
                        <p>{!! @$staticContactInfo->company_address !!}</p>
                        <p>
                            <a href="mailto:{!! @$staticContactInfo->company_email !!}">{!! @$staticContactInfo->company_email !!}</a> <br> <a
                                href="{!! @$staticContactInfo->company_phone !!}">{!! @$staticContactInfo->company_phone !!}</a>
                        </p>
                    </div><!-- /.contact-one__box -->
                    <div class="contact-one__box">
                        <h3>Social Media</h3>
                        <div class="contact-one__box-social">
                            @if (@$SocialMedia->facebook)
                                <a href="{{ $SocialMedia->facebook }}" class="fab fa-facebook-f"></a>
                            @endif
                            @if (@$SocialMedia->instagram)
                                <a href="{{ $SocialMedia->instagram }}" class="fab fa-instagram"></a>
                            @endif
                            @if (@$SocialMedia->youtube)
                                <a href="{{ $SocialMedia->youtube }}" class="fab fa-youtube"></a>
                            @endif
                            @if (@$SocialMedia->linkedin)
                                <a href="{{ $SocialMedia->linkedin }}" class="fab fa-linkedin"></a>
                            @endif
                        </div><!-- /.contact-one__box-social -->
                    </div><!-- /.contact-one__box -->
                </div><!-- /.col-lg-4 -->


                    <div class="col-lg-8">
                        <form action="/send-massage" class="contact-form-validated contact-one__form" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your Name*" value="{{old('full_name')}}" required name="full_name">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your Email*" value="{{old('email')}}" required name="email">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your Phone Number*" value="{{old('phone')}}" required name="phone">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <select class="selectpicker" name="subject">
                                        <option value="#" disabled>Discuss For</option>
                                        <option value="General Query">General Query</option>
                                        <option value="Customer Service">Customer Services</option>
                                        <option value="Finance">Finance & Billings</option>
                                    </select><!-- /#.selectpicker -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Your Message" required></textarea>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-lg-12">
                                    <button class="thm-btn contact-one__btn" type="submit">Submit Now</button>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form><!-- /.contact-one__form -->
                    </div><!-- /.col-lg-8 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.contact-one -->

    <div class="contact-map-one">
        <div class="container">
            <iframe src="{{ @$staticKontak->google_map_link }}" width="100%" height="450" style="border:0;"
                allowfullscreen="yes" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div><!-- /.container -->
    </div><!-- /.contact-map-one -->
@endsection

@section('js')
@endsection
