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
                {{-- <div class="contact-one__box">
                    <h3>Opening Hours</h3>
                    <p>Daily: 9.30 AM–6.00 PM <br> Sunday & Holidays: Closed</p>
                </div><!-- /.contact-one__box --> --}}
                <div class="contact-one__box">
                    <h3>Singapore Headquarter</h3>
                    <p>190 CLEMENCEAU AVENUE #06-08 <br>
                        SINGAPORE 239924</p>
                    <p>
                        <a href="mailto:hello@royalweddings.com.sg">hello@royalweddings.com.sg</a> <br> <a href="tel:(+65) 9338 4263">(+65) 9338 4263</a></p>
                </div><!-- /.contact-one__box -->
                <div class="contact-one__box">
                    <h3>Social Media</h3>
                    <div class="contact-one__box-social">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-youtube"></a>
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
                                <option value="For Ticketing">Customer Services</option>
                                <option value="For Membership">Finance & Billings</option>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.794271228245!2d103.84155707582455!3d1.2981675617380102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da199804a12a3d%3A0xa3eddf5a5ae7c117!2s190%20Clemenceau%20Ave%2C%20Singapore%20239924!5e0!3m2!1sen!2sid!4v1688587937635!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="yes" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div><!-- /.container -->
</div><!-- /.contact-map-one -->

@endsection
