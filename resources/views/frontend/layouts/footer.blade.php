<!-- footer-area -->

<footer class="site-footer">
    <div class="site-footer__upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget footer-widget__about">
                        <p>{{@$staticFooterData->footer_text}}</p>
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-2">
                    <div class="footer-widget footer-widget__links">
                        <h3 class="footer-widget__title">Quick Link</h3><!-- /.footer-widget__title -->
                        <ul class="footer-widget__links-list list-unstyled">
                            <li>
                                <a href="/">Home</a>
                        </li>
                            <li>
                                <a href="/about">About Us</a>
                            </li>
                            <li>
                                <a href="/gallery">Gallery</a>
                            </li>
                            <li>
                                <a href="/contact">Contact</a>
                            </li>
                        </ul><!-- /.footer-widget__links-list -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-2 -->
                <div class="col-lg-3">
                    <div class="footer-widget footer-widget__contact">
                        <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                        <p>{!! @$staticContactInfo->company_address !!}</p>
                        <p><a href="tel:(+65) 9338 4263">{!! @$staticContactInfo->company_phone !!}</a></p>
                        <p><a href="mailto:hello@royalweddings.com.sg">{!! @$staticContactInfo->company_email !!}</a></p>
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="footer-widget footer-widget__open-hrs">
                        <h3 class="footer-widget__title">Social Media</h3><!-- /.footer-widget__title -->
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
                        </div>
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.site-footer__upper -->
    <div class="site-footer__bottom">
        <div class="container">
            <div class="inner-container">
                <p>&copy; 2023 Royal Weddings International. All Rights Reserved</p>
                <a href="/" class="site-footer__bottom-logo">
                    <img src="{{ asset('frontend/images/logo-footer-1.png') }}" alt="" style="width: 220px">
                </a>
                <div class="site-footer__bottom-links" style="opacity: 0">
                    <a href="#">Terms & conditions</a>
                    <a href="#">Privacy policy & Terms of use</a>
                </div><!-- /.site-footer__bottom-links -->
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </div><!-- /.site-footer__bottom -->
</footer><!-- /.site-footer -->

<!--end of footer-->
