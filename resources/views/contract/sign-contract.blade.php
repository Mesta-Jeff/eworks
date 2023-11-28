

@extends('layouts.main_layout')

@section('title', 'Signing Contract')


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
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#home-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                <i class="mdi mdi-gamepad-circle d-md-none d-block"></i>
                                <span class="d-none d-md-block" id="pending-count">Available List</span>
                            </a>
                        </li>
                    </ul>
                    
                    <div class="tab-content">
                        <div class="tab-pane show active" id="home-b1">
                            <div class="table-responsive">
                                <table id="pending-table" class="table align-middle table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Img</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Bank</th>
                                            <th>Account Number</th>
                                            <th>SSNIT</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Role</th>
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
    </div>
</div>


<div class="modal fade" id="batch-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="batch-title">..</h4>
            </div>
            
            <form id="bulk-form" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="col-md-12">
                        <input type="hidden" name="worker_id" id="worker_id">
                        <div class="col-md-12 row mb-2">
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Contract Start</label>
                                <input type="date" class="form-control" id="contract_starts" name="contract_starts" required>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Contract Ends</label>
                                <input type="date" class="form-control" id="contract_ends" name="contract_ends" required>
                            </div>
                        </div>
                        <div class="col-md-12 row mb-2">
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Designation</label>
                                <select id="designation" name="designation" class="form-control form-select-sm">
                                    <option value="" selected disabled>---- Select Option ----</option>
                                    <option value="Factory Hand">Factory Hand</option>
                                    <option value="Office Assistant">Office Assistant</option>
                                    <option value="Security">Security</option>
                                    <option value="Management">Management</option>
                                    <option value="Canteen">Canteen</option>
                                    <option value="Hospital">Hospital</option>
                                    <option value="Technical">Technical</option>
                                    <option value="Transport">Transport</option>
                                    <option value="Treasuring">Treasuring</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Contract Type</label>
                                <select id="contract_type" name="contract_type" class="form-control form-select-sm">
                                    <option value="" selected disabled>---- Select Option ----</option>
                                    <option value="Weeks">Weeks</option>
                                    <option value="Months">Months</option>
                                    <option value="Years">Years</option>
                                    <option value="Days">Days</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 row mb-2">
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Select Group</label>
                                <select id="groups" name="groups" class="form-control form-select-sm">
                                    <option value="" selected disabled>---- Select Option ----</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Select Role</label>
                                <select id="roles" name="roles" class="form-control form-select-sm">
                                    <option value="" selected disabled>---- Select Option ----</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success btn-sm" id="send-data">Proceed</button>
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

        var currentDate = new Date();
        var minExpiryDate = currentDate.getFullYear() + '-' + 
        ('0' + (currentDate.getMonth() + 1)).slice(-2) + '-' +'01';
        $('#contract_starts, #contract_ends').attr('min', minExpiryDate);

        //GETTING GROUPS
        $.ajax({
            url: '{{ route("fetch-group") }}',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                let countrySelect = $('#groups');

                countrySelect.empty();
                countrySelect.append($('<option>', {
                    value: '',
                    text: '--- Select an Option ---',
                    selected: 'selected',
                    disabled: 'disabled'
                }));

                $.each(data.groups, function (key, value) {
                    countrySelect.append($('<option>', {
                        value: value.id,
                        text: value.name 
                    }));
                });
            },
            error: function (xhr, textStatus, errorThrown) {
                console.error("AJAX request failed: " + textStatus + ", " + errorThrown);
            }
        });

        //GETTING ROLES
        $.ajax({
            url: '{{ route("fetch-role") }}',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                let countrySelect = $('#roles');

                countrySelect.empty();
                countrySelect.append($('<option>', {
                    value: '',
                    text: '--- Select an Option ---',
                    selected: 'selected',
                    disabled: 'disabled'
                }));

                $.each(data.roles, function (key, value) {
                    countrySelect.append($('<option>', {
                        value: value.id,
                        text: value.name.toUpperCase()
                    }));
                });
            },
            error: function (xhr, textStatus, errorThrown) {
                console.error("AJAX request failed: " + textStatus + ", " + errorThrown);
            }
        });


        //PENDING CASUALS
        dataTable = $('#pending-table').DataTable({
            ajax: {
                url: '{{ route("pending-casual") }}',
                dataSrc: 'pendingCasuals'
            },
            columns: [
                {
                    data: null,
                    className: 'control',
                    orderable: false,
                    defaultContent: '',
                },
                {
                    data: 'imgBase64',
                    render: function(data) {
                        return '<img class="gallery-img rounded-circle" src="data:image/jpeg;base64,' + data + '" width="50" height="50" />';
                    }
                },
                { data: 'first_name' },
                { data: 'last_name' },
                { data: 'bank' },
                { data: 'account_number' },
                { data: 'ssnit' },
                { data: 'phone' },
                { data: 'email' },
                { data: 'role' },
                {
                    data: null,
                    render: function(data, type, row) {
                        if (row.imgBase64 !== null) {
                            return '<button class="btn btn-success btn-sm edit-btn mx-2" data-id="' + data.id + '" data-names="' + data.first_name + " " + data.last_name + '" ><i class="mdi mdi-pen-plus mx-1"></i>Issue Contract</button>';
                        } else {
                            return '';
                        }
                    }
                }
                
            ],
            responsive: {
                details: {
                    type: 'column',
                    target: 'tr',
                },
            },
            "drawCallback": function(settings) {
                counter = 0;
            },
            "autoWidth": false,
            "scrollX": false,
            "scrollCollapse": true
        });


        $('#pending-table').on('click', '.edit-btn', function(e) {
            var ids = $(this).data('id');
            var rol = $(this).data('names');
            var message = 'Are you sure you want to sign a contract with <strong>' + rol + '</strong> ...?';
            Swal.fire({
                title: 'Confirm Your Action',
                html: message,
                icon: 'info',
                showCancelButton: true,
                confirmButtonText: 'Yes, Continue',
                cancelButtonText: 'No, cancel',
                cancelButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#batch-title').text('Signing Contract With ' + rol);
                    $('#worker_id').val(ids);
                    $('#batch-modal').modal('show');
                } else {
                    
                }
            });
        });

 
        //SENDING DATA SINGLE
        $('#send-data').click(function (e) {
            e.preventDefault();

            var buttonElement = $(this);
            buttonElement.html('<i class="fa fa-spinner fa-spin"></i> Please wait... ').attr('disabled', true);

            var formData = new FormData($('#bulk-form')[0]);
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var headers = {
                'X-CSRF-TOKEN': csrfToken
            };

            $.ajax({
                url: '{{ route("issue-new-contract") }}',
                type: 'POST',
                data: formData,
                headers: headers,
                processData: false,
                contentType: false,
                success: function (response) {
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');
                    $('#bulk-form')[0].reset();
                    $('#batch-modal').modal('hide');
                    console.log(response);
                    dataTable.ajax.reload();

                    if (response.status === 'success') {
                        Swal.fire({ icon: 'success', title: 'Good Job', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', title: 'Error', text: response.message });
                    }
                },
                error: function (xhr, status, error) {
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');

                    Swal.fire({ icon: 'error', title: 'Error', text: 'AJAX request failed: ' + textStatus + ', ' + errorThrown });
                }
            });
        });

    });
    
</script>

@endsection



      
