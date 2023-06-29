<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gtrust Admin Panel | @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png') }}">

    <!-- Global stylesheets -->
    <link href="{{ asset('admin/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/custom.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script src="{{ asset('admin/js/jquery/jquery.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('admin/js/vendor/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/visualization/d3/d3_tooltip.js') }}"></script>

    <script src="{{ asset('admin/js/vendor/editors/ckeditor/ckeditor_classic.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/forms/inputs/imask.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/uploaders/fileinput/fileinput.min.js') }}"></script>
	<script src="{{ asset('admin/js/vendor/uploaders/fileinput/plugins/sortable.min.js') }}"></script>
	<script src="{{ asset('admin/js/vendor/tables/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('admin/js/vendor/ui/moment/moment.min.js') }}"></script>
	<script src="{{ asset('admin/js/vendor/pickers/datepicker.min.js') }}"></script>
	<script src="{{ asset('admin/js/vendor/pickers/daterangepicker.js') }}"></script>
	<script src="{{ asset('admin/js/datatable_basic.js') }}"></script>
    <script src="{{ asset('admin/js/form_select2.js') }}"></script>
    <script src="{{ asset('admin/js/uploader_bootstrap.js') }}"></script>
    <script src="{{asset('js/custom_ckeditor.js')}}"></script>
    <!-- /theme JS files -->

    @yield('css')

</head>

<body>

    @include('admin.layout.navbar')

    <!-- page content -->
    <div class="page-content">

        @include('admin.layout.sidebar')

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                @include('admin.layout.page_header')

                <!-- success message -->
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <!-- error message -->
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                
                @yield('content')

                @include('admin.layout.footer')

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>

    @yield('js')
    <script>
        // get all elements with class "file-upload"
        const fileUpload = document.getElementsByClassName('file-upload');
        // for each element
        for (let i = 0; i < fileUpload.length; i++) {
            var filename = fileUpload[i].getAttribute('data-default');
            if (filename) { 
                if ($(fileUpload[i]).hasClass('file-input')) {
                     // file input update on fileinput bootstrap
                    var initialPreviewConfig =  [
                        {caption: filename , showDrag: false, showZoom: true, showRemove: false},
                    ];

                    var datapath = $(fileUpload[i]).attr('data-path');
                    if (datapath == null || datapath == ''){
                        datapath = 'uploads/staticpage/';
                    }

                    var url = "{{ asset('') }}" + datapath + filename;
                    fileUpload[i].setAttribute('data-initial-preview', url);
                    fileUpload[i].setAttribute('data-initial-caption', filename);
                    fileUpload[i].setAttribute('data-initial-preview-as-data', true);
                    fileUpload[i].setAttribute('data-initial-preview-file-type', 'image');
                    fileUpload[i].setAttribute('data-initial-preview-config', JSON.stringify(initialPreviewConfig));
                } else {
                    // Create a new File object
                    const myFile = new File([filename], filename, {
                        type: 'text/plain',
                        lastModified: new Date(),
                    });
                
                    // // Now let's create a DataTransfer to get a FileList
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(myFile);
                    fileUpload[i].files = dataTransfer.files;
                }
            }
        }
    
    // <!-- script for dymanic form -->
        $(document).ready(function() {
            // Buttons inside zoom modal
            const previewZoomButtonClasses = {
                rotate: 'btn btn-light btn-icon btn-sm',
                toggleheader: 'btn btn-light btn-icon btn-header-toggle btn-sm',
                fullscreen: 'btn btn-light btn-icon btn-sm',
                borderless: 'btn btn-light btn-icon btn-sm',
                close: 'btn btn-light btn-icon btn-sm'
            };

            // Icons inside zoom modal classes
            const previewZoomButtonIcons = {
                prev: document.dir == 'rtl' ? '<i class="ph-arrow-right"></i>' : '<i class="ph-arrow-left"></i>',
                next: document.dir == 'rtl' ? '<i class="ph-arrow-left"></i>' : '<i class="ph-arrow-right"></i>',
                rotate: '<i class="ph-arrow-clockwise"></i>',
                toggleheader: '<i class="ph-arrows-down-up"></i>',
                fullscreen: '<i class="ph-corners-out"></i>',
                borderless: '<i class="ph-frame-corners"></i>',
                close: '<i class="ph-x"></i>'
            };

            // File actions
            const fileActionSettings = {
                zoomClass: '',
                zoomIcon: '<i class="ph-magnifying-glass-plus"></i>',
                dragClass: 'p-2',
                dragIcon: '<i class="ph-dots-six"></i>',
                removeClass: '',
                removeErrorClass: 'text-danger',
                removeIcon: '<i class="ph-trash"></i>',
                indicatorNew: '<i class="ph-file-plus text-success"></i>',
                indicatorSuccess: '<i class="ph-check file-icon-large text-success"></i>',
                indicatorError: '<i class="ph-x text-danger"></i>',
                indicatorLoading: '<i class="ph-spinner spinner text-muted"></i>'
            };
            // click funtion .btn-delete
            $('.btn-delete').click(function() {
                // get action url
                var url = $(this).data('url');
                // set action url
                $('#modal_delete form').attr('action', url);
            });
            // click funtion .btn-create
            $('.btn-create').click(function() {
                // clear form input
                $('#modal_form form')[0].reset();
                // set title modal
                $('#modal_form .modal-title').text('Tambah ' + $('#title-page').text());
                // set url form
                $('#modal_form form').attr('action', $(this).data('url'));
                // set button submit
                $('#modal_form form button[type=submit]').text('Buat ' + $('#title-page').text());
                // set _method to POST
                $('#modal_form form input[name=_method]').val('POST');
            });
            // click funtion .btn-edit
            $('.btn-edit').click(function() {
                // get data item
                var item = $(this).data('item');
                // get form input
                var formitem = $('#modal_form form .form-dynamic');

                // foreach
                $.each(formitem, function(i, v) {
                    // cek if input type file
                    if ($(v).attr('type') == 'file') {
                        const fileUploads = document.getElementsByClassName('file-upload');
                        // each fileUploads
                        var filename = item[v.name];
                        if (filename) { 
                            if ($(v).hasClass('file-input')) {

                                // file input update on fileinput bootstrap
                                var initialPreviewConfig =  [
                                    {caption: filename , showDrag: false, showZoom: true, showRemove: false},
                                ];
                                var url =  $(v).data('path') + '/' + filename;
                                v.setAttribute('data-initial-preview', url);
                                v.setAttribute('data-initial-caption', filename);
                                v.setAttribute('data-initial-preview-as-data', true);
                                v.setAttribute('data-initial-preview-file-type', 'image');
                                v.setAttribute('data-initial-preview-config', JSON.stringify(initialPreviewConfig));
                                // file input update on fileinput bootstrap
                                
                                $(v).fileinput('destroy').fileinput({
                                    previewFileType: 'image',
                                    browseLabel: 'Select',
                                    browseClass: 'btn btn-light',
                                    browseIcon: '<i class="ph-image me-2"></i>',
                                    removeLabel: 'Remove',
                                    removeClass: 'btn btn-danger',
                                    removeIcon: '<i class="ph-x-square me-2"></i>',
                                    uploadClass: 'btn btn-teal',
                                    uploadIcon: '<i class="ph-upload-simple me-2"></i>',
                                    layoutTemplates: {
                                        icon: '<i class="ph-check"></i>'
                                    },
                                    initialCaption: "Please select image",
                                    mainClass: 'input-group',
                                    showUpload: false,
                                    showRemove: false,
                                    initialPreview : [
                                        url
                                    ],
                                    initialPreviewConfig: initialPreviewConfig,
                                    initialPreviewAsData: true,
                                    initialPreviewFileType: 'image',
                                    overwriteInitial: true,
                                    initialCaption: filename,
                                    previewZoomButtonClasses: previewZoomButtonClasses,
                                    previewZoomButtonIcons: previewZoomButtonIcons,
                                    fileActionSettings: fileActionSettings
                                });

                            } else {
                                // get data default
                                var filename = item[v.name]
                                // Create a new File object
                                const myFile = new File([filename], filename, {
                                    type: 'image/*',
                                    lastModified: new Date(),
                                });

                                // // Now let's create a DataTransfer to get a FileList
                                const dataTransfer = new DataTransfer();
                                dataTransfer.items.add(myFile);
                                fileUploads[0].files = dataTransfer.files;
                            }
                        }
                    } else {
                        // set value form input
                        $(v).val(item[v.name]);
                          // check ckeditor
                        if ($(v).attr('id') == 'ckeditor_classic_empty'){
                            CKEditorClassic.refreshData();
                        }
                    }
                });

                // set url form
                $('#modal_form form').attr('action', $(this).data('url'));
                // set _method to PUT
                $('#modal_form form input[name=_method]').val('PATCH');
                // set title modal
                $('#modal_form .modal-title').text('Edit ' + $('#title-page').text());
                // set button submit
                $('#modal_form form button[type=submit]').text('Simpan Perubahan');
                // show modal
                $('#modal_form').modal('show');
            });
        });
    </script>

</body>

</html>
