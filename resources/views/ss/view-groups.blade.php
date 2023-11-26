

@extends('layouts.main_layout')

@section('title', 'Groups')

@section('content')
    <!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a >eWork</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
                <h4 class="page-title">@yield('title')</h4>
            </div>
        </div>
        <hr style="margin-top: -20px;">
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-5">
                            <a id="btnNew" href="#" class="btn btn-outline-success mb-2 btn-sm rounded-2" >Add New Record</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="example" class="mb-3 table align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Group</th>
                                    <th>Size</th>
                                    <th>Status</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="my-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">..</h4>
            </div>
            <form id="my-form" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" id="gottenid" />
                    <div class="row g-9">
                        <div class="col-md-12 fv-row">
                            <label class="form-label" for="ides">Group Name here</label>
                            <input type="text" id="group" class="form-control" placeholder="Enter Group Name"  />
                        </div>
                        <div class="form-outline col-md-12 fv-row mb-2">
                            <label class="form-label" for="ides">State the size of group</label>
                            <input type="text" id="sixe" class="form-control" placeholder="Groups Size" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" onkeydown="return (event.key >= '0' && event.key <= '9') || event.key === 'Backspace' || event.key === 'Delete'" maxlength="4" />
                        </div>
                        <div class="mb-1" style="display: none;" id="state-view">
                            <label for="status" class="form-label">Select Status</label>
                            <select class="form-select" name="stat" id="stat">
                                <option value="Active">Active</option>
                                <option value="InActive">InActive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="edit-data">Proceed</button>
                    <button type="button" class="btn btn-primary btn-sm" id="save-data">Proceed</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="{{ asset('root/dek/bower_components/jquery/js/jquery.min.js') }}"></script>


<script>
    $(document).ready(function ()
    {
        var dataTable = "";
        var counter = 0;

        //calling the model to add new
        $('#btnNew').click(function() {
            $('#my-form')[0].reset();
            $('#modal-title').text('Add New Records');
            $('#my-modal').modal('show');
            $('#state-view').hide();
            $('#edit-data').hide();
            $('#save-data').show();
        });

        // Event listener for edit button
        $('#example').on('click', '.edit-btn', function() {
            var id = $(this).data('id');
            var group = $(this).data('group');
            var sixe = $(this).data('sixe');
            var status = $(this).data('status');

            $('#modal-title').text('About to modify this record');
            $('#group').val(group);
            $('#gottenid').val(id);
            $('#sixe').val(sixe);
            $('#stat').val(status);
            $('#state-view').show();
            $('#save-data').hide();
            $('#edit-data').show();
            $('#my-modal').modal('show');

        });

        //Getting the table ready
        dataTable = $('#example').DataTable({
            ajax: {
                url: '{{ route("ss.view-groups") }}',
                dataSrc: 'groups'
            },
            columns: [
                {
                    data: null,
                    render: function(data, type, row) {
                        return ++counter;
                    }
                },
                { data: 'name' },
                { data: 'size' },
                { data: 'status' },
                { data: 'created_at' },
                {
                    data: null,
                    render: function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm edit-btn mx-2" data-id="' + data.id + '" data-group="' + data.name + '" data-sixe="' + data.size + '" data-status="' + data.status + '"><i class="mdi mdi-pen-plus mx-1"></i>Edit</button>' +
                            '<button class="btn btn-danger btn-sm delete-btn" data-id="' + data.id + '" data-title="' + data.name + '"><i class="mdi mdi-delete mx-1"></i>Remove</button>';
                    }
                }
            ],
            "drawCallback": function( settings ) {
                counter = 0;
            }
        });

        // Save Data Button Click Event
        $('#save-data').on('click', function() {
            var groups = $('#group').val();
            var des = $('#sixe').val();

            // Check if fields are not empty
            if (!groups || !des) {
                Swal.fire({ icon: 'error', title: 'Error', text: 'Please fill in all fields.' });
                return;
            }

            var buttonElement = $(this);
            buttonElement.html('<i class="fa fa-spinner fa-spin"></i> Please wait... ').attr('disabled', true);

            var formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('name', groups.toUpperCase());
            formData.append('sixe', des);

            $.ajax({
                type: 'POST',
                url: '{{ route("add-group") }}',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log('Success Response:', response);
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');
                    $('#my-form')[0].reset();
                    $('#my-modal').modal('hide');

                    counter = 0;
                    dataTable.ajax.reload();

                    if (response.status === 'success') {
                        Swal.fire({ icon: 'success', title: 'Good Job', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', title: 'Error', text: response.message });
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');
                    Swal.fire({ icon: 'error', title: 'Error', text: 'AJAX request failed: ' + textStatus + ', ' + errorThrown });
                }
            });
        });

        // Edit Data Button Click Event
        $('#edit-data').on('click', function() {
            var groups = $('#group').val();
            var des = $('#sixe').val();
            var stat = $('#stat').val();
            var gottenid = $('#gottenid').val();

            // Check if fields are not empty
            if (!groups || !des) {
                Swal.fire({ icon: 'error', title: 'Error', text: 'Please both fields are required.' });
                return;
            }

            var buttonElement = $(this);
            buttonElement.html('<i class="fa fa-spinner fa-spin"></i> Please wait... ').attr("disabled", true);

            $.ajax({
                type: "POST",
                url: '{{ route("update-group") }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    name: groups,
                    sixe: des,
                    stat: stat,
                    id: gottenid
                },
                success: function(response) {
                    console.log('Success Response:', response);
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');
                    $('#my-form')[0].reset();
                    $('#my-modal').modal('hide');
                    counter = 0;
                    dataTable.ajax.reload();
                    if (response.status === "success") {
                        Swal.fire({ icon: 'success', title: 'Good Job', text: response.message,});
                    } else {
                        Swal.fire({ icon: 'error', title: 'Error', text: response.message });
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: "AJAX request failed: " + textStatus + ", " + errorThrown
                    });
                }
            });
        });

        // Event listener for delete button
        $('#example').on('click', '.delete-btn', function(e) {
            var ids = $(this).data('id');
            var rol = $(this).data('title');
            var message = 'Are you sure you want to delete this record? <strong>' + rol + '</strong>';
            Swal.fire({
                title: 'Confirm Deletion',
                html: message,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it',
                cancelButtonText: 'No, cancel',
                cancelButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: '{{ route("distroy-group") }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            ids: ids
                        },
                        success: function(response) {
                            console.log('Success Response:', response);
                            counter = 0;
                            dataTable.ajax.reload();
                            if (response.status === "success") {
                                Swal.fire({ icon: 'success', title: 'Good Job', text: response.message,});
                            } else {
                                Swal.fire({ icon: 'error', title: 'Error', text: response.message });
                            }
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: "AJAX request failed: " + textStatus + ", " + errorThrown
                            });
                        }
                    });
                } else {
                    console.log("Delete action canceled by user.");
                }
            });
        });

        $("#group").val("");   //resetting the groups 

    });
</script>

@endsection
