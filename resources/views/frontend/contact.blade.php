@extends('frontend.layouts.main')

@section('content')
<!-- Header Content -->
<section class="page-header" style="background-image: url({{ asset('frontend/images/backgrounds/page-header-bg-1-1.jpg') }});">
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
                    <h3>Opening Hours</h3>
                    <p>Daily: 9.30 AM–6.00 PM <br> Sunday & Holidays: Closed</p>
                </div><!-- /.contact-one__box -->
                <div class="contact-one__box">
                    <h3>Contact Info</h3>
                    <p>77408 Satterfield Motorway <br> Suite 469 New Antonetta, BC </p>
                    <p>
                        <a href="mailto:example@muzex.com">example@muzex.com</a> <br> <a href="tel:(617)-495-9400-326">(617) 495-9400-326</a></p>
                </div><!-- /.contact-one__box -->
                <div class="contact-one__box">
                    <h3>Social Media</h3>
                    <div class="contact-one__box-social">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-vimeo"></a>
                        <a href="#" class="fab fa-linkedin-in"></a>
                    </div><!-- /.contact-one__box-social -->
                </div><!-- /.contact-one__box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <form action="assets/inc/sendemail.php" class="contact-form-validated contact-one__form">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" placeholder="Your Name*">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" placeholder="Your Email*">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" placeholder="Subject">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <select class="selectpicker">
                                <option value="#">Discuss For</option>
                                <option value="General Query">General Query</option>
                                <option value="For Ticketing">For Ticketing</option>
                                <option value="For Membership">For Membership</option>
                            </select><!-- /#.selectpicker -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <textarea name="message" placeholder="Your Message"></textarea>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__contact" allowfullscreen></iframe>

    </div><!-- /.container -->
</div><!-- /.contact-map-one -->

@endsection
