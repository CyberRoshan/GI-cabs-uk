@extends('admin.layout.layout')
@section('content')
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
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" value="{{ old('title',isset($getdata->title) ? $getdata->title : '' )}}" class="form-control" placeholder="Enter title">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Coupon code <span class="text-danger">*</span></label>
                                        <input type="text" name="coupon_code" value="{{ old('coupon_code',isset($getdata->coupon_code) ? $getdata->coupon_code : '' )}}" class="form-control" placeholder="Enter coupon code">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Discount <span class="text-danger">*</span></label>
                                        <input type="text" name="discount" value="{{ old('discount',isset($getdata->discount) ? $getdata->discount : '' )}}" class="form-control" placeholder="Enter discount">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Offer Use<span class="text-danger">*</span></label>
                                        <select name="offer_use" class="form-select">
                                            <option value="1" {{ isset($getdata->offer_use) ? $getdata->offer_use==1 ? 'selected' : '' : '' }}>One Time</option>
                                            <option value="2" {{ isset($getdata->offer_use) ? $getdata->offer_use==2 ? 'selected' : '' : '' }}>Multiple Time</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Start Date </label>
                                        <input type="date" name="start_date" value="{{ old('start_date',isset($getdata->start_date) ? $getdata->start_date : '' )}}" class="form-control" placeholder="Enter start date">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">End Date </label>
                                        <input type="date" name="end_date" value="{{ old('end_date',isset($getdata->end_date) ? $getdata->end_date : '' )}}" class="form-control" placeholder="Enter end date">
                                    </div>
                                    
                                </div>



                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" placeholder="Enter Short Description">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label>Image</label><br>
                                            <input type="file" id="input-file-now" accept="image/*" name="image" class="dropify" data-default-file="{{isset($getdata->image) ? url($getdata->image) : ''}}" />
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
    <script>
        $("#form-data").validate({
            onfocusout: function(element) {
                $(element).valid();
            },
            highlight: function(element, errorClass) {

            },

            rules: {
                'title': {
                    required: true
                },
                'coupon_code': {
                    required: true
                },
                'discount': {
                    required: true
                },

            },
            messages: {
                'title': "Please Enter title.",
                'coupon_code': "Please Enter coupon code.",
                'discount': "Please enter discount.",
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
    @endsection