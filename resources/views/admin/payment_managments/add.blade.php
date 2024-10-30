@extends('admin.layout.layout')
@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<style type="text/css">
    .input-group.change-passwords span {
        position: absolute;
        right: 0px;
        z-index: 9;
        padding: 10px;
    }

    .input-group.change-passwords {
        position: relative;
    }
</style>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>
            <!-- end page title -->
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$errors->first()}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" id="form-data" action="{{$saveurl}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ isset($getdata->id) ? $getdata->id : '' }}"
                                        id="data_id">
                                        <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Service <span class="text-danger">*</span></label>
                                        <select class="form-control" name="service">
                                            <option value="">Select Service</option>
                                            @foreach($services as $service)
                                            <option value="{{$service->id}}" {{isset($getdata->service) && $get
                                            ->service == $service->id ? 'selected' : ''}}>{{$service->title}}</option>    
                                            @endforeach
                                            </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Vehicles <span class="text-danger">*</span></label>
                                        <select class="form-control" name="vehicles">
                                            <option value="">Select vehicle</option>
                                            @foreach($vehicles as $vehicle)
                                            <option value="{{$vehicle->id}}" {{isset($getdata->vehicle) && $get
                                            ->vehicle == $vehicle->id ? 'selected' : ''}}>{{$vehicle->vehicle_name}}</option>    
                                            @endforeach
                                            </select>
                                    </div>

                                    
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Capacity<span class="text-danger">*</span></label>
                                            <input type="number" name="capacity"
                                                value="{{ old('capacity', isset($getdata->capacity) ? $getdata->capacity : '') }}"
                                                class="form-control" placeholder="Enter capacity">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Base Fare<span class="text-danger">*</span></label>
                                            <input type="number" name="base_fare"
                                                value="{{ old('base_fare', isset($getdata->base_fare) ? $getdata->base_fare : '') }}"
                                                class="form-control" placeholder="Enter base fare">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Minimum Fare <span class="text-danger">*</span></label>
                                            <input type="number" name="minimum_fare"
                                                value="{{ old('minimum_fare', isset($getdata->minimum_fare) ? $getdata->minimum_fare : '') }}"
                                                class="form-control" placeholder="Enter minimum fare">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Minimum Distance <span class="text-danger">*</span></label>
                                            <input type="number" name="minimum_distance"
                                                value="{{ old('minimum_distance', isset($getdata->minimum_distance) ? $getdata->minimum_distance : '') }}"
                                                class="form-control" placeholder="Enter minimum distance">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Per Distance <span class="text-danger">*</span></label>
                                            <input type="number" name="per_distance"
                                                value="{{ old('per_distance', isset($getdata->per_distance) ? $getdata->per_distance: '') }}"
                                                class="form-control" placeholder="Enter per distance ">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Per Minute Drive <span class="text-danger">*</span></label>
                                            <input type="number" name="per_minute_drive"
                                                value="{{ old('per_minute_drive', isset($getdata->per_minute_drive) ? $getdata->per_minute_drive: '') }}"
                                                class="form-control" placeholder="Enter per minute drive">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Waiting Time Limit(in minutes) <span class="text-danger">*</span></label>
                                            <input type="number" name="waiting_time_limit"
                                                value="{{ old('waiting_time_limit', isset($getdata->waiting_time_limit) ? $getdata->waiting_time_limit: '') }}"
                                                class="form-control" placeholder="Enter waiting time limit">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Per Minute Wait <span class="text-danger">*</span></label>
                                            <input type="number" name="per_minute_wait"
                                                value="{{ old('per_minute_wait', isset($getdata->per_minute_wait) ? $getdata->per_minute_wait: '') }}"
                                                class="form-control" placeholder="Enter per minute wait">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Cancellation Fee  <span class="text-danger">*</span></label>
                                            <input type="number" name="cancellation_fee"
                                                value="{{ old('cancellation_fee', isset($getdata->cancellation_fee) ? $getdata->cancellation_fee: '') }}"
                                                class="form-control" placeholder="Enter cancellation fee">
                                        </div>
                                        <!-- <div class="col-md-6 mb-3">
                                            <label class="form-label">Payment Method<span class="text-danger">*</span></label>
                                            <select class="form-control" name="status">
                                                <option value="">Select Payment Method</option>
                                                <option value="1">Cash</option>
                                                <option value="2">Wallet</option>
                                                <option value="3">Both</option>
                                            
                                            </select>
                                        </div> -->
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Commission Type<span class="text-danger">*</span></label>
                                            <select class="form-control" name="commission_type">
                                                <option value="">Select Commission Type</option>
                                                <option value="1">Fixed</option>
                                                <option value="2">Percentage</option>
                                                
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Admin Commission<span class="text-danger">*</span></label>
                                            <input type="number" name="admin_commission"
                                                value="{{ old('admin_commission', isset($getdata->admin_commission) ? $getdata->admin_commission: '') }}"
                                                class="form-control" placeholder="Enter admin commission">
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Description <span class="text-danger">*</span></label>
                                        <textarea name="description" class="form-control" placeholder="Enter vehicle number">{{ old('description', isset($getdata->description) ? $getdata->description : '') }}</textarea>
                                    </div>

                                    <?php
                                    
                                    
                                    if (!empty($getdata->image)) {
                                        $profile = url($getdata->image);
                                    } else {
                                        $profile = '';
                                    }
                                    ?>

                                    <div class="row">
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Profile Image</label><br>
                                                <input type="file" id="input-file-now" accept="image/*"
                                                    name="image" class="dropify"
                                                    data-default-file="{{ $profile }}" />
                                            </div>
                                        </div>

                                    </div><br>
                                   

                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
    <script src="https://cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
    <script>
        $("#form-data").validate({
            onfocusout: function(element) {
                $(element).valid();
            },
            highlight: function(element, errorClass) {

            },

            rules: {
                    'service': {
                        required: true
                    },
                    'vehicles': {
                        required: true
                    },
                    'base_fare': {
                        required: true,
                    },
                    
                },
                messages: {
                    'service': "Please select service.",
                    'vehicles': "Please select vehicles.",
                    'base_fare': "Please Enter base fare.",
                    
                },

            errorPlacement: function(error, element) {
                if (element.attr("name") == "data[Payment][phone]") {
                    error.insertAfter(".error-placement");
                } else {
                    error.insertAfter(element);
                }
            },

            submitHandler: function(form) {

                if (this.valid()) {
                    $('.confirm-reservation-cart').attr("disabled", "disabled");

                    form.submit();
                }
            },
        });
    </script>
    <script type="text/javascript">
            $(".toggle-password").click(function() {

                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        </script>
    @endsection