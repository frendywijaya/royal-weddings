@extends('frontend.layouts.main')

@section('content')
<!-- Header Content -->
<section class="page-header" style="background-image: url({{ asset('frontend/images/backgrounds/page-header-bg-1-1.jpg') }});">
    <div class="container">
        <h2>Our Portfolio Collections</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="collection-grid collection-masonary">
    <div class="container">
        <div class="collection-grid__top">
            <div class="block-title text-left">
                <p>Gallery</p>
                <h3>Explore <br> the Collection</h3>
            </div><!-- /.block-title -->
        </div><!-- /.collection-grid__top -->
        <div class="row high-gutter filter-layout masonary-layout">
            @foreach($galleries as $gallery)
                <div class="col-lg-4 col-md-6 filter-item masonary-item dis">
                    <div class="collection-grid__single">
                        <div class="collection-grid__image">
                            <img src="{{ asset('uploads/galleries/'.$gallery->image )}}" alt="">
                            <a href="{{ asset('uploads/galleries/'.$gallery->image )}}" target="_blank" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                        </div><!-- /.collection-grid__image -->
                        {{-- <div class="collection-grid__content">
                            <h3><a href="#">{{ @$gallery->title }}</a></h3>
                        </div><!-- /.collection-grid__content --> --}}
                    </div><!-- /.collection-grid__single -->
                </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.collection-grid -->

@endsection
