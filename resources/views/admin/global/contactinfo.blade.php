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
                    <form action="{{ route('admin.staticpage.save', 'contactinfo') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="mb-1">
                                <!-- Default input -->
                                <div class="row mb-3">
                                    <label class="col-form-label col-lg-3">Company Phone</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="company_phone" value="{{@$staticPage->company_phone}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-form-label col-lg-3">Company Email</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="company_email" value="{{@$staticPage->company_email}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-form-label col-lg-3">Company Address</label>
                                    <div class="col-lg-9">
                                        <textarea rows="3" cols="3" class="form-control" id="ckeditor_classic_empty" name="company_address" placeholder="Default textarea">
                                            {{@$staticPage->company_address}}
                                        </textarea>
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

