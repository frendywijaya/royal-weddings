@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Input fields -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Pengaturan Header</h5>
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
                                    <button type="submit" class="btn btn-primary btn-save">Simpan <i
                                            class="ph-check-square-offset ms-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /input fields -->

            <!-- Card Kanan -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-10">
                        <!-- Table Metode Pembayaran -->
                        <div class="card">
                            <div class="card-header d-flex align-items-center py-0">
                                <h5 class="mb-0 py-3" id="title-page">Other Services Link</h5>
                                <div class="my-auto ms-auto">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#modal_form"
                                        data-url="{{ route('admin.otherservice.store') }}" class="btn btn-primary btn-create"><i class="ph-plus-circle me-1"></i>tambah
                                        link</button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="bg-dark text-white">
                                            <th>Title</th>
                                            <th>Link</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($otherServices as $otherService)
                                        <tr>
                                            <td>{{$otherService->title}}</td>
                                            <td>{{$otherService->link}}</td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" class="text-body btn-edit" data-bs-toggle="modal"
                                                        data-bs-target="#modal_form" data-url="{{route('admin.otherservice.update',$otherService->id)}}" data-item="{{json_encode($otherService)}}">
                                                        <i class="ph-pen"></i>
                                                    </a>
                                                    <a class="text-body mx-2 btn-delete" data-bs-toggle="modal"
                                                        data-bs-target="#modal_delete" href="#" data-url="{{route('admin.otherservice.destroy',$otherService->id)}}">
                                                        <i class="ph-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /Table Metode Pembayaran -->
                    </div>

                </div>

            </div>
            <!-- /Card Kanan -->

        </div>
    </div>
    <!-- /content area -->

    <!-- modal edit link -->
    <div id="modal_form" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Link</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{route('admin.otherservice.store') }}" method="POST" class="form-horizontal">
                    @csrf
                    <input type="hidden" name="_method" value="POST">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Title</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-dynamic" name="title">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-form-label col-lg-3">Link</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-dynamic" name="link">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan <i
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
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
@endsection
