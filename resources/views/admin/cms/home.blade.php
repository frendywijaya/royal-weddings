@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Expanded state -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Home Page Content Management</h5>
            </div>

            <form action="{{ route('admin.staticpage.save', 'homestatic') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @include('admin.layout.success')
                    <div class="accordion" id="accordion_expanded">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#expanded_item1">
                                    Company Introduction
                                </button>
                            </h2>
                            <div id="expanded_item1" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <p class="fw-semibold">Text Content</p>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_title" value="{{ @$staticPage->about_title }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Subtitle</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_subtitle" value="{{ @$staticPage->about_subtitle }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text 1</label>
                                                <div class="col-lg-9">
                                                    <textarea type="text" class="form-control" name="about_text_1" rows="3">{{ @$staticPage->about_text_1 }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text 2</label>
                                                <div class="col-lg-9">
                                                    <textarea type="text" class="form-control" name="about_text_2" rows="5">{{ @$staticPage->about_text_2 }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <div class="col-lg-12 mb-3">
                                                    <p class="fw-semibold">About Image</p>
                                                    <input type="file" class="file-input file-upload"
                                                        name="about_image" accept="image/*"
                                                        data-default="{{ @$staticPage->about_image }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#expanded_item2">
                                    Company Specialty
                                </button>
                            </h2>
                            <div id="expanded_item2" class="accordion-collapse collapse"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <p class="fw-semibold">Text Content</p>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="specialty_title" value="{{ @$staticPage->specialty_title }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text 1</label>
                                                <div class="col-lg-9">
                                                    <textarea type="text" class="form-control" name="specialty_text" rows="3">{{ @$staticPage->specialty_text }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary btn-save">Save <i
                                class="ph-check-square-offset ms-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /expanded state -->
    </div>
    <!-- /content area -->

    @include('admin.layout.modal_delete')
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
@endsection
