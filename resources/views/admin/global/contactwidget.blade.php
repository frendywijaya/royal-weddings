@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Input fields -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Pengaturan Contact Widget</h5>
                    </div>

                    <!-- create form -->
                    <form action="{{ route('admin.staticpage.save', 'contactwidget') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="mb-1">
                                <!-- Default input -->
                                <div class="row mb-3">
                                    <label class="col-form-label col-lg-3">Section Title</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="section_title" value="{{@$staticPage->section_title}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-form-label col-lg-3">Section Text</label>
                                    <div class="col-lg-9">
                                        <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea" name="section_text">{{@$staticPage->section_text}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3 pb-3">
                                    <label class="col-form-label col-lg-3">Button Text</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="button_text" value="{{@$staticPage->button_text}}">
                                    </div>
                                </div>
                                <div class="row mb-3 pb-3 border-bottom">
                                    <label class="col-form-label col-lg-3">Button Link</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="button_link" value="{{@$staticPage->button_link}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <p class="fw-semibold">Background Image (464 x 555)</p>
                                        <div class="parent-file">
                                            <input type="file" class="file-input file-upload" data-show-caption="true" data-show-upload="false" accept="image/*"
                                                data-show-remove="false" name="backround_image" data-default="{{@$staticPage->backround_image}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary btn-save">Simpan <i
                                            class="ph-check-square-offset ms-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /input fields -->
        </div>
    </div>
    <!-- /content area -->
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
@endsection
