

@extends('layouts.main_layout')

@section('title', 'Permanent Workers')

@section('additional-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('root/css/multiple-select.css') }}">
@endsection

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
                            <button type="button" class="btn btn-outline-info mb-2 btn-sm rounded-2" id="btnSingle">Add Single</button>
                            <button type="button" class="btn btn-outline-info mb-2 btn-sm rounded-2" id="btnBatch">In Batch</button>
                        </div>
                    </div>
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#home-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                <i class="mdi mdi-gamepad-circle d-md-none d-block"></i>
                                <span class="d-none d-md-block" id="pending-count">List of Permanent Workers</span>
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
                                            <th>#</th>
                                            <th>Img</th>
                                            <th>More</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Initials</th>
                                            <th>Nickname</th>
                                            <th>Gender</th>
                                            <th>Marital Status</th>
                                            <th>Religion</th>
                                            <th>Blood</th>
                                            <th>Nationality</th>
                                            <th>Region</th>
                                            <th>District</th>
                                            <th>Hometown</th>
                                            <th>Ethnicity</th>
                                            <th>Languages</th>
                                            <th>Date of Birth</th>
                                            <th>Country of Birth</th>
                                            <th>Region of Birth</th>
                                            <th>District of Birth</th>
                                            <th>Place of Birth</th>
                                            <th>Bank</th>
                                            <th>Account Number</th>
                                            <th>SSNIT</th>
                                            <th>Phone</th>
                                            <th>Tel</th>
                                            <th>Email</th>
                                            <th>Current District</th>
                                            <th>Current Region</th>
                                            <th>Landmark</th>
                                            <th>GPS</th>
                                            <th>Emergency Name</th>
                                            <th>Emergency Address</th>
                                            <th>Emergency Phone</th>
                                            <th>Emergency Relationship</th>
                                            <th>Role</th>
                                            <th>Designation</th>
                                            <th>National Identities</th>
                                            <th>ID Numbers</th>
                                            <th>Education Level</th>
                                            <th>School</th>
                                            <th>Location</th>
                                            <th>Certification</th>
                                            <th>Driver License Name</th>
                                            <th>Driver License Number</th>
                                            <th>Driver License Expire Date</th>
                                            <th>Driver License Class</th>
                                            <th>Driver License Type</th>
                                            <th>Health Conditions</th>
                                            <th>Allergies</th>
                                            <th>Tag Number</th>
                                            <th>Track</th>
                                            <th>Status</th>
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
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="batch-title">..</h4>
            </div>
            
            <div class="modal-body">
                <form id="bulk-form">
                    <div class="col-md-12">
                        <div class="col-md-12 row mb-2">
                            <h5 class="form-label">Nationality Details </h5>
                            <div class="col-md-3 mb-2">
                                <label class="form-label">Country (Birth, From)</label>
                                <select id="N1" nullable class="country-select form-control form-select-sm">
                                    <option value="" selected disabled>---- Select Option ----</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-2">
                                <label class="form-label">Region (Birth,From,Current)</label>
                                <select id="N2" nullable class="form-control form-select-sm">
                                    <option value="" selected disabled>---- Select Option ----</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-2">
                                <label class="form-label">District (Birth,From,Current)</label>
                                <select id="N3" nullable class="form-control form-select-sm">
                                    <option value="" selected disabled>---- Select Option ----</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-2">
                                <label class="form-label">Town (From, Birth)</label>
                                <select id="N4" nullable class="form-control form-select-sm">
                                    <option value="" selected disabled>---- Select Option ----</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 row mb-2">
                            <h3 class="form-label" for="ides">Place of birth Details </h3>
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Bank</label>
                                <select id="P1" nullable class="form-control form-select-sm">
                                    <option value="" selected disabled>---- Select Option ----</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Role</label>
                                <select id="P2" nullable class="form-control form-select-sm">
                                    <option value="" selected disabled>---- Select Option ----</option>
                                </select>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary mb-2 btn-sm rounded-2" id="btnExport">Use This Template</button>
                        <button type="button" class="btn btn-primary mb-2 btn-sm rounded-2" id="btnImport" style="display: none;">Import Data</button>
                    </div>
                </form>
                <hr>
                <div class="table-responsive">
                    <table id="exporting-table" class="table align-middle table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Initials</th>
                                <th>Nickname</th>
                                <th>Gender</th>
                                <th>Marital Status</th>
                                <th>Religion</th>
                                <th>Blood</th>
                                <th>Nationality</th>
                                <th>Region</th>
                                <th>District</th>
                                <th>Hometown</th>
                                <th>Ethnicity</th>
                                <th>Languages</th>
                                <th>Date of Birth</th>
                                <th>Country of Birth</th>
                                <th>Region of Birth</th>
                                <th>District of Birth</th>
                                <th>Place of Birth</th>
                                <th>Bank</th>
                                <th>Account Number</th>
                                <th>SSNIT</th>
                                <th>Phone</th>
                                <th>Tel</th>
                                <th>Email</th>
                                <th>Current District</th>
                                <th>Current Region</th>
                                <th>Landmark</th>
                                <th>GPS</th>
                                <th>Emergency Name</th>
                                <th>Emergency Address</th>
                                <th>Emergency Phone</th>
                                <th>Emergency Relationship</th>
                                <th>Role</th>
                                <th>Designation</th>
                                <th>Worker</th>
                                <th>Education Level</th>
                                <th>School</th>
                                <th>Location</th>
                                <th>Certification</th>
                                <th>Driver License Name</th>
                                <th>Driver License Number</th>
                                <th>Driver License Expire Date</th>
                                <th>Driver License Class</th>
                                <th>Driver License Type</th>
                                <th>Health Conditions</th>
                                <th>Allergies</th>
                                <th>National Identities</th>
                                <th>Id Numbers</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success btn-sm" id="save-bulk" style="display: none;">Proceed</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="my-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="single-title">..</h4>
            </div>
            <div class="modal-body">
                
                <div class="col-xl-12">
                    <div class="card shadow-none">
                        <div class="card-body">

                            <h4 class="header-title mb-3">Wizard With Progress Bar</h4>

                            <form id="single-form" method="post" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div id="progressbarwizard">

                                    <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                        <li class="nav-item">
                                            <a href="#account-2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                <i class="mdi mdi-account-circle font-18 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Personal Info</span>
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a href="#addresss" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                <i class="mdi mdi-briefcase-account font-18 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Contact Details</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#emergency" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                <i class="mdi mdi-clipboard-flow font-18 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Emegency</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#optional" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                <i class="mdi mdi-database-minus font-18 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Other Info</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#finish-2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                <i class="mdi mdi-checkbox-marked-circle-outline font-18 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Finish</span>
                                            </a>
                                        </li>
                                    </ul>
                                
                                    <div class="tab-content b-0 mb-0">

                                        <div id="bar" class="progress mb-3" style="height: 5px;">
                                            <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
                                        </div>

                                        <div class="col-md-1 mb-2">
                                            <input type="text" class="form-control text-white" id="last_comers" name="last_comers" readonly style="border: none;">
                                        </div>
                                
                                        <div class="tab-pane" id="account-2">
                                            <div class="row" style="max-height: 450px; overflow-y: auto;">
                                                <div class="col-12">
                                                    <!-- Personal Information -->
                                                    <div class="col-md-12 row mb-2">
                                                        <h5 class="form-label">Identification Details</h5>
                                                        <div class="col-md-12 mb-2">
                                                            <code>Provide NHIS and any other Id</code>
                                                            <input type="text" class="form-control" id="national_identities" name="national_identities" placeholder="eg. NHIS,GHANA CARD" required> 
                                                        </div>
                                                        <div class="col-md-12 mb-2">
                                                            <code>Arrange Id Numbers base on your selection above</code> 
                                                            <input type="text" class="form-control" id="id_numbers" name="id_numbers" placeholder="eg. 85220932,GHA-625519-6" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="first_name">First Name</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="eg. Solomon" required>
                                                        </div>
                                                        <label class="col-md-2 col-form-label" for="last_name">Last Name</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Nana Ayisi" required>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="initials">Initials</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="initials" name="initials" readonly nullable>
                                                        </div>
                                                        <label class="col-md-2 col-form-label" for="nickname">Nickname</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="nickname" name="nickname" nullable>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="gender">Gender</label>
                                                        <div class="col-md-4">
                                                            <select id="gender" name="gender" required class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="NB">Non-Binary</option>
                                                                <option value="Others">Prefer Not to Say</option>
                                                            </select>
                                                        </div>
                                                        <label class="col-md-2 col-form-label" for="marital_status">Marital Status</label>
                                                        <div class="col-md-4">
                                                            <select id="marital_status" name="marital_status" required class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widowed">Widowed</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="religion">Religion</label>
                                                        <div class="col-md-4">
                                                            <select id="religion" name="religion" required class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                                <option value="Christianity">Christianity</option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Hinduism">Hinduism</option>
                                                                <option value="Buddhism">Buddhism</option>
                                                                <option value="Judaism">Judaism</option>
                                                                <option value="Sikhism">Sikhism</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                        <label class="col-md-2 col-form-label" for="blood">Blood Type</label>
                                                        <div class="col-md-4">
                                                            <select id="blood" name="blood" required class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                                <option value="A+">A+</option>
                                                                <option value="A-">A-</option>
                                                                <option value="B+">B+</option>
                                                                <option value="B-">B-</option>
                                                                <option value="AB+">AB+</option>
                                                                <option value="AB-">AB-</option>
                                                                <option value="O+">O+</option>
                                                                <option value="O-">O-</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="nationality">Nationality</label>
                                                        <div class="col-md-4">
                                                            <select id="nationality" name="nationality" nullable class="country-select form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                            </select>
                                                        </div>
                                                        <label class="col-md-2 col-form-label" for="region">Region</label>
                                                        <div class="col-md-4">
                                                            <select id="region" name="region" nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="district">District</label>
                                                        <div class="col-md-4">
                                                            <select id="district" name="district" nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                            </select>
                                                        </div>
                                                        <label class="col-md-2 col-form-label" for="hometown">Home Town</label>
                                                        <div class="col-md-4">
                                                            <select id="hometown" name="hometown" nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="ethnicity">Ethnicity</label>
                                                        <div class="col-md-4">
                                                            <select id="ethnicity" name="ethnicity" required class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Ethnicity ----</option>
                                                              
                                                                <!-- A -->
                                                                <optgroup label="A">
                                                                  <option value="Abidji">Abidji Tribe</option>
                                                                  <option value="Abutia">Abutia</option>
                                                                  <option value="Adansi">Adansi</option>
                                                                  <option value="Adele">Adele Tribe</option>
                                                                  <option value="Agave">Agave Tribe</option>
                                                                  <option value="Ahafo">Ahafo</option>
                                                                  <option value="Ahanta">Ahanta Tribe</option>
                                                                  <option value="Akan">Akan Tribe</option>
                                                                  <option value="Akuapem">Akuapem Tribe</option>
                                                                  <option value="Akwamu">Akwamu Tribe</option>
                                                                  <option value="Akyem">Akyem</option>
                                                                  <option value="Anlo Ewe">Anlo Ewe</option>
                                                                  <option value="Anyi">Anyi Tribe</option>
                                                                  <option value="Asante">Asante Tribe</option>
                                                                  <option value="Assin">Assin</option>
                                                                  <option value="Avatime">Avatime Tribe</option>
                                                                </optgroup>
                                                              
                                                                <!-- B -->
                                                                <optgroup label="B">
                                                                  <option value="Birifor">Birifor Tribe</option>
                                                                  <option value="Bissa">Bissa Tribe</option>
                                                                  <option value="Bono">Bono Tribe</option>
                                                                  <option value="Chumburu">Chumburu</option>
                                                                  <option value="Chumburung">Chumburung</option>
                                                                </optgroup>
                                                              
                                                                <!-- D -->
                                                                <optgroup label="D">
                                                                  <option value="Dagaaba">Dagaaba Tribe</option>
                                                                  <option value="Dagomba">Dagomba Tribe</option>
                                                                  <option value="Dyula">Dyula Tribe</option>
                                                                </optgroup>
                                                              
                                                                <!-- E -->
                                                                <optgroup label="E">
                                                                  <option value="Efutu">Efutu Tribe</option>
                                                                  <option value="Evalue">Evalue Tribe</option>
                                                                  <option value="Ewe">Ewe Tribe</option>
                                                                </optgroup>
                                                              
                                                                <!-- F -->
                                                                <optgroup label="F">
                                                                  <option value="Fante">Fante Tribe</option>
                                                                  <option value="Frafra">Frafra Tribe</option>
                                                                </optgroup>
                                                              
                                                                <!-- G -->
                                                                <optgroup label="G">
                                                                  <option value="Ga-Adangbe">Ga-Adangbe Tribe</option>
                                                                  <option value="Gonja">Gonja Tribe</option>
                                                                  <option value="Guang">Guang Tribe</option>
                                                                  <option value="Gurunsi">Gurunsi Tribe</option>
                                                                </optgroup>
                                                              
                                                                <!-- H -->
                                                                <optgroup label="H">
                                                                  <option value="Hausa">Hausa Tribe</option>
                                                                </optgroup>
                                                              
                                                                <!-- K -->
                                                                <optgroup label="K">
                                                                  <option value="Karamogo">Karamogo</option>
                                                                  <option value="Kassena">Kassena</option>
                                                                  <option value="Konkomba">Konkomba Tribe</option>
                                                                  <option value="Krobo">Krobo Tribe</option>
                                                                  <option value="Kurtey">Kurtey Tribe</option>
                                                                  <option value="Kusasi">Kusasi Tribe</option>
                                                                  <option value="Kyode">Kyode Tribe</option>
                                                                </optgroup>
                                                              
                                                                <!-- L -->
                                                                <optgroup label="L">
                                                                  <option value="Dagbon">Dagbon</option>
                                                                  <option value="Logba">Logba Tribe</option>
                                                                </optgroup>
                                                              
                                                                <!-- M -->
                                                                <optgroup label="M">
                                                                  <option value="Mamprusi">Mamprusi Tribe</option>
                                                                  <option value="Moba">Moba Tribe</option>
                                                                  <option value="Mole-Dagbon">Mole-Dagbon Tribe</option>
                                                                  <option value="Mossi">Mossi Tribe</option>
                                                                </optgroup>
                                                              
                                                                <!-- N -->
                                                                <optgroup label="N">
                                                                  <option value="Nafana">Nafana Tribe</option>
                                                                  <option value="Nanumba">Nanumba Tribe</option>
                                                                  <option value="Northerner">Northerner</option>
                                                                  <option value="Nuna">Nuna Tribe</option>
                                                                  <option value="Nzema">Nzema Tribe</option>
                                                                </optgroup>
                                                              
                                                                <!-- P -->
                                                                <optgroup label="P">
                                                                  <option value="Peki">Peki</option>
                                                                </optgroup>
                                                              
                                                                <!-- S -->
                                                                <optgroup label="S">
                                                                  <option value="Soninke">Soninke Tribe</option>
                                                                </optgroup>
                                                              
                                                                <!-- T -->
                                                                <optgroup label="T">
                                                                  <option value="Tabom">Tabom Tribe</option>
                                                                  <option value="Tallensi">Tallensi</option>
                                                                  <option value="Tem">Tem Tribe</option>
                                                                  <option value="Tshi">Tshi</option>
                                                                </optgroup>
                                                              
                                                                <!-- W -->
                                                                <optgroup label="W">
                                                                  <option value="Wala">Wala Tribe</option>
                                                                </optgroup>
                                                              
                                                                <!-- Y -->
                                                                <optgroup label="Y">
                                                                  <option value="Yeji">Yeji</option>
                                                                </optgroup>
                                                              
                                                                <!-- Z -->
                                                                <optgroup label="Z">
                                                                  <option value="Zarma">Zarma Tribe</option>
                                                                  <option value="Others">Other Tribe</option>
                                                                </optgroup>
                                                              
                                                            </select>                                                              
                                                        </div>
                                                        <label class="col-md-2 col-form-label" for="languages">Languages</label>
                                                        <div class="col-md-4">
                                                            <div class="custom-select" id="languages" name="languages">
                                                                <div class="select-header">
                                                                  <div class="selected-items">Select Items</div>
                                                                  <div class="arrow">&#9660;</div>
                                                                </div>
                                                                <div class="options">
                                                                    <div class="option" data-value="English">English</div>
                                                                    <div class="option" data-value="Akan">Akan</div>
                                                                    <div class="option" data-value="Ewe">Ewe</div>
                                                                    <div class="option" data-value="Ga">Ga</div>
                                                                    <div class="option" data-value="Dagbani">Dagbani</div>
                                                                    <div class="option" data-value="Dangme">Dangme</div>
                                                                    <div class="option" data-value="Dagaare">Dagaare</div>
                                                                    <div class="option" data-value="Twi">Twi</div>
                                                                    <div class="option" data-value="Fante">Fante</div>
                                                                    <div class="option" data-value="Kasem">Kasem</div>
                                                                    <div class="option" data-value="Akuapem Twi">Akuapem Twi</div>
                                                                    <div class="option" data-value="Nzema">Nzema</div>
                                                                    <div class="option" data-value="Hausa">Hausa</div>
                                                                    <div class="option" data-value="Gonja">Gonja</div>
                                                                    <div class="option" data-value="Dagbani">Dagbani</div>
                                                                    <div class="option" data-value="Gurma">Gurma</div>
                                                                    <div class="option" data-value="French">French</div>
                                                                    <div class="option" data-value="Yoruba">Yoruba</div>
                                                                    <div class="option" data-value="Sefwi">Sefwi</div>
                                                                    <div class="option" data-value="Frafra">Frafra</div>
                                                                    <div class="option" data-value="Ewe">Ewe</div>
                                                                    <div class="option" data-value="Chinese">Chinese</div>
                                                                    <div class="option" data-value="Spanish">Spanish</div>
                                                                    <div class="option" data-value="Dutch">Dutch</div>
                                                                </div>
                                                              </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="date_of_birth">Date of Birth</label>
                                                        <div class="col-md-4">
                                                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
                                                        </div>
                                                        <label class="col-md-2 col-form-label" for="country_of_birth">Country of Birth</label>
                                                        <div class="col-md-4">
                                                            <select id="country_of_birth" name="country_of_birth" nullable class="country-select form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="region_of_birth">Region of Birth</label>
                                                        <div class="col-md-4">
                                                            <select id="region_of_birth" name="region_of_birth" nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                            </select>
                                                        </div>
                                                        <label class="col-md-2 col-form-label" for="district_of_birth">District of Birth</label>
                                                        <div class="col-md-4">
                                                            <select id="district_of_birth" name="district_of_birth" nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="place_of_birth">Place of Birth</label>
                                                        <div class="col-md-10">
                                                            <select id="place_of_birth" name="place_of_birth" nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Bank Details -->
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="bank">Bank</label>
                                                        <div class="col-md-10">
                                                            <select id="bank" name="bank" nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                            </select>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="ssnit">SSNIT</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="ssnit" name="ssnit" unique  placeholder="SSNIT Number" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" onkeydown="return (event.key >= '0' && event.key <= '9') || event.key === 'Backspace' || event.key === 'Delete'" maxlength="16" required  required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 text-center mb-2">
                                                        <img id="image-preview" class="img-fluid img-thumbnail rounded-circle" style="display: none; max-width: 30%; height: 30%;">
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-2 col-form-label" for="picture">1080 x 1080 px</label>
                                                        <div class="col-md-9 mb-2">
                                                            <input type="file" class="form-control" id="picture" name="picture" accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                                            <ul class="list-inline wizard mb-0">
                                                <li class="next list-inline-item float-end">
                                                    
                                                    <a href="javascript:void(0);" class="btn btn-info">Add More Info <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" id="addresss">
                                            <div class="row">
                                                <div class="col-12">
                                                    
                                                    <!-- Contact Details -->
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="phone">Phone</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="phone" name="phone" unique  placeholder="Phone Number" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" onkeydown="return (event.key >= '0' && event.key <= '9') || event.key === 'Backspace' || event.key === 'Delete'" maxlength="10" nullable>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="tel">Tel</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="tel" name="tel"  placeholder="Enter Telephone" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" onkeydown="return (event.key >= '0' && event.key <= '9') || event.key === 'Backspace' || event.key === 'Delete'" maxlength="10" required  nullable>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="email">Email</label>
                                                        <div class="col-md-10">
                                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address here" unique nullable>
                                                        </div>
                                                    </div>

                                                    <!-- Address Details -->
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="current_country">Current Country</label>
                                                        <div class="col-md-10">
                                                            <select id="current_country" nullable class="country-select form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="current_region">Current Region</label>
                                                        <div class="col-md-10">
                                                            <select id="current_region" name="current_region" nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="current_district">Current District</label>
                                                        <div class="col-md-10">
                                                            <select id="current_district" name="current_district" nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3 text-center">
                                                        <label class="col-md-12 col-form-label" for="landmark">Discribe your current address, like town, zone, area, landmark etc</label>
                                                        <label class="col-md-2 col-form-label"></label>
                                                        <div class="col-md-10">
                                                            <textarea id="landmark" name="landmark" class="form-control form-control-lg" rows="3" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" nullable></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="gps">GPS Address</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="gps" name="gps" nullable>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div> <!-- end row -->
                                            <ul class="pager wizard mb-0 list-inline">
                                                
                                                <li class="next list-inline-item float-end">
                                                    <button type="button" class="btn btn-info">Next <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                </li>
                                                <li class="previous list-inline-item float-end mx-2">
                                                    <button type="button" class="btn btn-info"><i class="mdi mdi-arrow-left me-1 mx-2"></i> Previous</button>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="tab-pane" id="emergency">
                                            <div class="row">
                                                <div class="col-12">
                                                    
                                                   <!-- Emergency Contact -->
                                                   <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="emegency_name">Person Name</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="emegency_name" name="emegency_name" placeholder="eg. Nana Ayisi Solomon" nullable>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="emegency_address">Person Address</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="emegency_address" name="emegency_address" placeholder="e.g Accra-Amasaman" nullable>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="phone">Person Phone</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="emergency_phone" name="emergency_phone"  placeholder="0245482029" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" onkeydown="return (event.key >= '0' && event.key <= '9') || event.key === 'Backspace' || event.key === 'Delete'" maxlength="10" nullable>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="emegency_relationship">Relationship</label>
                                                        <div class="col-md-10">
                                                            <select id="emegency_relationship" name="emegency_relationship"  nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                                <option value="Parent">Parent</option>
                                                                <option value="Sibling">Sibling</option>
                                                                <option value="Spouse">Spouse</option>
                                                                <option value="Friend">Friend</option>
                                                                <option value="Relative">Relative</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Role and Designation -->
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="role">Role Performing</label>
                                                        <div class="col-md-10">
                                                            <select id="role" name="role" nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="designation">Designation</label>
                                                        <div class="col-md-10">
                                                            <select id="designation" name="designation" nullable class="form-control form-select-sm">
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
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="pager wizard mb-0 list-inline">
                                                
                                                <li class="next list-inline-item float-end">
                                                    <button type="button" class="btn btn-info">Next <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                </li>
                                                <li class="previous list-inline-item float-end mx-2">
                                                    <button type="button" class="btn btn-info"><i class="mdi mdi-arrow-left me-1 mx-2"></i> Previous</button>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" id="optional">
                                            <div class="row">
                                                <div class="col-12">
                                                    
                                                   <!-- Educational Background -->
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="education_level">Education Level</label>
                                                        <div class="col-md-10">
                                                            <select id="education_level" name="education_level" nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                                <option value="Preschool">Preschool</option>
                                                                <option value="Elementary School">Elementary School</option>
                                                                <option value="Middle School">Middle School</option>
                                                                <option value="High School">High School</option>
                                                                <option value="Tertiary">Tertiary</option>
                                                                <option value="Vocational Training">Vocational Training</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="school">School</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="school" name="school" nullable>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="location">Location</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="location" name="location" nullable>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="certification">Certification</label>
                                                        <div class="col-md-10">
                                                            <select id="certification" name="certification" nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                                <option value="Middle School">Middle School</option>
                                                                <option value="Waec">High School</option>
                                                                <option value="Vocational Training">Vocational Training</option>
                                                                <option value="Associate Degree">Associate Degree</option>
                                                                <option value="Bachelor's Degree">Bachelor's Degree</option>
                                                                <option value="Master's Degree">Master's Degree</option>
                                                                <option value="Doctoral Degree">Doctoral Degree</option>
                                                                <option value="Professional Degree">Professional Degree</option>
                                                                <option value="Certificate Program">Certificate Program</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Driver's License Details -->
                                                    <div class="row mb-3 text-center">
                                                        <h2 class="col-md-12">Driving License</h2>
                                                        <hr>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="driver_license_name">Name on License </label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="driver_license_name" name="driver_license_name" nullable>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="driver_license_number">License Number</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="driver_license_number" name="driver_license_number" nullable>
                                                        </div>
                                                        <label class="col-md-2 col-form-label" for="driver_license_expire_date">Expiry Date</label>
                                                        <div class="col-md-4">
                                                            <input type="date" class="form-control" id="driver_license_expire_date" name="driver_license_expire_date" nullable>
                                                        </div>
                                                    </div>


                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="driver_license_class">License Class</label>
                                                        <div class="col-md-4">
                                                            <select id="driver_license_class" name="driver_license_class" nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                                <option value="Class A">Class A</option>
                                                                <option value="Class B">Class B</option>
                                                                <option value="Class C">Class C</option>
                                                                <option value="Class D">Class D</option>
                                                                <option value="Class E">Class E</option>
                                                                <option value="Class F">Class F</option>
                                                                <option value="Class M">Class M</option>
                                                            </select>
                                                        </div>
                                                        <label class="col-md-2 col-form-label" for="driver_license_type">License Type</label>
                                                        <div class="col-md-4">
                                                            <select id="driver_license_type" name="driver_license_type" nullable class="form-control form-select-sm">
                                                                <option value="" selected disabled>---- Select Option ----</option>
                                                                <option value="Full">Full License</option>
                                                                <option value="Provisional">Provisional License</option>
                                                                <option value="Commercial">Commercial License</option>
                                                                <option value="Motorcycle">Motorcycle License</option>
                                                                <option value="Learner's Permit">Learner's Permit</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Medical Information -->
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label" for="health_conditions">Health Conditions</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="health_conditions" name="health_conditions" nullable>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3 text-center">
                                                        <label class="col-md-12 col-form-label" for="landmark">Your Allegies here ( Split them with comma e.g Beans,Rice,Yam)</label>
                                                        <label class="col-md-2 col-form-label"></label>
                                                        <div class="col-md-10">
                                                            <textarea id="allergies" name="allergies" class="form-control form-control-lg" rows="3" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" nullable></textarea>
                                                        </div>
                                                    </div>

                                                    
                                                </div>
                                            </div>
                                            <ul class="pager wizard mb-0 list-inline">
                                                
                                                <li class="next list-inline-item float-end">
                                                    <button type="button" class="btn btn-info">Next <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                </li>
                                                <li class="previous list-inline-item float-end mx-2">
                                                    <button type="button" class="btn btn-info"><i class="mdi mdi-arrow-left me-1 mx-2"></i> Previous</button>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" id="finish-2">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                        <h3 class="mt-0">Thank you !</h3>

                                                        <p class="w-75 mb-2 mx-auto">At this point be sure that any data provided will be submitted and it would be decline if it is malicious, or breach the rules of data protection standard. and also ethics of this honorable institution, if you agree affirm it.
                                                        </p>

                                                        <div class="mb-3">
                                                            <div class="form-check d-inline-block">
                                                                <input type="checkbox" class="form-check-input" id="customCheck3" checked="false">
                                                                <label class="form-check-label" for="customCheck3">I agree with the Terms and Conditions</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                            <ul class="pager wizard mb-0 list-inline mt-1">

                                                <li class="list-inline-item float-end">
                                                    <button type="button" class="btn btn-success" style="display: none" id="send-data">Send Data</button>
                                                </li>
                                                <li class="previous list-inline-item float-end mx-2">
                                                    <button type="button" class="btn btn-info"><i class="mdi mdi-arrow-left me-1 mx-2"></i> Previous</button>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> 

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<script src="{{ asset('root/dek/bower_components/jquery/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

    


@section('additional-js')
    <script src="{{ asset('root/hyp/assets/vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('root/hyp/assets/js/pages/demo.form-wizard.js') }}"></script>
    <script src="{{ asset('root/js/multiple-select.js') }}"></script>
@endsection

<script>

    function displayButtons() {
        var isValid = true;

        // Check if any of the select elements has a null or empty value
        if ($('#N1').val() === null || $('#N1').val() === '' ||
            $('#N2').val() === null || $('#N2').val() === '' ||
            $('#N3').val() === null || $('#N3').val() === '' ||
            $('#N4').val() === null || $('#N4').val() === '' ||
            $('#P1').val() === null || $('#P1').val() === '' ||
            $('#P2').val() === null || $('#P2').val() === '') {
            isValid = false;
        }

        if (isValid) {
            $('#btnImport, #save-bulk').show();
        } else {
            $('#btnImport, #save-bulk').hide();
        }
    }

    setInterval(function () {
        displayButtons();
    }, 3000);


    $(document).ready(function ()
    {
        var dataTable = "";
        var extable = "";
        var counter = 0;
        $("#religion").val("");
        $('#customCheck3').prop('checked', false);


        //DATE OF BIRTH
        var currentYear = new Date().getFullYear();
        var maxBirthYear = currentYear - 16;
        var maxDate = maxBirthYear + "-01-01";
        $('#date_of_birth').attr('max', maxDate);

        //CARD EXPIRY
        var currentDate = new Date();
        var minExpiryDate = currentDate.getFullYear() + '-' + 
        ('0' + (currentDate.getMonth() + 1)).slice(-2) + '-' +'01';
        $('#driver_license_expire_date').attr('min', minExpiryDate);


        //GETTING COUNTRIES
        $.ajax({
            url: '{{ route("fetch-country") }}',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                var countrySelect = $('.country-select');

                countrySelect.empty();
                countrySelect.append($('<option>', {
                    value: '',
                    text: '--- Select an Option ---',
                    selected: 'selected',
                    disabled: 'disabled'
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

        //GETTING BANKS
        $.ajax({
            url: '{{ route("fetch-bank") }}',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                let countrySelect = $('#bank, #P1');

                countrySelect.empty();
                countrySelect.append($('<option>', {
                    value: '',
                    text: '--- Select an Option ---',
                    selected: 'selected',
                    disabled: 'disabled'
                }));

                $.each(data.banks, function (key, value) {
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
                let countrySelect = $('#role, #P2');

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

        
        //GETTING ALL DROP DOWN FOR HOME ADDRESS =======================================================
        function populateRegions(countryId) {
            $.ajax({
                url: '{{ route("fetch-region") }}',
                type: 'GET',
                data: { country_id: countryId },
                dataType: 'json',
                success: function (data) {
                    $('#region, #N2').empty();
                    $('#region, #N2').append($('<option>', {
                        value: '',
                        text: '--- Select an option ----',
                        selected: 'selected',
                        disabled: 'disabled'
                    }));
                    $.each(data.regions, function (key, value) {
                        $('#region, #N2').append($('<option>', {
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
        function populateDistricts(countryId) {
            $.ajax({
                url: '{{ route("fetch-district") }}',
                type: 'GET',
                data: { region_id: countryId },
                dataType: 'json',
                success: function (data) {
                    $('#district, #N3').empty();
                    $('#district, #N3').append($('<option>', {
                        value: '',
                        text: '--- Select an option ----',
                        selected: 'selected',
                        disabled: 'disabled'
                    }));
                    $.each(data.districts, function (key, value) {
                        $('#district, #N3').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    });
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.error("AJAX request failed: " + textStatus + ", " + errorThrown);
                }
            });
        }
        function populateTowns(countryId) {
            $.ajax({
                url: '{{ route("fetch-town") }}',
                type: 'GET',
                data: { district_id: countryId },
                dataType: 'json',
                success: function (data) {
                    $('#hometown, #N4').empty();
                    $('#hometown #N4').append($('<option>', {
                        value: '',
                        text: '--- Select an option ----',
                        selected: 'selected',
                        disabled: 'disabled'
                    }));
                    $.each(data.towns, function (key, value) {
                        $('#hometown, #N4').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    });
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.error("AJAX request failed: " + textStatus + ", " + errorThrown);
                }
            });
        }
        $('#nationality, #N1').on('change', function () {
            let selectedCountryId = $(this).val();
            if (selectedCountryId) {
                populateRegions(selectedCountryId);
            }
        });
        $('#region, #N2').on('change', function () {
            let selectedCountryId = $(this).val();
            if (selectedCountryId) {
                populateDistricts(selectedCountryId);
            }
        });
        $('#district, #N3').on('change', function () {
            let selectedCountryId = $(this).val();
            if (selectedCountryId) {
                populateTowns(selectedCountryId);
            }
        });
        //  END OF FUNCTION  ================================================================


        //GETTING ALL DROP DOWN FOR PLACE OF BIRTH ===========================================
        function RegionOfBirth(countryId) {
            $.ajax({
                url: '{{ route("fetch-region") }}',
                type: 'GET',
                data: { country_id: countryId },
                dataType: 'json',
                success: function (data) {
                    $('#region_of_birth').empty();
                    $('#region_of_birth').append($('<option>', {
                        value: '',
                        text: '--- Select an option ----',
                        selected: 'selected',
                        disabled: 'disabled'
                    }));
                    $.each(data.regions, function (key, value) {
                        $('#region_of_birth').append($('<option>', {
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
        function DistrictOfBirth(countryId) {
            $.ajax({
                url: '{{ route("fetch-district") }}',
                type: 'GET',
                data: { region_id: countryId },
                dataType: 'json',
                success: function (data) {
                    $('#district_of_birth').empty();
                    $('#district_of_birth').append($('<option>', {
                        value: '',
                        text: '--- Select an option ----',
                        selected: 'selected',
                        disabled: 'disabled'
                    }));
                    $.each(data.districts, function (key, value) {
                        $('#district_of_birth').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    });
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.error("AJAX request failed: " + textStatus + ", " + errorThrown);
                }
            });
        }
        function TownOfBirth(countryId) {
            $.ajax({
                url: '{{ route("fetch-town") }}',
                type: 'GET',
                data: { district_id: countryId },
                dataType: 'json',
                success: function (data) {
                    $('#place_of_birth').empty();
                    $('#place_of_birth').append($('<option>', {
                        value: '',
                        text: '--- Select an option ----',
                        selected: 'selected',
                        disabled: 'disabled'
                    }));
                    $.each(data.towns, function (key, value) {
                        $('#place_of_birth').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    });
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.error("AJAX request failed: " + textStatus + ", " + errorThrown);
                }
            });
        }

        $('#country_of_birth').on('change', function () {
            let selectedCountryId = $(this).val();
            if (selectedCountryId) {
                RegionOfBirth(selectedCountryId);
            }
        });
        $('#region_of_birth').on('change', function () {
            let selectedCountryId = $(this).val();
            if (selectedCountryId) {
                DistrictOfBirth(selectedCountryId);
            }
        });
        $('#district_of_birth').on('change', function () {
            let selectedCountryId = $(this).val();
            if (selectedCountryId) {
                TownOfBirth(selectedCountryId);
            }
        });
        //  END OF FUNCTION  ================================================================


        //GETTING ALL DROP DOWN FOR CURRENT ADDRESS ===========================================
        function CurrentRegion(countryId) {
            $.ajax({
                url: '{{ route("fetch-region") }}',
                type: 'GET',
                data: { country_id: countryId },
                dataType: 'json',
                success: function (data) {
                    $('#current_region').empty();
                    $('#current_region').append($('<option>', {
                        value: '',
                        text: '--- Select an option ----',
                        selected: 'selected',
                        disabled: 'disabled'
                    }));
                    $.each(data.regions, function (key, value) {
                        $('#current_region').append($('<option>', {
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
        function CurrentDistrict(countryId) {
            $.ajax({
                url: '{{ route("fetch-district") }}',
                type: 'GET',
                data: { region_id: countryId },
                dataType: 'json',
                success: function (data) {
                    $('#current_district').empty();
                    $('#current_district').append($('<option>', {
                        value: '',
                        text: '--- Select an option ----',
                        selected: 'selected',
                        disabled: 'disabled'
                    }));
                    $.each(data.districts, function (key, value) {
                        $('#current_district').append($('<option>', {
                            value: value.id,
                            text: value.name
                        }));
                    });
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.error("AJAX request failed: " + textStatus + ", " + errorThrown);
                }
            });
        }
        $('#current_country').on('change', function () {
            let selectedCountryId = $(this).val();
            if (selectedCountryId) {
                CurrentRegion(selectedCountryId);
            }
        });
        $('#current_region').on('change', function () {
            let selectedCountryId = $(this).val();
            if (selectedCountryId) {
                CurrentDistrict(selectedCountryId);
            }
        });
        //  END OF FUNCTION  ================================================================

        


        $('#btnSingle').click(function(){
            $('#single-title').text('Creating New Records');
            $('#single-form')[0].reset();
            $('#my-modal').modal('show');
            $('#customCheck3').prop('checked', false);
        });

        $('#btnBatch').click(function(){
            $('#batch-title').text('Adding Workers in Bulk');
            $('#bulk-form')[0].reset();
            $('#batch-modal').modal('show');
        });


        //PENDING CASUALS
        dataTable = $('#pending-table').DataTable({
            ajax: {
                url: '{{ route("user.view-permanent-workers") }}',
                dataSrc: 'permanents'
            },
            columns: [
                {
                    data: null,
                    className: 'control',
                    orderable: false,
                    defaultContent: '',
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        return ++counter;
                    }
                },
                {
                    data: 'imgBase64',
                    render: function(data) {
                        return '<img class="gallery-img rounded-circle" src="data:image/jpeg;base64,' + data + '" width="50" height="50" />';
                    }
                },
                {
                    data: null,
                    render: function (data, type, row) {
                        return '<div class="dropdown">' +
                            '<a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">' +
                            '<i class="mdi mdi-dots-vertical"></i>' +
                            '</a>' +
                            '<div class="dropdown-menu dropdown-menu-end">' +
                                '<a href="#" class="dropdown-item"><span class="mdi mdi-lock"></span> Contract Status</a>' +
                                '<a href="#" class="dropdown-item"><span class="mdi mdi-bank"></span> Sustain Account</a>' +
                                '<a href="#" class="dropdown-item"><span class="mdi mdi-printer"></span> Print Form</a>' +
                                '<a href="#" class="dropdown-item text-danger"><span class="mdi mdi-delete"></span> Remove Person</a>' +
                                '<a href="#" class="dropdown-item text-danger"><span class="mdi mdi-account-lock"></span> Disable Account</a>' +
                                '<a href="#" class="dropdown-item"><span class="mdi mdi-account-edit"></span> Edit Personal Information</a>' +
                                '<a href="#" class="dropdown-item"><span class="mdi mdi-pencil"></span> Edit Contact Information</a>' +
                                '<a href="#" class="dropdown-item"><span class="mdi mdi-pencil"></span> Edit Emergency Information</a>' +
                                '<a href="#" class="dropdown-item"><span class="mdi mdi-pencil"></span> Edit Other Information</a>';
                            '</div>' +
                            '</div>';
                    }
                },
                { data: 'first_name' },
                { data: 'last_name' },
                { data: 'initials' },
                { data: 'nickname' },
                { data: 'gender' },
                { data: 'marital_status' },
                { data: 'religion' },
                { data: 'blood' },
                { data: 'nationality' },
                { data: 'region' },
                { data: 'district' },
                { data: 'hometown' },
                { data: 'ethnicity' },
                { data: 'languages' },
                { data: 'date_of_birth' },
                { data: 'country_of_birth' },
                { data: 'region_of_birth' },
                { data: 'district_of_birth' },
                { data: 'place_of_birth' },
                { data: 'bank' },
                { data: 'account_number' },
                { data: 'ssnit' },
                { data: 'phone' },
                { data: 'tel' },
                { data: 'email' },
                { data: 'current_district' },
                { data: 'current_region' },
                { data: 'landmark' },
                { data: 'gps' },
                { data: 'emergency_name' },
                { data: 'emergency_address' },
                { data: 'emergency_phone' },
                { data: 'emergency_relationship' },
                { data: 'role' },
                { data: 'designation' },
                { data: 'national_identities' },
                { data: 'id_numbers' },
                { data: 'education_level' },
                { data: 'school' },
                { data: 'location' },
                { data: 'certification' },
                { data: 'driver_license_name' },
                { data: 'driver_license_number' },
                { data: 'driver_license_expire_date' },
                { data: 'driver_license_class' },
                { data: 'driver_license_type' },
                { data: 'health_conditions' },
                { data: 'allergies' },
                { data: 'tag_number' },
                { data: 'track' },
                {
                    data: 'status',
                    render: function(data, type, row) {
                        return `<span class="badge badge-outline-${data === 'Active' ? 'success' : 'danger'}">${data}</span>`;
                    },
                },
                
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

        //EXPORTING TABLES
        extable = $('#exporting-table').DataTable({
            "columnDefs": [
                {
                    "targets": [1, 2, 7, 8, 9, 10, 11],
                    "visible": true
                }
            ]
        });
        
        // EXPORTING THE EXCEL TEMPLATE
        $('#btnExport').on('click', function () {

            var message = 'Are you sure you want to export this excel template confirm to export ... Also make sure you dont add up any column, also if you want to leave a column blank, replace it with <strong> 0 </strong> intead of blank';
            Swal.fire({
                title: 'Confirm Export',
                html: message,
                icon: 'info',
                showCancelButton: true,
                confirmButtonText: 'Continue, Export',
                cancelButtonText: 'No, cancel',
                cancelButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) 
                {
                    // let columnsToExport = [1, 3, 4, 5];
                    let columnsToExport = Array.from({ length: 49 }, (_, index) => index + 1);
                    
                    new $.fn.dataTable.Buttons(extable, {
                        buttons: [
                            {
                                extend: 'excel',
                                text: 'Export to Excel',
                                className: 'btn btn-primary mb-2 btn-sm rounded-2',
                                exportOptions: {
                                    columns: columnsToExport
                                }
                            }
                        ]
                    });
                    extable.button(0).trigger();

                } else {
                    console.log("Export cancel");
                }
            });
        });
        
        //IMPORTING EXCEL FILE
        $('#btnImport').on('click', function () {
            var fileInput = $('<input type="file" style="display:none" />');
            $('body').append(fileInput);
            fileInput.trigger('click');
            fileInput.on('change', function (e) {
                var file = e.target.files[0];
                var reader = new FileReader();
                reader.onload = function (e) {
                    var data = new Uint8Array(e.target.result);
                    var workbook = XLSX.read(data, { type: 'array' });
                    var sheetName = workbook.SheetNames[0];
                    var sheet = workbook.Sheets[sheetName];
                    var dataArray = XLSX.utils.sheet_to_json(sheet, { header: 1, range: 2 });
                    var tbody = $('#exporting-table tbody');
                    tbody.empty();
                    $.each(dataArray, function (index, row) {
                        var tr = $('<tr>');
                        $('<td>').text(index + 1).appendTo(tr);
                        $.each(row, function (key, value) {
                            // Replace values based on column indices
                            switch (key) {
                                case 8:
                                case 15:
                                    value = $('#N1').val();
                                    break;
                                case 26:
                                case 9:
                                case 16:
                                    value = $('#N2').val();
                                    break;
                                case 25:
                                case 10:
                                case 17:
                                    value = $('#N3').val();
                                    break;
                                case 11:
                                case 18:
                                    value = $('#N4').val();
                                    break;
                                case 19:
                                    value = $('#P1').val();
                                    break;
                                case 33:
                                    value = $('#P2').val();
                                    break;
                                case 35:
                                    value = 'Asomasi';
                                    break;
                                case 14:
                                case 42:
                                    value = '1999-10-10';
                                    break;
                                // Add more cases as needed for other columns
                            }
                            $('<td>').text(value).appendTo(tr);
                        });
                        tr.appendTo(tbody);
                    });
                    fileInput.remove();
                };
                reader.readAsArrayBuffer(file);
            });
            fileInput.on('focusout', function () {
                fileInput.remove();
            });
        });


        $('#customCheck3').change(function () 
        {
            if ($(this).prop('checked')) {
                $('#send-data').show();
            } else {

                $('#send-data').hide();
            }
        });

        //SENDING DATA SINGLE
        $('#send-data').click(function (e) {
            e.preventDefault();

            var buttonElement = $(this);
            buttonElement.html('<i class="fa fa-spinner fa-spin"></i> Please wait... ').attr('disabled', true);

            var formData = new FormData($('#single-form')[0]);
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var headers = {
                'X-CSRF-TOKEN': csrfToken
            };

            $.ajax({
                url: '{{ route("add-casual") }}',
                type: 'POST',
                data: formData,
                headers: headers,
                processData: false,
                contentType: false,
                success: function (response) {
                    buttonElement.prop('disabled', false).text('Send Data').css('cursor', 'pointer');
                    $('#single-form')[0].reset();
                    $('#my-modal').modal('hide');
                    $('#image-preview').hide();
                    counter = 0;
                    dataTable.ajax.reload();
                    table.ajax.reload();

                    if (response.status === 'success') {
                        Swal.fire({ icon: 'success', title: 'Good Job', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', title: 'Error', text: response.message });
                    }
                },
                error: function (xhr, status, error) {
                    buttonElement.prop('disabled', false).text('Send Data').css('cursor', 'pointer');

                    Swal.fire({ icon: 'error', title: 'Error', text: 'AJAX request failed: ' + textStatus + ', ' + errorThrown });
                }
            });
        });

        //SENDING DATA IN BULK
        $('#save-bulk').click(function (e) {
            e.preventDefault();

            var buttonElement = $(this);
            buttonElement.html('<i class="fa fa-spinner fa-spin"></i> Please wait... ').attr('disabled', true);

            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var headers = {
                'X-CSRF-TOKEN': csrfToken
            };
            var tableData = [];
            $('#exporting-table tbody tr').each(function () {
                var rowData = {};
                $(this).find('td').each(function (index, td) {
                    var columnName = $('#exporting-table thead th').eq(index).text();
                    rowData[columnName] = $(td).text();
                });
                tableData.push(rowData);
            });

            var formData = new FormData();
            formData.append('tableData', JSON.stringify(tableData));

            $.ajax({
                url: '{{ route("add-casual-bulk") }}',
                type: 'POST',
                data: formData,
                headers: headers,
                processData: false,
                contentType: false,
                success: function (response) {
                    buttonElement.prop('disabled', false).text('Proceed').css('cursor', 'pointer');
                    $('#bulk-form')[0].reset();
                    $('#exporting-table').DataTable().clear().draw();
                    $('#batch-modal').modal('hide');
                    counter = 0;
                    dataTable.ajax.reload();
                    table.ajax.reload();

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

        $('#first_name, #last_name').on('input', function () {
            var initials = ($('#first_name').val() + ' ' + $('#last_name').val())
                .split(' ')
                .map(function (word) {
                    return word.charAt(0);
                })
                .join('')
                .toUpperCase();

            $('#initials').val(initials);
        });

        //PICTURE CHANGE
        $('#picture').change(function () 
        {
            const file = this.files[0];
            if (file && file.type.startsWith('image/') && file.size <= 2 * 1024 * 1024) {
                displayImagePreview(file);
            } else {
                showAlert('Invalid File', 'Please select a valid image file (max 2MB).');
                this.value = '';
                $('#image-preview').hide();
            }
        });

        function showAlert(title, message) {
            Swal.fire({
                icon: 'error',
                title: title,
                text: message,
            });
        }

        function displayImagePreview(file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                $('#image-preview').attr('src', e.target.result).show();
            };
            reader.readAsDataURL(file);
        }

    });
    
</script>

@endsection



      
