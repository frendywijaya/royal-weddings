@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Input fields -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Header Settings</h5>
                    </div>

                    <!-- create form -->
                    <form action="{{ route('admin.staticpage.save', 'header') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="mb-1">
                                <!-- Default input -->
                                <div class="row mb-3">
                                    <label class="col-form-label col-lg-3">Welcome Text</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="welcome_text" value="{{@$staticPage->welcome_text}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-form-label col-lg-3">Button Text</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="button_text" value="{{@$staticPage->button_text}}">
                                    </div>
                                </div>
                                <div class="row mb-3 pb-4 border-bottom">
                                    <label class="col-form-label col-lg-3">Button Link</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="button_link" value="{{@$staticPage->button_link}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <p class="fw-semibold">Logo</p>
                                        <div class="parent-file">
                                            <input type="file" class="file-input file-upload" data-show-caption="true" data-show-upload="false" accept="image/*"
                                                data-show-remove="false" name="company_logo" data-default="{{@$staticPage->company_logo}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary btn-save">Save <i
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


    @include('admin.layout.modal_delete')
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
@endsection
