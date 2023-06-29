@extends('frontend.layouts.main')

@section('content')
<!-- Header Content -->
<section class="page-header" style="background-image: url({{ asset('frontend/images/backgrounds/page-header-bg-1-1.jpg') }});">
    <div class="container">
        <h2>Collection Masonary</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="collection-grid collection-masonary">
    <div class="container">
        <div class="collection-grid__top">
            <div class="block-title text-left">
                <p>Gallery</p>
                <h3>Explore <br> the Collection</h3>
            </div><!-- /.block-title -->

            <ul class="collection-filter post-filter list-unstyled">
                <li data-filter=".filter-item" class="active"><span>All Section</span></li>
                <li data-filter=".pic"><span>Pictures</span></li>
                <li data-filter=".dis"><span>Display</span></li>
                <li data-filter=".poster"><span>Poster</span></li>
                <li data-filter=".arts"><span>Modern Arts</span></li>
            </ul><!-- /.collection-filter list-unstyled -->
        </div><!-- /.collection-grid__top -->
        <div class="row high-gutter filter-layout masonary-layout">
            <div class="col-lg-4 col-md-6 filter-item masonary-item pic">
                <div class="collection-grid__single">
                    <div class="collection-grid__image">
                        <img src="{{ asset('frontend/images/collection/collection-m-1-1.jpg') }}" alt="">
                        <a href="#" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                    </div><!-- /.collection-grid__image -->
                    <div class="collection-grid__content">
                        <h3><a href="#">English Landscape Painting</a></h3>
                        <p>Linda M. Dugan</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 filter-item masonary-item dis">
                <div class="collection-grid__single">
                    <div class="collection-grid__image">
                        <img src="{{ asset('frontend/images/collection/collection-m-1-2.jpg') }}" alt="">
                        <a href="#" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                    </div><!-- /.collection-grid__image -->
                    <div class="collection-grid__content">
                        <h3><a href="#">English Landscape Painting</a></h3>
                        <p>Linda M. Dugan</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 filter-item masonary-item dis">
                <div class="collection-grid__single">
                    <div class="collection-grid__image">
                        <img src="{{ asset('frontend/images/collection/collection-m-1-3.jpg') }}" alt="">
                        <a href="#" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                    </div><!-- /.collection-grid__image -->
                    <div class="collection-grid__content">
                        <h3><a href="#">English Landscape Painting</a></h3>
                        <p>Linda M. Dugan</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 filter-item masonary-item pic poster">
                <div class="collection-grid__single">
                    <div class="collection-grid__image">
                        <img src="{{ asset('frontend/images/collection/collection-m-1-4.jpg') }}" alt="">
                        <a href="#" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                    </div><!-- /.collection-grid__image -->
                    <div class="collection-grid__content">
                        <h3><a href="#">English Landscape Painting</a></h3>
                        <p>Linda M. Dugan</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 filter-item masonary-item arts">
                <div class="collection-grid__single">
                    <div class="collection-grid__image">
                        <img src="{{ asset('frontend/images/collection/collection-m-1-5.jpg') }}" alt="">
                        <a href="#" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                    </div><!-- /.collection-grid__image -->
                    <div class="collection-grid__content">
                        <h3><a href="#">English Landscape Painting</a></h3>
                        <p>Linda M. Dugan</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 filter-item masonary-item dis pic">
                <div class="collection-grid__single">
                    <div class="collection-grid__image">
                        <img src="{{ asset('frontend/images/collection/collection-m-1-8.jpg') }}" alt="">
                        <a href="#" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                    </div><!-- /.collection-grid__image -->
                    <div class="collection-grid__content">
                        <h3><a href="#">English Landscape Painting</a></h3>
                        <p>Linda M. Dugan</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 filter-item masonary-item dis pic">
                <div class="collection-grid__single">
                    <div class="collection-grid__image">
                        <img src="{{ asset('frontend/images/collection/collection-m-1-6.jpg') }}" alt="">
                        <a href="#" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                    </div><!-- /.collection-grid__image -->
                    <div class="collection-grid__content">
                        <h3><a href="#">English Landscape Painting</a></h3>
                        <p>Linda M. Dugan</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 filter-item masonary-item dis pic">
                <div class="collection-grid__single">
                    <div class="collection-grid__image">
                        <img src="{{ asset('frontend/images/collection/collection-m-1-7.jpg') }}" alt="">
                        <a href="#" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                    </div><!-- /.collection-grid__image -->
                    <div class="collection-grid__content">
                        <h3><a href="#">English Landscape Painting</a></h3>
                        <p>Linda M. Dugan</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 filter-item masonary-item dis pic">
                <div class="collection-grid__single">
                    <div class="collection-grid__image">
                        <img src="{{ asset('frontend/images/collection/collection-m-1-9.jpg') }}" alt="">
                        <a href="#" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                    </div><!-- /.collection-grid__image -->
                    <div class="collection-grid__content">
                        <h3><a href="#">English Landscape Painting</a></h3>
                        <p>Linda M. Dugan</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.collection-grid -->


<section class="cta-one" style="background-image: url({{ asset('frontend/images/shapes/cta-bg-1-1.jpg') }});">
    <div class="container text-center">
        <h3>More Than 1250 Exhibits!</h3>
        <p>
            Every day more exhibits arrive in our museum. Do not <br />
            wait and buy a ticket now.
        </p>
        <div class="cta-one__btn-block">
            <a href="#" class="thm-btn cta-one__btn-one">Become A Member</a><!-- /.thm-btn cta-one__btn-one -->
            <a href="#" class="thm-btn cta-one__btn">Buy Online</a><!-- /.thm-btn cta-one__btn-two -->
        </div>
        <!-- /.cta-one__btn-block -->
    </div>
    <!-- /.container -->
</section>

@endsection
