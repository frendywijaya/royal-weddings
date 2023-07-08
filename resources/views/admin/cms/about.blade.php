@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Expanded state -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">About Page Content Management</h5>
            </div>

            <form action="{{ route('admin.staticpage.save', 'aboutstatic') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="accordion" id="accordion_expanded">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#expanded_item1">
                                    Section 1 - Breadcrumb Cover
                                </button>
                            </h2>
                            <div id="expanded_item1" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <div class="col-lg-12 mb-3">
                                                    <p class="fw-semibold">Cover Image</p>
                                                    <input type="file" class="file-input file-upload" name="breadcrumb_cover_image" 
                                                    accept="image/*" data-default="{{@$staticPage->breadcrumb_cover_image}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="breadcrumb_title" value="{{@$staticPage->breadcrumb_title}}">
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
                                    Section 2 - About Company
                                </button>
                            </h2>
                            <div id="expanded_item2" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_company_title" value="{{@$staticPage->about_company_title}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Subtitle</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_company_section_subtitle" value="{{@$staticPage->about_company_title}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3 pb-3 border-bottom">
                                                <label class="col-form-label col-lg-3">Section Text</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" id="ckeditor_classic_empty" name="about_company_section_text">
                                                        {{@$staticPage->about_company_section_text}}
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Image Text 1</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_company_image_text_1" value="{{@$staticPage->about_company_image_text_1}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Image Text 2</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_company_image_text_2" value="{{@$staticPage->about_company_image_text_2}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Image 1 Cover</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name="about_company_image_1"
                                                accept="image/*" data-default="{{@$staticPage->about_company_image_1}}">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Image 2</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name="about_company_image_2"
                                                accept="image/*" data-default="{{@$staticPage->about_company_image_2}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#expanded_item3">
                                    Section 3 - Approaches
                                </button>
                            </h2>
                            <div id="expanded_item3" class="accordion-collapse collapse"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Slot 1</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name="approaches_slot_1"
                                                accept="image/*" data-default="{{@$staticPage->approaches_slot_1}}">
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="approaches_title_1" value="{{@$staticPage->approaches_title_1}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <Textarea type="text" class="form-control" name="approaches_text_1" rows="5">
                                                        {{@$staticPage->approaches_text_1}}
                                                    </Textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Slot 2</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name="approaches_slot_2"
                                                accept="image/*" data-default="{{@$staticPage->approaches_slot_2}}">
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="approaches_title_2" value="{{@$staticPage->approaches_title_2}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <Textarea type="text" class="form-control" name="approaches_text_2" rows="5">
                                                        {{@$staticPage->approaches_text_2}}
                                                    </Textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Slot 3</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name="approaches_slot_3"
                                                accept="image/*" data-default="{{@$staticPage->approaches_slot_3}}">
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="approaches_title_3" value="{{@$staticPage->approaches_title_3}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <Textarea type="text" class="form-control" name="approaches_text_3" rows="5">
                                                        {{@$staticPage->approaches_text_3}}
                                                    </Textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Slot 4</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name="approaches_slot_4"
                                                accept="image/*" data-default="{{@$staticPage->approaches_slot_4}}">
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="approaches_title_4" value="{{@$staticPage->approaches_title_4}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <Textarea type="text" class="form-control" name="approaches_text_4" rows="5">
                                                        {{@$staticPage->approaches_text_4}}
                                                    </Textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#expanded_item4">
                                    Section 4 - History
                                </button>
                            </h2>
                            <div id="expanded_item4" class="accordion-collapse collapse"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="history_section_title" value="{{@$staticPage->history_section_title}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Subtitle</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="history_section_subtitle" value="{{@$staticPage->history_section_subtitle}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3 pb-3 border-bottom">
                                                <label class="col-form-label col-lg-3">Section Text</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" id="ckeditor_classic_empty" name="history_section_text">
                                                        {{@$staticPage->history_section_text}}
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="fw-bold border-bottom pb-2 mb-3">Video Cover Image</div>
                                                <div class="row mb-3">
                                                    <input type="file" class="file-input file-upload" name="history_video_cover_image"
                                                    accept="image/*" data-default="{{@$staticPage->history_video_cover_image}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Video Link</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="history_video_link" value="{{@$staticPage->history_video_link}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Image 1 Large</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name="history_image_large"
                                                    accept="image/*" data-default="{{@$staticPage->history_image_large}}">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Image 2 Small-Bottom</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name="history_image_small"
                                                    accept="image/*" data-default="{{@$staticPage->history_image_small}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#expanded_item5">
                                    Section 5 - Our Team
                                </button>
                            </h2>
                            <div id="expanded_item5" class="accordion-collapse collapse"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="our_team_section_title" value="{{@$staticPage->our_team_section_title}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Subtitle</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="our_team_section_subtitle" value="{{@$staticPage->our_team_section_subtitle}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#expanded_item6">
                                    Section 6 - Testimonials
                                </button>
                            </h2>
                            <div id="expanded_item6" class="accordion-collapse collapse"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="testimonials_section_title" value="{{@$staticPage->testimonials_section_title}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Subtitle</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="testimonials_section_subtitle" value="{{@$staticPage->testimonials_section_subtitle}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary btn-save">Simpan <i
                                class="ph-check-square-offset ms-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /expanded state -->
    </div>
    <!-- /content area -->

    <!-- modal edit link -->
    <div id="modal_edit" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Pesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <h6 class="fw-semibold">Judul Pesan</h6>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent
                        commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet
                        rutrum faucibus dolor auctor.</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal edit link -->

    @include('admin.layout.modal_delete')
@endsection

@section('js')
    {{-- <script src="{{ asset('admin/js/vendor/uploaders/dropzone.min.js') }}"></script> --}}
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
    {{-- <script src="{{ asset('admin/js/vendor/editors/ckeditor/ckeditor_classic.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/editor_ckeditor_classic.js') }}"></script> --}}
@endsection
