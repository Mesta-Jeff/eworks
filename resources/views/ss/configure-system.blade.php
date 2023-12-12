

@extends('layouts.main_layout')

@section('title', 'System Configuration')

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

                    <div class="row mb-2" style="margin-top: 100px;">
                        <p class="mb-1 fw-bold text-muted">This is the system configuration</p>
                        <p class="text-muted font-14">
                            whatever you want to do, have been listed in the dropdown list, choose your choice and the system will execute the action...
                        </p>

                        <select id="modal-action" class="select2 form-control mb-2" data-toggle="select2">
                            <option value="" selected>Choose...</option>
                            <option value="countries">View Countries</option>
                            <option value="regions">View Regions</option>
                            <option value="districts">View Districts</option>
                            <option value="towns">View Towns</option>
                            <option value="bank">Set Bank</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="my-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">..</h4>
            </div>
            <div class="modal-body" id="modal-body-content">
                @foreach(['countries', 'regions', 'districts', 'towns'] as $include)
                    <div id="{{ $include }}" style="display: none;">
                        @include("includes.$include")
                    </div>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary btn-sm">Proceed</button> --}}
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('root/dek/bower_components/jquery/js/jquery.min.js') }}"></script>

<script>
    $(document).ready(function () {
        $('#modal-action').val('');

        function showModalContent(contentId) {
            $('#modal-body-content > div').hide();
            $('#' + contentId).show();
            $('#modal-title').text('CONFIGURING ' + contentId.toUpperCase());
            $('#my-modal').modal('show');
        }

        $('#modal-action').on('change', function () {
            var selectedValue = $(this).val();
            if (selectedValue === 'bank') {
                window.location.href = '{{ route("set-bank") }}';
            } else {
                showModalContent(selectedValue);
            }
        });


    });
</script>


@endsection
