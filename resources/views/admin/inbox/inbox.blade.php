@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic initialization -->
        <div class="card col-xl-12 col-md-12">
            <div class="card-header d-flex align-items-center py-0">
                <h5 class="mb-0 py-3">Daftar Inbox</h5>
            </div>
            <table class="table datatable-key-basic">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pengirim</th>
                        <th>Perusahaan</th>
                        <th>No Telp</th>
                        <th>Email</th>
                        <th>Waktu</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($inboxs as $inbox)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$inbox->full_name}}</a></td>
                        <td>{{$inbox->company_name}}</td>
                        <td>{{$inbox->phone}}</td>
                        <td>{{$inbox->email}}</td>
                        <td>{{ date('d M Y', strtotime($inbox->created_at)) }}</td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="btn-delete text-body mx-2" data-bs-popup="tooltip" data-url="{{route('admin.inbox.delete', $inbox->id)}}"  aria-label="Remove" data-bs-original-title="Remove" data-bs-toggle="modal" data-bs-target="#modal_delete">
                                    <i class="ph-trash"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Options" data-bs-original-title="view" data-inbox='{{json_encode($inbox)}}' onclick="showDetail(this)">
                                    <i class="ph-eye"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- /basic initialization -->

    </div>
    <!-- /content area -->


    <!-- inbox detail modal -->
	<div id="modal_view" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Detail Pesan</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<div class="modal-body">
					<h6 class="fw-semibold">-</h6>
                <p>
                    -
                </p>
				</div>

				<div class="modal-footer">
                    <button type="button" data-url="" onclick="deleteInbox(this)" class="btn-delete-inside btn btn-danger">Delete</button>
					<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /inbox detail modal -->

    @include('admin.layout.modal_delete')

@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
    <script>
        $(document).ready(function() {
        });

        function showDetail(that) {
            var inbox = $(that).data('inbox');
            inbox = JSON.parse(JSON.stringify(inbox));
            $('#modal_view').modal('show');
            $('#modal_view .modal-body h6').html(inbox.subject);
            // /r to /n
            inbox.message = inbox.message.replace(/(?:\r\n|\r|\n)/g, '<br>');
            $('#modal_view .modal-body p').html(inbox.message);
            // set url delete
            var urldelete = "{{route('admin.inbox.delete', ':id')}}";
            urldelete = urldelete.replace(':id', inbox.id);
            $('#modal_view .modal-footer button.btn-delete-inside').attr('data-url', urldelete);
        }

        function deleteInbox(that) {
            var url = $(that).data('url');
            $('#modal_view').modal('hide');
            $('#modal_delete form').attr('action', url);
            $('#modal_delete').modal('show');
        }
    </script>
@endsection
