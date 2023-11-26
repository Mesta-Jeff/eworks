

@extends('layouts.main_layout')

@section('title', 'Wages')

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
                        <table id="example" class="table align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>Cas. Daily</th>
                                    <th>Cas. Holiday</th>
                                    <th>Con. Daily</th>
                                    <th>Con. Holiday</th>
                                    <th>Perm. Daily</th>
                                    <th>Perm. Holiday</th>
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
                        <div class="col-md-12 mb-2">
                            <label for="">Casual Daily</label>
                            <input type="text" id="c-daily" maxlength="7" class="form-control" placeholder="Type here.." onkeydown="formatAsMoney(event)">
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="">Casual Holiday</label>
                            <input type="text" id="c-holiday" maxlength="7" class="form-control" placeholder="Type here.." onkeydown="formatAsMoney(event)">
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="">Contract Daily</label>
                            <input type="text" id="co-daily" maxlength="7" class="form-control" placeholder="Type here.." onkeydown="formatAsMoney(event)">
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="">Contrct Holiday</label>
                            <input type="text" id="co-holiday"  class="form-control" placeholder="Type here.." onkeydown="formatAsMoney(event)">
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="">Permanent Daily</label>
                            <input type="text" id="p-daily" maxlength="7" class="form-control" placeholder="Type here.." onkeydown="formatAsMoney(event)">
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="">Permanent Holiday</label>
                            <input type="text" id="p-holiday" maxlength="7" class="form-control" placeholder="Type here.." onkeydown="formatAsMoney(event)">
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
    
    function formatAsMoney(event) {
        var inputElement = event.target;
        var inputValue = event.key;
        if (!/[\d.]/.test(inputValue) && event.key !== "Backspace") {
            event.preventDefault();
        }
        if (inputValue === '.' && inputElement.value.includes('.')) {
            event.preventDefault();
        }
    }



    $(document).ready(function ()
    {
        var dataTable = "";

        //calling the model to add new
        $('#btnNew').click(function() {
            $('#my-form')[0].reset();
            $('#modal-title').text('Add New Records');
            $('#my-modal').modal('show');
            $('#edit-data').hide();
            $('#save-data').show();
        });

        // Event listener for edit button
        $('#example').on('click', '.edit-btn', function() {
            var id = $(this).data('id');
            var casualDaily = $(this).data('casual-daily');
            var casualHoliday = $(this).data('casual-holiday');
            var contractDaily = $(this).data('contract-daily');
            var contractHoliday = $(this).data('contract-holiday');
            var permanentDaily = $(this).data('permanent-daily');
            var permanentHoliday = $(this).data('permanent-holiday');

            // Set the data attributes to the various inputs
            $('#gottenid').val(id);
            $('#c-daily').val(casualDaily);
            $('#c-holiday').val(casualHoliday);
            $('#co-daily').val(contractDaily);
            $('#co-holiday').val(contractHoliday);
            $('#p-daily').val(permanentDaily);
            $('#p-holiday').val(permanentHoliday);

            $('#modal-title').text('About to modify this record');
            $('#save-data').hide();
            $('#edit-data').show();
            $('#my-modal').modal('show');
        });


        //Getting the table ready
        dataTable = $('#example').DataTable({
            ajax: {
                url: '{{ route("set-wage") }}',
                dataSrc: 'wages'
            },
            columns: [
                
                { data: 'casual_daily' },
                { data: 'casual_holiday' },
                { data: 'contract_daily' },
                { data: 'contract_holiday' },
                { data: 'permanent_daily' },
                { data: 'permanent_holiday' },
                {
                    data: null,
                    render: function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm edit-btn mx-2" data-id="' + data.id + '" data-casual-daily="' + data.casual_daily + '" data-casual-holiday="' + data.casual_holiday + '" data-contract-daily="' + data.contract_daily + '" data-contract-holiday="' + data.contract_holiday + '" data-permanent-daily="' + data.permanent_daily + '" data-permanent-holiday="' + data.permanent_holiday + '"><i class="mdi mdi-pen-plus mx-1"></i>Edit</button>' +
                            '<button class="btn btn-danger btn-sm delete-btn" data-id="' + data.id + '"><i class="mdi mdi-delete mx-1"></i>Remove</button>';
                    }
                }
            ]
        });


        // Save Data Button Click Event
        $('#save-data').on('click', function() {
            
            var cDaily = $('#c-daily').val();
            var cHoliday = $('#c-holiday').val();
            var coDaily = $('#co-daily').val();
            var coHoliday = $('#co-holiday').val();
            var pDaily = $('#p-daily').val();
            var pHoliday = $('#p-holiday').val();

            // Check if any of the fields are empty
            if (!cDaily || !cHoliday || !coDaily || !coHoliday || !pDaily || !pHoliday) {
                Swal.fire({ icon: 'error', title: 'Error', text: 'Please fill in all fields.' });
                return;
            }

            var buttonElement = $(this);
            buttonElement.html('<i class="fa fa-spinner fa-spin"></i> Please wait... ').attr('disabled', true);

            var formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('c_daily', cDaily);
            formData.append('c_holiday', cHoliday);
            formData.append('co_daily', coDaily);
            formData.append('co_holiday', coHoliday);
            formData.append('p_daily', pDaily);
            formData.append('p_holiday', pHoliday);
            

            $.ajax({
                type: 'POST',
                url: '{{ route("add-wage") }}',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log('Success Response:', response);
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');
                    $('#my-form')[0].reset();
                    $('#my-modal').modal('hide');

                    dataTable.ajax.reload();

                    if (response.status === 'success') {
                        Swal.fire({ icon: 'success', title: 'Success', text: response.message });
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
            var cDaily = $('#c-daily').val();
            var cHoliday = $('#c-holiday').val();
            var coDaily = $('#co-daily').val();
            var coHoliday = $('#co-holiday').val();
            var pDaily = $('#p-daily').val();
            var pHoliday = $('#p-holiday').val();
            var id = $('#gottenid').val();

            // Check if any of the fields are empty
            if (!cDaily || !cHoliday || !coDaily || !coHoliday || !pDaily || !pHoliday) {
                Swal.fire({ icon: 'error', title: 'Error', text: 'Please fill in all fields.' });
                return;
            }

            var buttonElement = $(this);
            buttonElement.html('<i class="fa fa-spinner fa-spin"></i> Please wait... ').attr('disabled', true);

            var formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('c_daily', cDaily);
            formData.append('c_holiday', cHoliday);
            formData.append('co_daily', coDaily);
            formData.append('co_holiday', coHoliday);
            formData.append('p_daily', pDaily);
            formData.append('p_holiday', pHoliday);
            formData.append('id', id);

            $.ajax({
                type: 'POST',
                url: '{{ route("update-wage") }}',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log('Success Response:', response);
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');
                    $('#my-form')[0].reset();
                    $('#my-modal').modal('hide');

                    dataTable.ajax.reload();

                    if (response.status === 'success') {
                        Swal.fire({ icon: 'success', title: 'Success', text: response.message });
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

        // Event listener for delete button
        $('#example').on('click', '.delete-btn', function(e) {
            var ids = $(this).data('id');
            var message = 'Are you sure you want to delete this record? <strong>' + ids + '</strong>';
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
                        url: '{{ route("distroy-wage") }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ids
                        },
                        success: function(response) {
                            console.log('Success Response:', response);
                            dataTable.ajax.reload();
                            if (response.status === "success") {
                                Swal.fire({ icon: 'success', title: 'Success', text: response.message,});
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

    });
</script>

@endsection
