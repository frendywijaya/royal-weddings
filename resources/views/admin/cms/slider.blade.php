@extends('admin.layout.master')

@section('content')
    <!-- Simple thumbnail with image -->

    <div class="content">
        <div class="card">
            <div class="card-header d-flex align-items-center py-0">
                <h5 class="mb-0 py-3">Landing Page Sliders</h5>
                <div class="my-auto ms-auto">
                </div>
                <div class="my-auto ms-auto">
                    <button type="button" class="btn btn-primary btn-create" data-url="{{route('admin.cms.slider.store')}}" data-bs-toggle="modal" data-bs-target="#modal_form">
                        <i class="ph-plus-circle me-1"></i>
                        Add New</button>
                </div>
            </div>

            <!-- Widgets list -->
            <div class="row p-3">
                @foreach ($sliders as $slider)
                <div class="col-lg-6 col-xl-4">
                    <div class="card mt-3 mb-3">
                        <div class="card-img-actions mx-1 mt-1">
                            <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                                <img src="{{ asset($path.$slider->image) }}" class="img-fluid card-img"
                                    alt="">
                            </a>
                        </div>

                        <div class="card-body">
                            <h6 class="mb-1">Title</h6>
                            <p class="mb-3">{{$slider->title}}</p>
                            <h6 class="mb-1">Subtitle</h6>
                            <p class="mb-3">{{$slider->subtitle}}</p>

                        </div>

                        <div class="card-footer d-flex justify-content-between">
                            <span class="text-muted"></span>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="#" class="btn-edit" data-bs-toggle="modal"
                                    data-bs-target="#modal_form" data-url="{{route('admin.cms.slider.update' , $slider->id)}}" data-item="{{json_encode($slider)}}">Edit</a></li>
                                <li class="list-inline-item"><a href="#" data-bs-toggle="modal" class="btn-delete"
                                        data-bs-target="#modal_delete" data-url="{{route('admin.cms.slider.destroy' , $slider->id)}}">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /simple thumbnail with image -->
                </div>
                @endforeach
            </div>

        </div>

    </div>

    <!-- modal detail -->
    <div id="modal_form" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Slider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="POST">
                    <div class="modal-body">
                        <div class="row mb-3 mt-2 pb-3 border-bottom">
                            <div class="col-lg-12 justify-content-center">
                                <p class="fw-semibold">Slider Image</p>
                                <input type="file" class="form-dynamic file-input file-upload" data-show-caption="true" data-show-upload="false" accept="image/*"
                                    data-show-remove="false" id="file-input-company-logo" name="image">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Title</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-dynamic" name="title">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Subtitle</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-dynamic" name="subtitle">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Button Text</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-dynamic" name="button_text">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Button Link</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-dynamic" name="button_link">
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save <i
                                class="ph-check-square-offset ms-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /modal edit link -->

    @include('admin.layout.modal_delete')

@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
@endsection
