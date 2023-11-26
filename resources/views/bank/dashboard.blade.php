@extends('layouts.bank_layout')

@section('title', 'Bankers Home Page')

@section('content')

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a>eWork</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                    <h4 class="page-title">@yield('title')</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-two widget-two-custom">
                    <div class="media">
                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                            <i class="mdi mdi-currency-usd avatar-title font-30 text-white"></i>
                        </div>

                        <div class="wigdet-two-content media-body">
                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Revenue
                            </p>
                            <h3 class="font-weight-medium my-2">$ <span data-plugin="counterup">65,841</span></h3>
                            <p class="m-0">Jan - Apr 2019</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-two widget-two-custom ">
                    <div class="media">
                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                            <i class="mdi mdi-account-multiple avatar-title font-30 text-white"></i>
                        </div>

                        <div class="wigdet-two-content media-body">
                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Unique
                                Visitors</p>
                            <h3 class="font-weight-medium my-2"> <span data-plugin="counterup">26,521</span></h3>
                            <p class="m-0">Jan - Apr 2019</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-two widget-two-custom ">
                    <div class="media">
                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                            <i class="mdi mdi-crown avatar-title font-30 text-white"></i>
                        </div>

                        <div class="wigdet-two-content media-body">
                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Number of
                                Transactions</p>
                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">7,842</span></h3>
                            <p class="m-0">Jan - Apr 2019</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-sm-6">
                <div class="card-box widget-box-two widget-two-custom ">
                    <div class="media">
                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                            <i class="mdi mdi-auto-fix  avatar-title font-30 text-white"></i>
                        </div>

                        <div class="wigdet-two-content media-body">
                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Conversation
                                Rate</p>
                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">2.07</span>%</h3>
                            <p class="m-0">Jan - Apr 2019</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card-box">
                    <h4 class="header-title mb-4">Revenue Comparison</h4>

                    <div class="text-center">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 25643
                            <small>USD</small></h3>
                    </div>

                    <div class="chart-container" dir="ltr">
                        <div class="" style="height:280px" id="platform_type_dates_donut"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card-box">
                    <h4 class="header-title mb-4">Visitors Overview</h4>

                    <div class="text-center">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 5623
                            <small>USD</small></h3>
                    </div>

                    <div class="chart-container" dir="ltr">
                        <div class="" style="height:280px" id="user_type_bar"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card-box">
                    <h4 class="header-title mb-4">Goal Completion</h4>

                    <div class="text-center">
                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 12548
                            <small>USD</small></h3>
                    </div>

                    <div class="chart-container" dir="ltr">
                        <div class="chart has-fixed-height" style="height:280px" id="page_views_today"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="card-box">
                    <h4 class="header-title">Recent Candidates</h4>
                    <p class="sub-header"> Your awesome text goes here. </p>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">

                            <thead>
                                <tr>
                                    <th>
                                        <div class="btn-group dropdown">
                                            <button type="button"
                                                class="btn btn-light btn-xs dropdown-toggle waves-effect waves-light"
                                                data-toggle="dropdown" aria-expanded="false"> <i
                                                    class="mdi mdi-chevron-down"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="index.html#">Dropdown link</a>
                                                <a class="dropdown-item" href="index.html#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Job Timing</th>
                                    <th>Salary</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ asset('root/minox/assets/images/users/avatar-2.jpg') }}"
                                            alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                    </td>

                                    <td>
                                        <h5 class="m-0 font-weight-medium">Tomaslau</h5>
                                    </td>

                                    <td>
                                        <i class="mdi mdi-map-marker text-primary"></i> New York
                                    </td>

                                    <td>
                                        <i class="mdi mdi-clock-outline text-success"></i> Full Time
                                    </td>

                                    <td>
                                        <i class="mdi mdi-currency-usd text-warning"></i> 3265
                                    </td>

                                    <td>
                                        <a href="index.html#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                        <a href="index.html#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- end col -->

            <div class="col-xl-3 col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-4">Total Unique Visitors</h4>

                    <div class="widget-chart text-center" dir="ltr">

                        <div id="donut-chart" style="height: 280px;"></div>

                        <div class="row text-center mt-4">
                            <div class="col-6">
                                <h3 data-plugin="counterup">1,507</h3>
                                <p class="text-muted mb-0">Visitors Male</p>
                            </div>
                            <div class="col-6">
                                <h3 data-plugin="counterup">854</h3>
                                <p class="text-muted mb-1">Visitors Female</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-4">Number of Transactions</h4>

                    <div class="widget-chart text-center" dir="ltr">

                        <div id="pie-chart" style="height: 280px;"></div>

                        <div class="row text-center mt-4">
                            <div class="col-6">
                                <h3 data-plugin="counterup">2,854</h3>
                                <p class="text-muted mb-0">Payment Done</p>
                            </div>
                            <div class="col-6">
                                <h3 data-plugin="counterup">22</h3>
                                <p class="text-muted mb-1">Payment Due</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
