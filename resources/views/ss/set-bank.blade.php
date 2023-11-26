

@extends('layouts.main_layout')

@section('title', 'Banks')

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
                            <button id="btnNew" type="button" class="btn btn-outline-success mb-2 btn-sm rounded-2" >Add New Record</button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="example" class="table align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Init</th>
                                    <th>Type</th>
                                    <th>Location</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
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
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="gottenid" name="gottenid" />
                    <div class="row g-9">
                        <div class="col-md-12 row">
                            <label class="form-label" for="ides">Bank Name In Full</label>
                            <div class="col-md-9 mb-2">
                                <input type="text" id="bank" name="bank" class="form-control" placeholder="Enter Bank Name" required />
                            </div>
                            <div class="col-md-3 mb-2">
                                <input type="text" id="init" name="init" class="form-control" placeholder="Initials" maxlength="15" readonly required/>
                            </div>
                        </div>

                        <div class="col-md-12 row">
                            <label class="form-label" for="ides">Contact Details</label>
                            <div class="col-md-6 mb-2">
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" onkeydown="return (event.key >= '0' && event.key <= '9') || event.key === 'Backspace' || event.key === 'Delete'" maxlength="10" required />
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" id="tel" name="tel" class="form-control" placeholder="Telephone line" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" onkeydown="return (event.key >= '0' && event.key <= '9') || event.key === 'Backspace' || event.key === 'Delete'" maxlength="10" required/>
                            </div>
                        </div>
                        <div class="col-md-12 row mb-2">
                            <label class="form-label" for="ides">Bank Address</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Location of Bank" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" required />
                        </div>
                        <div class="col-md-12 row mb-2">
                            <label class="form-label" for="ides">Bank Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" required />
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="form-label" for="types">Type of Bank</label>
                            <select id="types" name="types" class="form-control mb-2">
                                <option value="" selected disabled>---- Select Option ----</option>
                                <option value="Cormmercial">Cormmercial Bank</option>
                                <option value="RuralBank">Rural Bank</option>
                                <option value="Savings">Savings & Loan</option>
                                <option value="Microfinance">Microfinance</option>
                                <option value="CreditUnion">Credit Union</option>
                            </select>
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
                    <button type="button" class="btn btn-primary btn-sm" id="edit-data">Proceed</button>
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
        $("#types").val("");

        $('#btnNew').click(function() {
            $('#my-form')[0].reset();
            $('#modal-title').text('Add New Records');
            $('#my-modal').modal('show');
            $('#state-view').hide();
            $('#edit-data').hide();
            $('#save-data').show();
        });

        dataTable = $('#example').DataTable({
            ajax: {
                url: '{{ route("set-bank") }}',
                dataSrc: 'banks'
            },
            columns: [
                {
                    data: null,
                    render: function(data, type, row) {
                        return ++counter;
                    }
                },
                { data: 'name' },
                { data: 'initials' },
                { data: 'type' },
                { data: 'location' },
                { data: 'email' },
                { data: 'phone' },
                {
                    data: 'status',
                    render: function(data, type, row) {
                        return `<button class="btn btn-outline-${data === 'Active' ? 'success' : 'danger'} btn-sm">${data}</button>`;
                    },
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm edit-btn mx-2" data-id=' + data.id + ' data-bank="' + data.name + '" data-init=' + data.initials + ' data-status=' + data.status + ' data-loc="' + data.location + '" data-email=' + data.email + ' data-phone=' + data.phone + ' data-tel=' + data.tel + ' data-typ=' + data.type + '><i class="mdi mdi-pen-plus mx-1"></i>Edit</button>' +
                            '<button class="btn btn-danger btn-sm delete-btn" data-id="' + data.id + '" data-rol="' + data.name + '"><i class="mdi mdi-delete mx-1"></i>Remove</button>';
                    }
                }
            ],
            "drawCallback": function( settings ) {
                counter = 0;
            }
        });

        $('#bank').on('input', function () {
            var bankName = $(this).val().toUpperCase();
            var initials = bankName.split(' ').map(function (word) {
                return word.charAt(0);
            }).join('');
            $('#init').val(initials);
        });

        $('#save-data').click(function () {
            var formData = $('#my-form').serializeArray();
            
            if (formData.length > 0) {
                console.log('Form Data:', formData);

                var buttonElement = $(this);
                buttonElement.html('<i class="fa fa-spinner fa-spin"></i> Please wait... ').attr('disabled', true);

                $.ajax({
                    type: 'POST',
                    url: '{{ route("add-bank") }}',
                    data: formData,
                    success: function (response) {
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
                    error: function (xhr, textStatus, errorThrown) {
                        buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');
                        Swal.fire({ icon: 'error', title: 'Error', text: 'AJAX request failed: ' + textStatus + ', ' + errorThrown });
                    }

                });
            } else {
                Swal.fire({ icon: 'error', title: 'Validation Error', text: 'Please fill in all required fields.' });
            }
        });

        // Event listener for delete button
        $('#example').on('click', '.delete-btn', function(e) {
            var ids = $(this).data('id');
            var rol = $(this).data('rol');
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
                        url: '{{ route("distroy-bank") }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ids
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

        // Event listener for edit button
        $('#example').on('click', '.edit-btn', function() {
            var id = $(this).data('id');
            var bank = $(this).data('bank');
            var init = $(this).data('init');
            var loc = $(this).data('loc');
            var email = $(this).data('email');
            var phone = $(this).data('phone');
            var tel = $(this).data('tel');
            var typ = $(this).data('typ');
            var status = $(this).data('status');

            $('#modal-title').text('About to modify this record ');
            $('#bank').val(bank);
            $('#init').val(init);
            $('#address').val(loc);
            $('#phone').val(phone);
            $('#email').val(email);
            $('#types').val(typ);
            $('#tel').val(tel);
            $('#gottenid').val(id);
            $('#stat').val(status);
            $('#state-view').show();
            $('#save-data').hide();
            $('#edit-data').show();
            $('#my-modal').modal('show');

        });

        //Event to listen to the edit  
        $('#edit-data').click(function () {
            var formData = $('#my-form').serializeArray();
            
            if (formData.length > 0) {
                console.log('Form Data:', formData);

                var buttonElement = $(this);
                buttonElement.html('<i class="fa fa-spinner fa-spin"></i> Please wait... ').attr('disabled', true);

                $.ajax({
                    type: 'POST',
                    url: '{{ route("update-bank") }}',
                    data: formData,
                    success: function (response) {
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
                    error: function (xhr, textStatus, errorThrown) {
                        buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');
                        Swal.fire({ icon: 'error', title: 'Error', text: 'AJAX request failed: ' + textStatus + ', ' + errorThrown });
                    }

                });
            } else {
                Swal.fire({ icon: 'error', title: 'Validation Error', text: 'Please fill in all required fields.' });
            }
        });


    });
</script>

@endsection
