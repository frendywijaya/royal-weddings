<section class="cta-one" style="background-image: url({{ asset('frontend/images/shapes/cta-bg-1-1.jpg') }});">
    <div class="container text-center">
        <h3>{{ @$staticContactData->section_title }}</h3>
        <p>
            {{ @$staticContactData->section_text }}
        </p>
        <div class="cta-one__btn-block">
            <a href="{{ @$staticContactData->button_link }}" class="thm-btn cta-one__btn-two">{{ @$staticContactData->button_text }}</a><!-- /.thm-btn cta-one__btn-two -->
        </div>
        <!-- /.cta-one__btn-block -->
    </div>
    <!-- /.container -->
</section>
