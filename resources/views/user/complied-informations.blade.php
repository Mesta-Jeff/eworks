

@extends('layouts.main_layout')

@section('title', 'Contract Forms')


@section('content')
    <!-- Start Content-->
<div class="container-fluid" style="background-color: white">

    <style> 
        .tables{
            font-family: Segoe UI, Tahoma, Geneva, 'Verdana', sans-serif;
            font-size: 16px;
            font-weight: 600;
        }
        .font {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            font-size: 1.4rem;
        }
        .passport{
            margin-top: 135px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .img-frame {
            width: 35mm;
            height: 45mm;
            border: 1px solid #8b8b8b;
            overflow: hidden;
            box-sizing: border-box;
            padding: 0;
        }

        .img-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            margin: 0;
            padding: 0;
            display: block;
        }

        .seters {
            margin-left: 180px;
        }

        .but-line-down{
            height: 4px;
            margin-top: 210px;
            background-color: #14044e;
        }

        .but-line-top-large{
            margin-top: 10px;
            background-color: #14044e;
            height: 20px;
        }
        .but-line-top-small{
            margin-top: 3px;
            margin-bottom: 30px;
            background-color: #ffb109;
            height: 4px;
        }

        .white-gap{
            margin: 70px;
        }

        .head-top{
            height: 20px;
            background-color: #14044e;
            margin-bottom: 10px;
        }
        .head-down{
            height: 4px;
            background-color: #ffb109;
            margin-top: 10px;
        }

        .page-size {
            width: 210mm;
            height: 260mm;
            margin: 0;
            padding: 0;
        }
 
        .tags{
            color: #14044e;
            font-weight: bold;
        }


        @media print {
                .seters {
                margin-left: 10px;
            }
        }

    </style>
    
    <!-- start page title -->
    <div class="row mt-2">
        <hr style="margin-top: -20px;">
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card shadow-none">
                <div class="card-body">

                    {{-- FRONT PAGE --}}
                    <section>
                        <div class="clearfix">
                            <div class="text-center mt-3">
                                <img src="{{ asset('root/hyp/assets/images/favicon.ico') }}" alt="logo" height="80">
                            </div>
                        </div>
    
                        <div class="col-md-12 text-center but-line-top-large"></div>
                        <div class="col-md-12 text-center but-line-top-small"></div>
    
                        <!-- Invoice Detail-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-center mt-1">
                                    <strong class="font">SKAI-MOUNT CONTRACT AGREEMENT FORMS</strong>
                                </div>
                        </div>
                        
    
                        <div class="container mt-4">
                            <div class="row justify-content-center">
                                <div class="col-md-6 text-center">
                                    <div class="row passport">
                                        <div class="text-center img-frame">
                                            <img src="{{ asset('root/hyp/assets/images/users/avatar-8.jpg') }}" alt=".">
                                        </div>
                                    </div>
    
                                    {{-- <table class="table p-4 tables seters">
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-end">Name</th>
                                                <td class="text-start">NYINAKU AYISI SOLOMON</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-end">Tag No</th>
                                                <td class="text-start">CTR500256685</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-end">Role</th>
                                                <td class="text-start">CASUAL WORKER</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-end">Account No</th>
                                                <td class="text-start">8800214569002157</td>
                                            </tr>
                                        </tbody>
                                    </table> --}}
                                    <div class="row mt-4 tables">
                                        <div class="col-md-6 seters">
                                            <div class="mb-3 text-center">
                                                <b class="pe-3">Name:</b>
                                                <span>NYINAKU AYISI SOLOMON</span>
                                            </div>
                                            <div class="mb-3 text-center">
                                                <b class="pe-3">TAG NO:</b>
                                                <span>CTR500256685</span>
                                            </div>
                                            <div class="mb-3 text-center">
                                                <b class="pe-3">Role:</b>
                                                <span>CASUAL WORKER</span>
                                            </div>
                                            <div class="text-center">
                                                <b class="pe-3">Account No:</b>
                                                <span>8800214569002157</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-12 text-center but-line-down"></div>
                         
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="clearfix pt-3">
                                    <small>
                                        All accounts are to be paid within 7 days from receipt of
                                        invoice. To be paid by cheque or credit card or direct payment
                                        online. If account is not paid within 7 days the credits details
                                        supplied as confirmation of work undertaken will be charged the
                                        agreed quoted fee noted above.
                                    </small>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-12 text-center white-gap"></div>
                    </section>
                    
                    {{-- SECOND PAGE --}}
                    <section>
                        <small id="times" class="text-uppercase tags"></small>
                        <small class="float-end tags">CTR500256685 &nbsp; NYINAKU AYISI SOLOMON</small>
                        <div class="col-md-12 text-center head-top"></div>
                        <div class="page-size">
                            
                        </div>
                        <div class="col-md-12 text-center head-down"></div>
                    </section>


                    <div class="d-print-none mt-4">
                        <div class="text-end">
                            <a href="javascript:window.print()" class="btn btn-primary"><i class="mdi mdi-printer"></i> Print</a>
                        </div>
                    </div>   

                </div>
            </div>
        </div>
    </div>

</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var now = new Date();
        var year = now.getFullYear();
        var month = (now.getMonth() + 1).toString().padStart(2, '0');
        var day = now.getDate().toString().padStart(2, '0');
        var hours = now.getHours().toString().padStart(2, '0');
        var minutes = now.getMinutes().toString().padStart(2, '0');
        var ampm = hours >= 12 ? 'pm' : 'am';

        hours = hours % 12;
        hours = hours ? hours : 12;

        var formattedDate = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ' ' + ampm;

        // Using pure JavaScript
        var timesElement = document.getElementById('times');
        if (timesElement) {
            timesElement.textContent = formattedDate;
        }

        // Using jQuery
        $('#times').text(formattedDate);
    });
</script>




@endsection



      
