<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-5">
                            <button type="button" class="btn btn-outline-success mb-2 btn-sm rounded-2" id="btnNew1">Add New Record</button>
                        </div>
                    </div>
                    
                    <div id="div3" class="row" style="display: none;">
                        <form id="my-form" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" id="gottenid" />
                                <div class="row g-9">
                                    <div class="col-md-12 fv-row">
                                        <label class="form-label" for="ides">Affiliated Country</label>
                                        <select id="code1" class="form-select form-select-sm mb-2"></select>
                                    </div>
                                    <div class="form-outline col-md-12 fv-row mb-2">
                                        <label class="form-label" for="ides">The Region Name</label>
                                        <input type="text" id="region" class="form-control" placeholder="Enter region" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-danger btn-sm" >Clear</button>
                                <button type="button" class="btn btn-info btn-sm" id="edit-data1">Proceed</button>
                                <button type="button" class="btn btn-success btn-sm" id="save-data1">Proceed</button>
                            </div>
                        </form>
                    </div>
                    

                    <div id="div4" class="table-responsive" style="max-height: 350px; overflow-y: auto;">
                        <table id="example1" class="table align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Region</th>
                                    <th>Country</th>
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

        $.ajax({
            url: '{{ route("fetch-country") }}',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                var countrySelect = $('#code1');

                countrySelect.empty();
                countrySelect.append($('<option>', {
                    value: '',
                    text: 'Select Country'
                }));

                $.each(data.countries, function (key, value) {
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


        $('#btnNew1').click(function()
        {
            $('#div3').show();
            $('#state-view').hide();
            $('#edit-data1').hide();
            $('#save-data1').show();
        })

        //Getting the table ready
        dataTable = $('#example1').DataTable({
            ajax: {
                url: '{{ route("view-region") }}',
                dataSrc: 'regions'
            },
            columns: [
                {
                    data: null,
                    render: function(data, type, row) {
                        return ++counter;
                    }
                },
                { data: 'name' },
                { data: 'country' },
                {
                    data: null,
                    render: function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm edit-btn mx-2" data-id="' + data.id + '" data-region="' + data.name + '" data-code1="' + data.country_id + '"><i class="mdi mdi-pen-plus mx-1"></i>Edit</button>' +
                            '<button class="btn btn-danger btn-sm delete-btn" data-id="' + data.id + '" data-title="' + data.name + '"><i class="mdi mdi-delete mx-1"></i>Remove</button>';
                    }
                }
            ],
            "drawCallback": function( settings ) {
                counter = 0;
            }
        });

        // Save Data Button Click Event
        $('#save-data1').on('click', function() {
            var regions = $('#region').val();
            var des = $('#code1').val();

            // Check if fields are not empty
            if (!regions || !des) {
                Swal.fire({ icon: 'error', title: 'Error', text: 'Please fill in all fields.' });
                return;
            }

            var buttonElement = $(this);
            buttonElement.html('<i class="fa fa-spinner fa-spin"></i> Please wait... ').attr('disabled', true);

            var formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('name', regions);
            formData.append('code1', des);

            $.ajax({
                type: 'POST',
                url: '{{ route("add-region") }}',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log('Success Response:', response);
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');

                    $('#div4').show();
                    $('#div3').hide();

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
        $('#example1').on('click', '.edit-btn', function() {
            var id = $(this).data('id');
            var region = $(this).data('region');
            var code1 = $(this).data('code1');

            $('#region').val(region);
            $('#gottenid').val(id);
            $('#code1').val(code1);
            $('#state-view').show();
            $('#save-data1').hide();
            $('#edit-data1').show();

            $('#div3').show();

        });

        // Edit Data Button Click Event
        $('#edit-data1').on('click', function() {
            var groups = $('#region').val();
            var des = $('#code1').val();
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
                url: '{{ route("update-region") }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    name: groups,
                    code1: des,
                    id: gottenid
                },
                success: function(response) {
                    console.log('Success Response:', response);
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');
                    
                    $('#div4').show();
                    $('#div3').hide();

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
        $('#example1').on('click', '.delete-btn', function(e) {
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
                        url: '{{ route("distroy-region") }}',
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