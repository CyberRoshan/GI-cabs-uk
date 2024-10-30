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
                                <form id="settingform" method="post" action="{{$saveurl}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label">Site Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="sitename" value="{{ old('sitename',isset($setting->sitename) ? $setting->sitename : '' )}}" placeholder="Enter sitename">

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Email</label>
                                                <input type="email" class="form-control" value="{{ old('email',isset($setting->email) ? $setting->email : '' )}}" name="email" placeholder="Enter email address">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Phone</label>
                                                <input type="tel" class="form-control" value="{{ old('phone',isset($setting->phone) ? $setting->phone : '' )}}" name="phone" placeholder="Enter mobile number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Commission</label>
                                                <input type="number" class="form-control" value="{{ old('commission',isset($setting->commission) ? $setting->commission : '' )}}" name="commission" placeholder="Enter Commission">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Address</label>
                                        <textarea class="form-control" name="address">{{ old('address',isset($setting->address) ? $setting->address : '' )}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Short Description</label>
                                        <textarea class="form-control" name="short_description">{{ old('short_description',isset($setting->short_description) ? $setting->short_description : '' )}}</textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="formrow-inputZip" class="form-label">Facebook</label>
                                                <input type="text" name="facebook" value="{{ old('facebook',isset($setting->facebook) ? $setting->facebook : '' )}}" class="form-control" id="formrow-inputZip" placeholder="Enter Your facebook Link">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="formrow-inputZip" class="form-label">Instagram</label>
                                                <input type="text" name="instagram" value="{{ old('instagram',isset($setting->instagram) ? $setting->instagram : '' )}}" class="form-control" id="formrow-inputZip" placeholder="Enter Your Instagram Link">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="formrow-inputCity" class="form-label">Twitter</label>
                                                <input type="text" name="twitter" value="{{ old('twitter',isset($setting->twitter) ? $setting->twitter : '' )}}" class="form-control" id="formrow-inputCity" placeholder="Enter Your Twitter Link">
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="formrow-inputZip" class="form-label">Tik Tok</label>
                                                <input type="text" name="tiktok" value="{{ old('tiktok',isset($setting->tiktok) ? $setting->tiktok : '' )}}" class="form-control" id="formrow-inputZip" placeholder="Enter Your tiktok Link">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">

                                        <!-- <div class="col-md-4">
                                        <div class="card-body">
                                            <div class="form-group">
                                              <label>favicon</label><br>
                                              <input type="file" id="input-file-now" accept="image/*" name="header_logo" class="dropify" data-default-file="{{isset($setting->header_logo) ? url($setting->header_logo) : ''}}"/>
                                            </div>
                                          </div>
                                    </div> -->
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label>Logo</label><br>
                                                <input type="file" id="input-file-now" accept="image/*" name="footer_logo" class="dropify" data-default-file="{{isset($setting->footer_logo) ? url($setting->footer_logo) : ''}}" />
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label>favicon</label><br>
                                                <input type="file" id="input-file-now" accept="image/*" name="fav_icon" class="dropify" data-default-file="{{isset($setting->fav_icon) ? url($setting->fav_icon) : ''}}" />
                                            </div>

                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                        </div>
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
    $("#settingform").validate({

        onfocusout: function(element) {
            $(element).valid();
        },
        highlight: function(element, errorClass) {

        },

        rules: {
            'sitename': {
                required: true
            },

        },
        messages: {
            'sitename': "Please Enter Sitename.",
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