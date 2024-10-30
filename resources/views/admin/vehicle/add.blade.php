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
                                    <div class="mb-3">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input type="text" name="vehicle_name"
                                            value="{{ old('vehicle_name', isset($getdata->vehicle_name) ? $getdata->vehicle_name : '') }}"
                                            class="form-control" placeholder="Enter name">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Vehicle Brand <span class="text-danger">*</span></label>
                                            <input type="text" name="vehicle_brand"
                                                value="{{ old('vehicle_brand', isset($getdata->vehicle_brand) ? $getdata->vehicle_brand : '') }}"
                                                class="form-control" placeholder="Enter vehicle brand">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Vehicle Number <span class="text-danger">*</span></label>
                                            <input type="text" name="vehicle_number"
                                                value="{{ old('vehicle_number', isset($getdata->vehicle_number) ? $getdata->vehicle_number : '') }}"
                                                class="form-control" placeholder="Enter vehicle number ">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Vehicle Type <span class="text-danger">*</span></label>
                                            <input type="text" name="vehicle_type"
                                                value="{{ old('vehicle_type', isset($getdata->vehicle_type) ? $getdata->vehicle_type : '') }}"
                                                class="form-control" placeholder="Enter vehicle type ">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Vehicle Color <span class="text-danger">*</span></label>
                                            <input type="text" name="vehicle_color"
                                                value="{{ old('vehicle_color', isset($getdata->vehicle_color) ? $getdata->vehicle_color : '') }}"
                                                class="form-control" placeholder="Enter vehicle color ">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Vehicle Model <span class="text-danger">*</span></label>
                                            <input type="text" name="vehicle_model"
                                                value="{{ old('vehicle_model', isset($getdata->vehicle_model) ? $getdata->vehicle_model: '') }}"
                                                class="form-control" placeholder="Enter vehicle number ">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Vehicle Year <span class="text-danger">*</span></label>
                                            <input type="text" name="vehicle_year"
                                                value="{{ old('vehicle_year', isset($getdata->vehicle_year) ? $getdata->vehicle_year: '') }}"
                                                class="form-control" placeholder="Enter vehicle year ">
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
                    'vehicle_name': {
                        required: true
                    },
                    'vehicle_brand': {
                        required: true
                    },
                    'vehicle_number': {
                        required: true,
                    },
                    'vehicle_type': {
                        required: true,
                    },
                    'vehicle_color': {
                        required: true,
                    },
                    'vehicle_model': {
                        required: true,
                    },
                    'vehicle_year': {
                        required: true,
                    },
                    
                   
                },
                messages: {
                    'vehicle_name': "Please Enter vehicle name.",
                    'vehicle_brand': "Please Enter vehicle brand.",
                    'vehicle_number': "Please Enter vehicle number.",
                    'vehicle_type': "Please Enter vehicle type.",
                    'vehicle_color': "Please Enter vehicle color.",
                    'vehicle_model': "Please Enter vehicle model.",
                    'vehicle_year': "Please Enter vehicle year.",
                    
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