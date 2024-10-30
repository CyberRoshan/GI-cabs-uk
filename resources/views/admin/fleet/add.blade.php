@extends('admin.layout.layout')
@section('content')

<!-- Page-header end -->

<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Inputs Validation start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>{{$title}}</h5>

                            </div>
                            <div class="card-block">
                                <form method="post" id="form-data" action="{{$saveurl}}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{isset($getdata->id)?$getdata->id:''}}" id="data_id">
                                    <div class="mb-3">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" value="{{ old('title',isset($getdata->title) ? $getdata->title : '' )}}" class="form-control" placeholder="Enter title">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Sub title <span class="text-danger">*</span></label>
                                        <input type="text" name="sub_title" value="{{ old('sub_title',isset($getdata->sub_title) ? $getdata->sub_title : '' )}}" class="form-control" placeholder="Enter sub title">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Passegers <span class="text-danger">*</span></label>
                                            <input type="number" name="passegers" value="{{ old('passegers',isset($getdata->passegers) ? $getdata->passegers : '' )}}" class="form-control" placeholder="Enter passegers">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Luggage large <span class="text-danger">*</span></label>
                                            <input type="text" name="luggage_large" value="{{ old('luggage_large',isset($getdata->luggage_large) ? $getdata->luggage_large : '' )}}" class="form-control" placeholder="Enter luggage large number">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Luggage small <span class="text-danger">*</span></label>
                                            <input type="text" name="luggage_small" value="{{ old('luggage_small',isset($getdata->luggage_small) ? $getdata->luggage_small : '' )}}" class="form-control" placeholder="Enter luggage small number">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Price <span class="text-danger">*</span></label>
                                            <input type="text" name="price" value="{{ old('price',isset($getdata->price) ? $getdata->price : '' )}}" class="form-control" placeholder="Enter price">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control" placeholder="Enter  Answer">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">

                                            <div class="form-group">
                                                <label>Banner</label><br>
                                                <input type="file" id="input-file-now" accept="image/*" name="banner" class="dropify" data-default-file="{{isset($getdata->banner) ? url($getdata->banner) : ''}}" />
                                            </div>

                                        </div>
                                        <div class="col-md-4 mb-3">

                                            <div class="form-group">
                                                <label>Image </label><br>
                                                <input type="file" id="input-file-now" accept="image/*" name="image" class="dropify" data-default-file="{{isset($getdata->image) ? url($getdata->image) : ''}}" />
                                            </div>

                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title </label>
                                        <input type="text" name="meta_title" value="{{ old('meta_title',isset($getdata->meta_title) ? $getdata->meta_title : '' )}}" class="form-control" placeholder="Enter meta title">
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label">Meta Description</label>
                                        <textarea name="meta_description" class="form-control" placeholder="Enter meta description">{{ old('meta_description',isset($getdata->meta_description) ? $getdata->meta_description : '' )}}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Meta Keyword</label>
                                        <textarea name="meta_keyword" class="form-control" placeholder="Enter meta description">{{ old('meta_keyword',isset($getdata->meta_keyword) ? $getdata->meta_keyword : '' )}}</textarea>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Basic Inputs Validation end -->
                    </div>
                    <!-- Form components Validation card end -->
                </div>
            </div>
        </div>
        <!-- Page body end -->
    </div>
</div>
</div>

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
            'sub_title': {
                required: true
            },
            'passegers': {
                required: true
            },
            'luggage_large': {
                required: true
            },
            'luggage_small': {
                required: true
            },
            

        },
        messages: {
            'title': "Please Enter title.",
            'sub_title': "Please Enter sub title.",
            'passegers': "Please Enter passegers number.",
            'luggage_large': "Please Enter luggage large number.",
            'luggage_small': "Please Enter luggage small number.",
            
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