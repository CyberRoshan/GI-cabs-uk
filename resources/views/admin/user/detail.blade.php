@extends('admin.layout.layout')
@section('content')
<!-- <style type="text/css">
    .card {
    margin-bottom: 24px;
    box-shadow: 0 0.75rem 1.5rem rgb(18 38 63 / 3%)!important;
    background-color: inherit;
}
</style> -->


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">{{$title}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                                <!-- <li class="breadcrumb-item">{{$title}}</li> -->
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">


                                <div class="col-xl-6">
                                    <div class="mt-4 mt-xl-3">
                                        <a href="javascript: void(0);" class="text-primary"></a>
                                        <h4 class="mt-1 mb-3"><img src="{{url(isset($user->profile)?$user->profile:'public/noimage.png')}}" alt="logo" height="50" width="50" class="rounded-circle" />&nbsp;&nbsp;{{$user->name}}</h4>




                                    </div>
                                </div>
                            </div>



                            <div class="mt-5">
                                <!-- <h5 class="mb-3">Specifications :</h5> -->

                                <div class="table-responsive">
                                    <table class="table mb-0 table-bordered">
                                        <tbody>

                                            <tr>
                                                <th scope="row">First Name</th>
                                                <td>{{isset($user->name)?$user->name:'N/A'}}</td>
                                            </tr>
                                            <!-- <tr>
                                                <th scope="row">Middle Name</th>
                                                <td>{{isset($user->middle_name)?$user->middle_name:'N/A'}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Last Name</th>
                                                <td>{{isset($user->last_name)?$user->last_name:'N/A'}}</td>
                                            </tr> -->
                                            <tr>
                                                <th scope="row">Email Address</th>
                                                <td>{{isset($user->email)?$user->email:'N/A'}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Phone Number</th>
                                                <td>{{isset($user->country_code)?'+'.$user->country_code.' '.$user->mobile:$user->mobile}}</td>
                                            </tr>
                                            <!-- <tr>
                                                <th scope="row">DOB</th>
                                                <td>{{isset($user->dob)?$user->dob:'N/A'}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Gender</th>
                                                <td>{{isset($user->gender)?$user->gender:'N/A'}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Create Id</th>
                                                <td>{{ $user['created_at']->format('d M Y') }}</td>
                                            </tr> -->

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end Specifications -->



                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- Total Booking -->
            <!-- <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h4 class="mb-sm-0 font-size-18">My Sessions</h4>
                            </div><br>
                            <table class="table table-bordered dt-responsive nowrap w-100 table_data">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Practitioner</th>
                                        <th>Specialities</th>
                                        <th>Sessions Date</th>
                                        <th>Sessions Time</th>
                                        <th>Sessions Duration</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- end col -->
            <!-- <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h4 class="mb-sm-0 font-size-18">My Purchase Courses</h4>
                            </div><br>
                            <table class="table table-bordered dt-responsive nowrap w-100 table_data">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Course name</th>
                                        <th>Duration</th>
                                        <th>Price</th>
                                        <th>Rating</th>


                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>
    $(document).ready(function() {
        var table = $('.table_data').DataTable({
            "bFilter": false,
        });

    });
</script>
@endsection