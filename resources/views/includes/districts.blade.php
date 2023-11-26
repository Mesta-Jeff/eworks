<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-5">
                            <button type="button" class="btn btn-outline-success mb-2 btn-sm rounded-2" id="btnNew2">Add New Record</button>
                        </div>
                    </div>
                    
                    <div id="div5" class="row" style="display: none;">
                        <form id="my-form" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" id="gottenid" />
                                <div class="row g-9">
                                    <div class="col-md-12 fv-row">
                                        <label class="form-label" for="ides">Affiliated Country</label>
                                        <select id="country1" class="form-select form-select-sm mb-2"></select>
                                    </div>
                                    <div class="col-md-12 fv-row">
                                        <label class="form-label" for="ides">Affiliated Region</label>
                                        <select id="region1" class="form-select form-select-sm mb-2"></select>
                                    </div>
                                    <div class="form-outline col-md-12 fv-row mb-2">
                                        <label class="form-label" for="ides">The district Name</label>
                                        <input type="text" id="district" class="form-control" placeholder="Enter district" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-danger btn-sm" >Clear</button>
                                <button type="button" class="btn btn-info btn-sm" id="edit-data2">Proceed</button>
                                <button type="button" class="btn btn-success btn-sm" id="save-data2">Proceed</button>
                            </div>
                        </form>
                    </div>
                    

                    <div id="div6" class="table-responsive" style="max-height: 350px; overflow-y: auto;">
                        <table id="example2" class="table align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>District</th>
                                    <th>Region</th>
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
                var countrySelect = $('#country1');

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

        // Function to populate regions based on the selected country
        function populateRegions(countryId) {
            $.ajax({
                url: '{{ route("fetch-region") }}',
                type: 'GET',
                data: { country_id: countryId },
                dataType: 'json',
                success: function (data) {
                    $('#region1').empty();
                    $('#region1').append($('<option>', {
                        value: '',
                        text: '--- Select an option ----',
                        selected: 'selected',
                        disabled: 'disabled'
                    }));
                    $.each(data.regions, function (key, value) {
                        $('#region1').append($('<option>', {
                            value: value.id,
                            text: value.name.toUpperCase()
                        }));
                    });
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.error("AJAX request failed: " + textStatus + ", " + errorThrown);
                }
            });
        }

        // Add an event listener for the change event on the country select dropdown
        $('#country1').on('change', function () {
            var selectedCountryId = $(this).val();
            if (selectedCountryId) {
                populateRegions(selectedCountryId);
            }
        });


        $('#btnNew2').click(function()
        {
            $('#div5').show();
            $('#state-view').hide();
            $('#edit-data2').hide();
            $('#save-data2').show();
        })

        //Getting the table ready
        dataTable = $('#example2').DataTable({
            ajax: {
                url: '{{ route("view-district") }}',
                dataSrc: 'districts'
            },
            columns: [
                {
                    data: null,
                    render: function(data, type, row) {
                        return ++counter;
                    }
                },
                { data: 'name' },
                { data: 'region' },
                {
                    data: null,
                    render: function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm edit-btn mx-2" data-id="' + data.id + '" data-district="' + data.name + '" data-region1="' + data.region_id + '"><i class="mdi mdi-pen-plus mx-1"></i>Edit</button>' +
                            '<button class="btn btn-danger btn-sm delete-btn" data-id="' + data.id + '" data-title="' + data.name + '"><i class="mdi mdi-delete mx-1"></i>Remove</button>';
                    }
                }
            ],
            "drawCallback": function( settings ) {
                counter = 0;
            }
        });

        // Save Data Button Click Event
        $('#save-data2').on('click', function() {
            var districts = $('#district').val();
            var des = $('#region1').val();

            // Check if fields are not empty
            if (!districts || !des) {
                Swal.fire({ icon: 'error', title: 'Error', text: 'Please fill in all fields.' });
                return;
            }

            var buttonElement = $(this);
            buttonElement.html('<i class="fa fa-spinner fa-spin"></i> Please wait... ').attr('disabled', true);

            var formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('name', districts);
            formData.append('region', des);

            $.ajax({
                type: 'POST',
                url: '{{ route("add-district") }}',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log('Success Response:', response);
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');

                    $('#div6').show();
                    $('#div5').hide();

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
        $('#example2').on('click', '.edit-btn', function() {
            var id = $(this).data('id');
            var district = $(this).data('district');
            var region1 = $(this).data('region1');

            $('#district').val(district);
            $('#gottenid').val(id);
            $('#region1').val(region1);
            $('#state-view').show();
            $('#save-data2').hide();
            $('#edit-data2').show();

            $('#div5').show();

        });

        // Edit Data Button Click Event
        $('#edit-data2').on('click', function() {
            var groups = $('#district').val();
            var des = $('#region1').val();
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
                url: '{{ route("update-district") }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    name: groups,
                    region: des,
                    id: gottenid
                },
                success: function(response) {
                    console.log('Success Response:', response);
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');
                    
                    $('#div6').show();
                    $('#div5').hide();

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
        $('#example2').on('click', '.delete-btn', function(e) {
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
                        url: '{{ route("distroy-district") }}',
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