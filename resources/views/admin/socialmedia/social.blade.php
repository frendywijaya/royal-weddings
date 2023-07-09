@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic initialization -->
        <div class="card col-xl-6 col-md-12">
            <div class="card-header d-flex align-items-center py-0">
                <h5 class="mb-0 py-3">Social Media Link</h5>
                <div class="my-auto ms-auto">
                </div>
                {{-- <div class="my-auto ms-auto">
                    <button type="button" class="btn btn-primary btn-create"><i class="ph-plus-circle me-1"></i>
                        tambah blog</button>
                </div> --}}
            </div>

            <!-- create form -->
            <form action="{{ route('admin.staticpage.save', 'socialmedia') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-1">
                        <!-- Default input -->
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Facebook</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="facebook" value="{{@$staticPage->facebook}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Instagram</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="instagram" value="{{@$staticPage->instagram}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">LinkedIn</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="linkedin" value="{{@$staticPage->linkedin}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Youtube</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="youtube" value="{{@$staticPage->youtube}}">
                            </div>
                        </div>
                        {{-- <div class="row mb-2">
                            <label class="col-form-label col-lg-3">Tiktok</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="tiktok" value="{{@$staticPage->tiktok}}">
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary btn-save">Simpan <i
                            class="ph-check-square-offset ms-2"></i></button>
                </div>
            </form>

        </div>
        <!-- /basic initialization -->

    </div>
    <!-- /content area -->
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
@endsection
