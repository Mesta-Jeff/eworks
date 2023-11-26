<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-5">
                            <button type="button" class="btn btn-outline-success mb-2 btn-sm rounded-2" id="btnNew">Add New Record</button>
                        </div>
                    </div>
                    
                    <div id="div1" class="row" style="display: none;">
                        <form id="my-form" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" id="gottenid" />
                                <div class="row g-9">
                                    <div class="col-md-12 fv-row">
                                        <label class="form-label" for="ides">The country name</label>
                                        <input type="text" id="country" class="form-control" placeholder="Enter country name here.." onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" onkeydown="return /^([a-zA-Z]+[\s]*)*$/i.test(event.target.value + event.key)">
                                        {{-- <select id="role" class="form-select form-select-sm mb-2">
                                            <option value="" selected disabled>---- Select Option ----</option>
                                            <option value="Casual-Worker">Casual Worker</option>
                                            <option value="Contract-Worker">Contract Worker</option>
                                            <option value="Permanent-Worker">Permanent Worker</option>
                                            <option value="Office-Assistant">Office Assistant</option>
                                        </select> --}}
                                    </div>
                                    <div class="form-outline col-md-12 fv-row mb-2">
                                        <label class="form-label" for="ides">The country code</label>
                                        <input type="text" id="code" class="form-control" placeholder="Enter country code" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" maxlength="4">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-danger btn-sm" >Clear</button>
                                <button type="button" class="btn btn-info btn-sm" id="edit-data">Proceed</button>
                                <button type="button" class="btn btn-success btn-sm" id="save-data">Proceed</button>
                            </div>
                        </form>
                    </div>
                    

                    <div id="div2" class="table-responsive" style="max-height: 350px; overflow-y: auto;">
                        <table id="example" class="table align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Country</th>
                                    <th>Country Code</th>
                                    <th>Date Added</th>
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


<script src="{{ asset('root/dek/bower_components/jquery/js/jquery.min.js') }}"></script>

<script>
    $(document).ready(function ()
    {
        var dataTable = "";
        var counter = 0;

        $('#btnNew').click(function()
        {
            $('#div1').show();
            $('#state-view').hide();
            $('#edit-data').hide();
            $('#save-data').show();
        })

        //Getting the table ready
        dataTable = $('#example').DataTable({
            ajax: {
                url: '{{ route("view-country") }}',
                dataSrc: 'countries'
            },
            columns: [
                {
                    data: null,
                    render: function(data, type, row) {
                        return ++counter;
                    }
                },
                { data: 'name' },
                { data: 'code' },
                { data: 'created_at' },
                {
                    data: null,
                    render: function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm edit-btn mx-2" data-id="' + data.id + '" data-country="' + data.name + '" data-code="' + data.code + '"><i class="mdi mdi-pen-plus mx-1"></i>Edit</button>' +
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
            var countrys = $('#country').val();
            var des = $('#code').val();

            // Check if fields are not empty
            if (!countrys || !des) {
                Swal.fire({ icon: 'error', title: 'Error', text: 'Please fill in all fields.' });
                return;
            }

            var buttonElement = $(this);
            buttonElement.html('<i class="fa fa-spinner fa-spin"></i> Please wait... ').attr('disabled', true);

            var formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('name', countrys.toUpperCase());
            formData.append('code', des);

            $.ajax({
                type: 'POST',
                url: '{{ route("add-country") }}',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log('Success Response:', response);
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');

                    $('#div2').show();
                    $('#div1').hide();

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

        // Event listener for edit button
        $('#example').on('click', '.edit-btn', function() {
            var id = $(this).data('id');
            var country = $(this).data('country');
            var code = $(this).data('code');

            $('#country').val(country);
            $('#gottenid').val(id);
            $('#code').val(code);
            $('#state-view').show();
            $('#save-data').hide();
            $('#edit-data').show();

            $('#div1').show();

        });

        // Edit Data Button Click Event
        $('#edit-data').on('click', function() {
            var groups = $('#country').val();
            var des = $('#code').val();
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
                url: '{{ route("update-country") }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    name: groups,
                    code: des,
                    id: gottenid
                },
                success: function(response) {
                    console.log('Success Response:', response);
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');
                    
                    $('#div2').show();
                    $('#div1').hide();

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
                        url: '{{ route("distroy-country") }}',
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
                                icon: 'error', title: 'Error',
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