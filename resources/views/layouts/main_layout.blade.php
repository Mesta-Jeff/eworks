<!DOCTYPE html>
<html lang="en" data-layout-mode="detached">

<head >
    <meta charset="utf-8" />
    <title>@yield('title') | eWork Environtment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="SkaiTheme" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('root/hyp/assets/images/favicon.ico') }}">


    <!-- Theme Config Js -->
    <link href="{{ asset('root/hyp/assets/vendor/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('root/hyp/assets/js/hyper-config.js') }}"></script>

    {{-- OTHERS THEMES --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('root/dek/assets/icon/feather/css/feather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('root/dek/assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('root/dek/assets/icon/icofont/css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('root/dek/assets/icon/font-awesome/css/font-awesome.min.css') }}">

    

    <link href="{{ asset('root/hyp/assets/css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ asset('root/hyp/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    

    <link rel="stylesheet" type="text/css" href="{{ asset('root/dek/assets/css/component.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('root/dek/bower_components/sweetalert/css/sweetalert.css') }}">

    <!-- Datatable css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
	<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />
    


    @yield('additional-css')


</head>

<body>
    <!-- Pre-loader -->
    <div id="preloader">
        <div id="status">
            <div class="bouncing-loader">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- End Preloader-->

    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">

                <div class="d-flex align-items-center gap-lg-2 gap-1">

                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="" class="logo-light">
                            <span class="logo-lg">
                                <img src="{{ asset('root/hyp/assets/images/logo-sm.png') }}" alt="logo">
                                <strong style="font-size: 22px; font-weight: bold; color: white; font-family: 'Segoe UI';">e</strong><span class="logo-lg-text-dark" style="font-family: 'Segoe UI'; color: white;">Work</span>
                            </span>
                            <span class="logo-sm">
                                <img src="{{ asset('root/hyp/assets/images/logo-sm.png') }}" alt="small logo">
                            </span>
                        </a>



                        <!-- Logo Dark -->
                        <a href="" class="logo-dark">
                            <span class="logo-lg">
                                <img src="{{ asset('root/hyp/assets/images/logo-dark-sm.png') }}" alt="dark logo">
                                <strong style="font-size: 22px; font-weight: bold; color: #4C52A3; font-family: 'Segoe UI';">e</strong><span class="logo-lg-text-dark" style="font-family: 'Segoe UI'; color: #4C52A3;">Work</span>
                            </span>
                            <span class="logo-sm">
                                <img src="{{ asset('root/hyp/assets/images/logo-dark-sm.png') }}" alt="small logo">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                </div>

                <ul class="topbar-menu d-flex align-items-center gap-3">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-notification-3-line font-18"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                            <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 font-16 fw-semibold"> Notification</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="px-2" style="max-height: 300px;" data-simplebar>

                                <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>
                                <!-- item-->

                                <a href="javascript:void(0);"
                                    class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Datacorp <small
                                                        class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on
                                                    Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-info">
                                                    <i class="mdi mdi-account-plus"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Admin <small
                                                        class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">New user
                                                    registered</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <div class="text-center">
                                    <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0 font-13"></i>
                                </div>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                                class="dropdown-item text-center text-primary notify-item border-top py-2">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class=" uil-snapchat-ghost font-18"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                            <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 font-16 fw-semibold"> Notification</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="px-2" style="max-height: 300px;" data-simplebar>

                                <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented
                                                    on Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="{{ asset('root/hyp/assets/images/users/avatar-4.jpg') }}"
                                                        class="img-fluid rounded-circle" alt="" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                                <small class="noti-item-subtitle text-muted">Wow ! this admin looks
                                                    good and awesome design</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <div class="text-center">
                                    <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0 font-13"></i>
                                </div>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                                class="dropdown-item text-center text-primary notify-item border-top py-2">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="d-none d-sm-inline-block">
                        <a class="nav-link" data-bs-toggle="offcanvas"
                            href="dashboard-wallet.html#theme-settings-offcanvas">
                            <i class="ri-settings-3-line font-18"></i>
                        </a>
                    </li>

                    <li class="d-none d-sm-inline-block">
                        <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Theme Mode">
                            <i class="ri-moon-line font-18"></i>
                        </div>
                    </li>


                    <li class="d-none d-md-inline-block">
                        <a class="nav-link" href="dashboard-wallet.html" data-toggle="fullscreen">
                            <i class="ri-fullscreen-line font-18"></i>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown"
                            href="dashboard-wallet.html#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="{{ asset('root/hyp/assets/images/users/avatar-1.jpg') }}" alt="user-image"
                                    width="32" class="rounded-circle">
                            </span>
                            <span class="d-lg-flex flex-column gap-1 d-none">
                                <h5 class="my-0">Username here...</h5>
                                <h6 class="my-0 fw-normal">role here...</h6>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>My Account</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="mdi mdi-barcode-scan me-1"></i>
                                <span>My Attendance</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="uil-money-withdraw me-1"></i>
                                <span>My Approve Withdrawal</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="uil-money-withdrawal me-1"></i>
                                <span>My Payslip</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="mdi mdi-ticket me-1"></i>
                                <span>Issue Concern</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="mdi mdi-lock-outline me-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <hr>
                            <a href="javascript:void(0);" class="dropdown-item text-danger">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <section>
                <a href="" class="logo text-center">
                    <span class="logo-lg">
                        <img src="{{ asset('root/hyp/assets/images/logo-sm.png') }}" alt="" height="25">
                        <strong style="font-size: 22px; font-weight: bold; color: white; font-family: 'Segoe UI';">e</strong><span class="logo-lg-text-dark" style="font-family: 'Segoe UI'; color: white;">Work</span>
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('root/hyp/assets/images/logo-sm.png') }}" alt="" height="25">
                    </span>
                </a>

                <!-- Brand Logo Dark -->
                <a href="" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('root/hyp/assets/images/logo-sm.png') }}" alt="" height="25">
                        <strong style="font-size: 22px; font-weight: bold; color: #4C52A3; font-family: 'Segoe UI';">e</strong><span class="logo-lg-text-dark" style="font-family: 'Segoe UI'; color: #4C52A3;">Work</span>
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('root/hyp/assets/images/logo-sm.png') }}" alt="small logo">
                    </span>
                </a>
            </section>

            <!-- Sidebar Hover Menu Toggle Button -->
            <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right"
                title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </div>

            <!-- Full Sidebar Menu Close Button -->
            <div class="button-close-fullsidebar">
                <i class="ri-close-fill align-middle"></i>
            </div>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title" style="margin: -30px 0px -30px 0px"><hr></li>
                    <li class="side-nav-item">
                        <a href="#" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span>Go Home</span>
                        </a>
                    </li>

                    <!-- Middle Nav -->
                    <section>
                        <li class="side-nav-title">hr console</li>
                        <li class="side-nav-item">
                            <a href="#" class="side-nav-link">
                                <i class="uil-folder"></i>
                                <span>My Logs </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="#" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Chat </span>
                            </a>
                        </li>

                        <li class="side-nav-item" id="Full-Accounts">
                            <a data-bs-toggle="collapse" href=".sidebarAccount" aria-expanded="false"
                                aria-controls="sidebarAccount" class="side-nav-link">
                                <i class="mdi mdi-account-key-outline"></i>
                                <span>My Account </span><span class="menu-arrow"></span>
                            </a>
                            <div class="collapse sidebarAccount">
                                <ul class="side-nav-second-level">
                                    <li id="issue-concern"><a href="#">Issue Concern</a></li>
                                    <li id="my-days"><a href="#">My Days</a></li>
                                    <li id="my-attendance"><a href="#">My Attendance</a></li>
                                    <li id="my-payslip"><a href="#">My Payslip</a></li>
                                    <li id="print-payslip"><a href="#">Print Payslip</a></li>
                                    <li id="my-profile"><a href="#">My Profile</a></li>
                                    <li id="approve-withdrawal"><a href="#">Approve Withdrawal</a></li>
                                    <li id="request-new-contract"><a href="#">Request New Contract</a></li>
                                    <li id="contract-statistics"><a href="#">Contract Statistics</a></li>
                                    <li id="request-leave"><a href="#">Request Leave</a></li>
                                    <li id="request-days"><a href="#">Request Days</a></li>
                                    <li id="contract-statistics-2"><a href="#">Contract Statistics</a></li>
                                    <li id="request-promotion"><a href="#">Request Promotion</a></li>
                                    <li id="request-bank-statement"><a href="#">Request Bank Statement</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item" id="Full-Settings">
                            <a data-bs-toggle="collapse" href=".sidebarSystem" aria-expanded="false"
                                aria-controls="sidebarSystem" class="side-nav-link">
                                <i class="uil-cog"></i>
                                <span> System Settings </span><span class="menu-arrow"></span>
                            </a>
                            <div class="collapse sidebarSystem">
                                <ul class="side-nav-second-level">
                                    <li id="view-roles"><a href="{{ route('ss.roles') }}">View Roles</a></li>
                                    <li id="view-permissions"><a href="{{ route('ss.permissions') }}">View Permissions</a></li>
                                    <li id="set-contract"><a href="{{ route('ss.contract') }}">Set Contract</a></li>
                                    <li id="set-payslip"><a href="{{ route('ss.payslip') }}">Set Payslip</a></li>
                                    <li id="set-leave"><a href="{{ route('ss.leave') }}">Set Leave</a></li>
                                    <li id="set-leave-claims"><a href="{{ route('ss.leave-claims') }}">Set Leave Claims</a></li>
                                    <li id="set-wage"><a href="{{ route('set-wage') }}">Set Wage</a></li>
                                    <li id="view-groups"><a href="{{ route('ss.view-groups') }}">View Groups</a></li>
                                    <li id="configure-system"><a href="{{ route('ss.configure-system') }}">Configure System</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item" id="Full-Workers">
                            <a data-bs-toggle="collapse" href=".sidebarUser" aria-expanded="false"
                                aria-controls="sidebarUser" class="side-nav-link">
                                <i class="uil-users-alt"></i>
                                <span> Workers Management </span><span class="menu-arrow"></span>
                            </a>
                            <div class="collapse sidebarUser">
                                <ul class="side-nav-second-level">
                                    <li id="view-casual-workers"><a href="{{ route('user.view-casual-workers') }}">View Casual Workers</a></li>
                                    <li id="view-contract-workers"><a href="{{ route('user.view-contract-workers') }}">View Contract Workers</a></li>
                                    <li id="view-permanent-workers"><a href="{{ route('user.view-permanent-workers') }}">View Permanent Workers</a></li>
                                    <li id="assign-worker-permission"><a href="{{ route('user.assign-permission') }}">Assign Worker Permission</a></li>
                                    <li id="effect-promotion"><a href="{{ route('user.effect-promotion') }}">Effect Promotion</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item" id="Full-Contracts">
                            <a data-bs-toggle="collapse" href=".sidebarContract" aria-expanded="false"
                                aria-controls="sidebarContract" class="side-nav-link">
                                <i class="uil-link"></i>
                                <span> Contract Manager</span><span class="menu-arrow"></span>
                            </a>
                            <div class="collapse sidebarContract">
                                <ul class="side-nav-second-level">
                                    <li id="sign-contract"><a href="{{ route('contract.sign-contract') }}">Sign Contract</a></li>
                                    <li id="terminate-contract"><a href="{{ route('contract.terminate-contract') }}">Terminate Contract</a></li>
                                    <li id="pending-contract-request"><a href="{{ route('contract.pending-contract-request') }}">Pending Contract Request</a></li>
                                    <li id="contract-review"><a href="{{ route('contract.contract-review') }}">Contract Review</a></li>
                                    <li id="batch-assignment"><a href="{{ route('contract.batch-assignment') }}">Batch Assignment</a></li>
                                    <li id="issue-contract-statement"><a href="{{ route('contract.issue-statement') }}">Issue Contract Statement</a></li>
                                    <li id="extend-contract-individual"><a href="{{ route('contract.extend-contract-individual') }}">Extend Contract Individual</a></li>
                                    <li id="extend-group-contract"><a href="{{ route('contract.extend-group-contract') }}">Extend Group Contract</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item" id="Full-Requests">
                            <a data-bs-toggle="collapse" href=".sidebarCrm" aria-expanded="false"
                                aria-controls="sidebarCrm" class="side-nav-link">
                                <i class="uil uil-tachometer-fast"></i>
                                <span class="badge bg-info text-white float-end">All</span>
                                <span> Requests  </span>
                            </a>
                            <div class="collapse sidebarCrm">
                                <ul class="side-nav-second-level">
                                    <li id="attendance-list"><a href="{{ route('requests.attendance-list') }}">Attendance list</a></li>
                                    <li id="workers-records"><a href="{{ route('requests.workers-records') }}">Workers Records</a></li>
                                    <li id="requested-loans"><a href="{{ route('requests.loans') }}">Requested Loans</a></li>
                                    <li id="account-minute"><a href="{{ route('requests.account-minute') }}">Account Minute</a></li>
                                    <li id="promotion-claims"><a href="{{ route('requests.promotion-claims') }}">Promotion Claims</a></li>
                                    <li id="leave-claims"><a href="{{ route('requests.leave-claims') }}">Leave Claims</a></li>
                                    <li id="excuse-duties"><a href="{{ route('requests.excuse-duties') }}">Excuse Duties</a></li>
                                    <li id="requested-days"><a href="{{ route('requests.requested-days') }}">Requested Days</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item" id="Full-Leaves">
                            <a data-bs-toggle="collapse" href=".sidebarLeave" aria-expanded="false"
                                aria-controls="sidebarLeave" class="side-nav-link">
                                <i class="uil-sliders-v-alt"></i>
                                <span> Leave Management </span><span class="menu-arrow"></span>
                            </a>
                            <div class="collapse sidebarLeave">
                                <ul class="side-nav-second-level">
                                    <li id="leave-requests"><a href="{{ route('leave.leave-requests') }}">Leave Requests</a></li>
                                    <li id="requests-days"><a href="{{ route('leave.requests-days') }}">Requests Days</a></li>
                                    <li id="pending-leaves"><a href="{{ route('leave.pending-leaves') }}">Pending Leaves</a></li>
                                    <li id="due-leaves"><a href="{{ route('leave.due-leaves') }}">Due Leaves</a></li>
                                    <li id="enforce-leave"><a href="{{ route('leave.enforce-leave') }}">Enforce Leave</a></li>
                                    <li id="reschedule-leave"><a href="{{ route('leave.reschedule-leave') }}">Re-Schedule Leave</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item" id="Full-Attendances">
                            <a data-bs-toggle="collapse" href=".sidebarAttendace" aria-expanded="false"
                                aria-controls="sidebarAttendace" class="side-nav-link">
                                <i class="mdi mdi-barcode-scan"></i>
                                <span> Attendance Manager </span><span class="menu-arrow"></span>
                            </a>
                            <div class="collapse sidebarAttendace">
                                <ul class="side-nav-second-level">
                                    <li id="upload-attendance"><a href="{{ route('attend.upload-attendance') }}">Upload Attendance</a></li>
                                    <li id="remark-attendance"><a href="{{ route('attend.remark-attendance') }}">Remark Attendance</a></li>
                                    <li id="review-attendance"><a href="{{ route('attend.review-attendance') }}">Review Attendance</a></li>
                                    <li id="check-days-worker"><a href="{{ route('attend.check-days-worker') }}">Check Days Worker</a></li>
                                    <li id="check-group-days"><a href="{{ route('attend.check-group-days') }}">Check Group Days</a></li>
                                    <li id="days-claims"><a href="{{ route('attend.days-claims') }}">Days Claims</a></li>
                                    <li id="generate-timetable"><a href="{{ route('attend.generate-timetable') }}">Generate Timetable</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item" id="Full-Loans">
                            <a data-bs-toggle="collapse" href=".sidebarLoan" aria-expanded="false"
                                aria-controls="sidebarLoan" class="side-nav-link">
                                <i class="mdi mdi-apple-keyboard-command"></i>
                                <span class="badge bg-info text-white float-end">Manager</span>
                                <span> Loan </span>
                            </a>
                            <div class="collapse sidebarLoan">
                                <ul class="side-nav-second-level">
                                    <li id="process-loan"><a href="{{ route('loan.process-loan') }}">Process Loan</a></li>
                                    <li id="approve-loan"><a href="{{ route('loan.approve-loan') }}">Approve Loan</a></li>
                                    <li id="loan-statements"><a href="{{ route('loan.loan-statements') }}">Loan Statements</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item" id="Full-Payslips">
                            <a data-bs-toggle="collapse" href=".sidebarPayslip" aria-expanded="false"
                                aria-controls="sidebarPayslip" class="side-nav-link">
                                <i class="mdi mdi-cash-multiple"></i>
                                <span> Payslip </span><span class="menu-arrow"></span>
                            </a>
                            <div class="collapse sidebarPayslip">
                                <ul class="side-nav-second-level">
                                    <li id="approve-payslip"><a href="{{ route('slip.approve-payslip') }}">Approve Payslip</a></li>
                                    <li id="financial-ticket"><a href="{{ route('slip.financial-ticket') }}">Financial Ticket</a></li>
                                    <li id="generate-pincode"><a href="{{ route('slip.generate-pincode') }}">Generate Pincode</a></li>
                                    <li id="prepare-payslip"><a href="{{ route('slip.prepare-payslip') }}">Prepare Payslip</a></li>
                                    <li id="release-salary"><a href="{{ route('slip.release-salary') }}">Release Salary</a></li>
                                    <li id="release-pincode"><a href="{{ route('slip.release-pincode') }}">Release Pincode</a></li>
                                    <li id="verify-payslip"><a href="{{ route('slip.verify-payslip') }}">Verify Payslip</a></li>
                                    <li id="view-slip-ticket"><a href="{{ route('slip.view-slip-ticket') }}">View Slip Ticket</a></li>
                                    <li id="withheld-payslip"><a href="{{ route('slip.withhold-payslip') }}">Withheld Payslip</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="#" class="side-nav-link">
                                <i class="uil-keyhole-square"></i>
                                <span> Logout</span>
                            </a>
                        </li>


                    </section>
                    <!-- End of Middle Nav -->

                    <!-- Help Box -->
                    <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-end iclose-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="{{ asset('root/hyp/assets/images/svg/help-icon.svg') }}" height="90"
                            alt="Helper Icon Image" />
                        <h5 class="mt-3">eWork Upgrade Plan</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Approve</a>
                    </div>
                    <!-- end Help Box -->

                </ul>
                <!--- End Sidemenu -->

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- content -->
            <div class="content" id="app">

                @yield('content')

            </div>

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-0 text-muted">All Right Reserved. &copy; 2010 -
                                <script>document.write(new Date().getFullYear())</script> <strong>eWork.</strong> Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="#">SkaiMount</a>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <span class="mx-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="Click here to read our terms & conditions" title="eWork Notice">
                                    <a class="text-primary" href="#">T & C </a>
                                </span><>
                                <span class="mx-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="Click here to read our documentations" title="eWork Notice">
                                    <a class="text-primary" href="#">Documentation</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


        <section class="d-print-none">
            <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="View Users online since the last 30 mins" title="eWork Notice">
                <i class="ri-group-fill"></i> &nbsp;Users
            </a>
            <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="Visit the forum chat for current concerns" title="eWork Notice">
                <i class="ri-bubble-chart-fill"></i> &nbsp;Forum
            </a>
        </section>


    </div>
    <!-- END wrapper -->


    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
            <h5 class="text-white m-0">Theme Settings</h5>
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="card mb-0 p-3">
                    <h5 class="mt-0 font-16 fw-bold mb-3">Choose Layout</h5>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical"
                                    class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Vertical</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal"
                                    class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                    <span class="d-flex h-100 flex-column">
                                        <span
                                            class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                            <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                        </span>
                                        <span class="bg-light d-block p-1"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Horizontal</h5>
                        </div>
                    </div>

                    <h5 class="my-3 font-16 fw-bold">Color Scheme</h5>

                    <div class="colorscheme-cardradio">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-color-light">
                                        <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span
                                                        class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column bg-white rounded-2">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>

                                        <div id="topnav-color" class="bg-white rounded-2 h-100">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="d-flex h-100 flex-column bg-white rounded-2">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100 bg-black"
                                        for="layout-color-dark">
                                        <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary border-opacity-25 border-3 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary border-opacity-25 border-3 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary border-opacity-25 border-3 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary border-opacity-25 border-3 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>

                                        <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light-lighten d-flex p-1 align-items-center border-bottom border-opacity-25 border-primary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-primary border-opacity-25 border-3 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-light-lighten d-block p-1"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h5 class="my-3 font-16 fw-bold">Layout Mode</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-mode"
                                        id="layout-mode-fluid" value="fluid">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-fluid">
                                        <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span
                                                        class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column rounded-2">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>

                                        <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                            </div>
                            <div class="col-4" id="layout-boxed">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-mode"
                                        id="layout-mode-boxed" value="boxed">
                                    <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-mode-boxed">
                                        <div id="sidebar-size" class="border-start border-end">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span
                                                        class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column rounded-2">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>

                                        <div id="topnav-color" class="border-start border-end h-100">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                            </div>

                            <div class="col-4" id="layout-detached">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-mode"
                                        id="data-layout-detached" value="detached">
                                    <label class="form-check-label p-0 avatar-md w-100" for="data-layout-detached">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 align-items-center border-bottom ">
                                                <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            </span>
                                            <span class="d-flex h-100 p-1 px-2">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column p-1 px-2">
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                        </span>

                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Detached</h5>
                            </div>
                        </div>
                    </div>

                    <h5 class="my-3 font-16 fw-bold">Topbar Color</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color"
                                    id="topbar-color-light" value="light">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                    <div id="sidebar-size">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>

                                    <div id="topnav-color">
                                        <span class="d-flex h-100 flex-column">
                                            <span
                                                class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </div>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-4" style="--ct-dark-rgb: 64,73,84;">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color"
                                    id="topbar-color-dark" value="dark">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                    <div id="sidebar-size">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-primary-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-dark d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>

                                    <div id="topnav-color">
                                        <span class="d-flex h-100 flex-column">
                                            <span
                                                class="bg-dark d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                <span class="d-block p-1 bg-primary-lighten rounded me-1"></span>
                                                <span
                                                    class="d-block border border-primary border-opacity-25 border-3 rounded ms-auto"></span>
                                                <span
                                                    class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-primary border-opacity-25 border-3 rounded ms-1"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </div>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color"
                                    id="topbar-color-brand" value="brand">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-brand">
                                    <div id="sidebar-size">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-primary bg-gradient d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>

                                    <div id="topnav-color">
                                        <span class="d-flex h-100 flex-column">
                                            <span
                                                class="bg-primary bg-gradient d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                <span class="d-block p-1 bg-light opacity-25 rounded me-1"></span>
                                                <span
                                                    class="d-block border border-3 border opacity-25 rounded ms-auto"></span>
                                                <span
                                                    class="d-block border border-3 border opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border opacity-25 rounded ms-1"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </div>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Brand</h5>
                        </div>
                    </div>

                    <div>
                        <h5 class="my-3 font-16 fw-bold">Menu Color</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-menu-color"
                                        id="leftbar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-light">
                                        <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span
                                                        class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>

                                        <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>

                            <div class="col-4" style="--ct-dark-rgb: 64,73,84;">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-menu-color"
                                        id="leftbar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-dark">
                                        <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-dark d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary rounded border-opacity-25 border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary rounded border-opacity-25 border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary rounded border-opacity-25 border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border border-secondary rounded border-opacity-25 border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>

                                        <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-primary border-opacity-25">
                                                    <span class="d-block p-1 bg-primary-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-secondary rounded border-opacity-25 border-3 ms-auto"></span>
                                                    <span
                                                        class="d-block border border-secondary rounded border-opacity-25 border-3 ms-1"></span>
                                                    <span
                                                        class="d-block border border-secondary rounded border-opacity-25 border-3 ms-1"></span>
                                                    <span
                                                        class="d-block border border-secondary rounded border-opacity-25 border-3 ms-1"></span>
                                                </span>
                                                <span class="bg-dark d-block p-1"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-menu-color"
                                        id="leftbar-color-brand" value="brand">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-brand">
                                        <div id="sidebar-size">
                                            <span class="d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span
                                                        class="bg-primary bg-gradient d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                        <span
                                                            class="d-block border opacity-25 rounded border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border opacity-25 rounded border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border opacity-25 rounded border-3 w-100 mb-1"></span>
                                                        <span
                                                            class="d-block border opacity-25 rounded border-3 w-100 mb-1"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>

                                        <div id="topnav-color">
                                            <span class="d-flex h-100 flex-column">
                                                <span
                                                    class="bg-light d-flex p-1 align-items-center border-bottom border-secondary">
                                                    <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                </span>
                                                <span class="bg-primary bg-gradient d-block p-1"></span>
                                            </span>
                                        </div>

                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Brand</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h5 class="my-3 font-16 fw-bold">Sidebar Size</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size"
                                        id="leftbar-size-default" value="default">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-default">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size"
                                        id="leftbar-size-compact" value="compact">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-compact">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size"
                                        id="leftbar-size-small" value="condensed">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-small">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end flex-column"
                                                    style="padding: 2px;">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size"
                                        id="leftbar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label p-0 avatar-md w-100"
                                        for="leftbar-size-small-hover">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end flex-column"
                                                    style="padding: 2px;">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Hover View</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size"
                                        id="leftbar-size-full" value="full">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-full">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size"
                                        id="leftbar-size-fullscreen" value="fullscreen">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-fullscreen">
                                        <span class="d-flex h-100">
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Fullscreen Layout</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h5 class="my-3 font-16 fw-bold">Layout Position</h5>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position"
                                id="layout-position-fixed" value="fixed">
                            <label class="btn btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position"
                                id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-soft-primary w-sm ms-0"
                                for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>

                    <div id="sidebar-user">
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <label class="font-16 fw-bold m-0" for="sidebaruser-check">Sidebar User Info</label>
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" name="sidebar-user"
                                    id="sidebaruser-check">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                        target="_blank" role="button" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor js -->
    <script src="{{ asset('root/hyp/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('root/hyp/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
   

    <!-- Apex Chart Candlestick Demo js -->
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
    <script src="https://apexcharts.com/samples/assets/github-data.js"></script>
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>

    <!-- Wallet Dashboard js -->
    <script src="{{ asset('root/hyp/assets/js/pages/demo.dashboard-wallet.js') }}"></script>
    <script src="{{ asset('root/hyp/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('root/hyp/assets/js/ui/component.todo.js') }}"></script>


    <!-- Include jQuery -->
    <script src="{{ asset('root/dek/bower_components/jquery/js/jquery.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('root/dek/assets/js/modal.js') }}"></script>
    <script src="{{ asset('root/dek/assets/js/classie.js') }}"></script>
    <script src="{{ asset('root/dek/assets/js/modalEffects.js') }}"></script>

    {{-- THE LINK TO THE PERMISSIONS --}}
    <script src="{{ asset('root/js/permission-access.js') }}"></script>

    <script src="{{ asset('root/hyp/assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('root/hyp/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- DataTables Buttons and Dependencies -->
    <script src="{{ asset('root/hyp/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('root/hyp/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('root/hyp/assets/vendor/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('root/hyp/assets/vendor/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('root/hyp/assets/vendor/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('root/hyp/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('root/hyp/assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('root/hyp/assets/vendor/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>


    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('root/hyp/assets/vendor/select2/js/select2.min.js') }}"></script>

    @yield('additional-js')

    <script>
        $(document).ready(function ()
        {
            $('.select2').each(function() { 
                $(this).select2({
                    dropdownParent: $(this).parent(),
                    width: '100%'
                });
                // $(this).val($(this).find('option:first').val()).trigger('change');
            });


            //======= HANDLING THE COLLAPSE OF THE SIDE NAV =========================

            $('.side-nav-link[data-bs-toggle="collapse"]').on('click', function () {
                var target = $(this).attr('href');
                if (target && target.startsWith('.')) {
                    var collapseClass = target.substring(1);
                    $('.collapse').not('.' + collapseClass).removeClass('show');
                    $('.' + collapseClass).toggleClass('show');
                }
            });
            // ================================================================

            $('.iclose-btn').on('click', function () {
                $('.help-box').hide();
            });

        });
    </script>


</body>

</html>






