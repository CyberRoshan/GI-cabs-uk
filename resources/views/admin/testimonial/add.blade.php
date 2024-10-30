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
                                        <input type="text" name="name"
                                            value="{{ old('name', isset($getdata->name) ? $getdata->name : '') }}"
                                            class="form-control" placeholder="Enter name">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">designation <span class="text-danger">*</span></label>
                                        <input type="text" name="designation"
                                            value="{{ old('designation', isset($getdata->designation) ? $getdata->designation : '') }}"
                                            class="form-control" placeholder="Enter designation">
                                    </div>

                                    
                                    <div class="mb-3">
                                        <label class="form-label">Review <span class="text-danger">*</span></label>
                                        <textarea name="review" class="form-control " placeholder="Enter review">{{ old('review', isset($getdata->review) ? $getdata->review : '') }}</textarea>
                                    </div>

                                    <?php
                                    
                                    
                                    if (!empty($getdata->profile)) {
                                        $profile = url($getdata->profile);
                                    } else {
                                        $profile = '';
                                    }
                                    ?>

                                    <div class="row">
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Profile Image</label><br>
                                                <input type="file" id="input-file-now" accept="image/*"
                                                    name="profile" class="dropify"
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
                    'name': {
                        required: true
                    },
                    'email': {
                        required: true
                    },
                    'mobile': {
                        required: true,
                        digits: true,
                        minlength: 6,
                        maxlength: 14
                    },
                    'password': {
                        required: true,
                        minlength: 6,
                        maxlength: 14
                    },
                    'e_password': {
                        minlength: 6,
                        maxlength: 14
                    },
                    'address': {
                        required: true
                    },
                    'confirm_password': {
                        required: true,
                        equalTo: '#password-field'
                    },

                    'e_confirm_password': {
                        equalTo: "#e_password-field",
                    },
                },
                messages: {
                    'name': "Please Enter name.",
                    'email': "Please Enter email address.",
                    'mobile': {
                        required: "Please enter mobile number.",
                        digits: "Please enter valid mobile number.",
                        minlength: "Please enter valid mobile number.",
                        minlength: "Please enter valid mobile number.",
                    },
                    'password': {
                        required: "Please enter password.",
                        minlength: "Minimum length is 6 characters.",
                        maxlength: "Maximum length is 14 characters."
                    },
                    'e_password': {
                        minlength: "Minimum length is 6 characters.",
                        maxlength: "Maximum length is 14 characters."
                    },
                    'address': "Please enter address.",
                    'confirm_password': {
                        required: "Please enter confirm password.",
                        equalTo: "Confirm password and password are not same."
                    },
                    'e_confirm_password': "Please enter Valid Password.",
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