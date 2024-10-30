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
                                    <label class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" value="{{ old('title',isset($getdata->title) ? $getdata->title : '' )}}" class="form-control" placeholder="Enter name">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="text" name="email" value="{{ old('email',isset($getdata->email) ? $getdata->email : '' )}}" class="form-control" placeholder="Enter name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Phone <span class="text-danger">*</span></label>
                                        <input type="text" name="phone" value="{{ old('phone',isset($getdata->phone) ? $getdata->phone : '' )}}" class="form-control" placeholder="Enter name">
                                    </div>
                                </div>

                                
                                @if ($getdata == '')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Password <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group change-passwords">
                                                        <span><i toggle="#password-field"
                                                                class="fa fa-eye-slash toggle-password"></i></span>
                                                        <input type="password" name="password"
                                                            value="{{ old('password') }}" class="form-control"
                                                            id="password-field" placeholder="Enter password" autocomplete="new-password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-password-input" class="form-label">Confirm
                                                        Password
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group change-passwords">
                                                        <span><i toggle="#password-field1"
                                                                class="fa fa-eye-slash toggle-password"></i></span>
                                                        <input type="password" name="confirm_password"
                                                            value="{{ old('confirm_password') }}" class="form-control"
                                                            id="password-field1" placeholder="Enter confirm password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Password <span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-group change-passwords">
                                                        <span><i toggle="#e_password-field"
                                                                class="fa fa-eye-slash toggle-password"></i></span>
                                                        <input type="password" name="e_password"
                                                            value="{{ old('e_password', isset($getdata->password_show) ? $getdata->password_show : '') }}"
                                                            class="form-control" id="e_password-field"
                                                            placeholder="Enter password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-password-input" class="form-label">Confirm
                                                        Password <span class="text-danger">*</span></label>
                                                    <div class="input-group change-passwords">
                                                        <span><i toggle="#e_password-field1"
                                                                class="fa fa-eye-slash toggle-password"></i></span>
                                                        <input type="password" name="e_confirm_password"
                                                            value="{{ old('e_confirm_password', isset($getdata->password_show) ? $getdata->password_show : '') }}"
                                                            class="form-control" id="e_password-field1"
                                                            placeholder="Enter confirm password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    

                                
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" placeholder="Enter  Answer">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        
                                            <div class="form-group">
                                              <label>Smiling photo with white background</label><br>
                                              <input type="file" id="input-file-now" accept="image/*" name="profile" class="dropify" data-default-file="{{isset($getdata->profile) ? url($getdata->profile) : ''}}"/>
                                            </div>
                                        
                                    </div> 
                                    <div class="col-md-4 mb-3">
                                        
                                            <div class="form-group">
                                              <label>Private hire driver license </label><br>
                                              <input type="file" id="input-file-now" accept="image/*" name="private_hire_driver_license" class="dropify" data-default-file="{{isset($getdata->private_hire_driver_license) ? url($getdata->private_hire_driver_license) : ''}}"/>
                                            </div>
                                        
                                    </div> 
                                    <div class="col-md-4 mb-3">
                                        
                                            <div class="form-group">
                                              <label>Private hire vehicle license</label><br>
                                              <input type="file" id="input-file-now" accept="image/*" name="private_hire_vehicle_license" class="dropify" data-default-file="{{isset($getdata->private_hire_driver_license) ? url($getdata->private_hire_driver_license) : ''}}"/>
                                            </div>
                                        
                                    </div> 
                                    <div class="col-md-4 mb-3">
                                        
                                            <div class="form-group">
                                              <label>Photo license badge</label><br>
                                              <input type="file" id="input-file-now" accept="image/*" name="photo_license_badge" class="dropify" data-default-file="{{isset($getdata->photo_license_badge) ? url($getdata->photo_license_badge) : ''}}"/>
                                            </div>
                                        
                                    </div> 
                                    <div class="col-md-4 mb-3">
                                        
                                            <div class="form-group">
                                              <label>DVLA Driving license Front</label><br>
                                              <input type="file" id="input-file-now" accept="image/*" name="DVLA_driving_license_front" class="dropify" data-default-file="{{isset($getdata->DVLA_driving_license_front) ? url($getdata->DVLA_driving_license_front) : ''}}"/>
                                            </div>
                                        
                                    </div> 
                                    <div class="col-md-4 mb-3">
                                        
                                            <div class="form-group">
                                              <label>DVLA Driving license Back</label><br>
                                              <input type="file" id="input-file-now" accept="image/*" name="DVLA_driving_license_back" class="dropify" data-default-file="{{isset($getdata->DVLA_driving_license_back) ? url($getdata->DVLA_driving_license_back) : ''}}"/>
                                            </div>
                                        
                                    </div> 
                                    <div class="col-md-4 mb-3">
                                        
                                            <div class="form-group">
                                              <label>MOT Certificate</label><br>
                                              <input type="file" id="input-file-now" accept="image/*" name="MOT_certificate" class="dropify" data-default-file="{{isset($getdata->MOT_certificate) ? url($getdata->MOT_certificate) : ''}}"/>
                                            </div>
                                        
                                    </div> 
                                    <div class="col-md-4 mb-3">
                                        
                                            <div class="form-group">
                                              <label>Car insurance certificate</label><br>
                                              <input type="file" id="input-file-now" accept="image/*" name="car_insurance_certificate" class="dropify" data-default-file="{{isset($getdata->car_insurance_certificate) ? url($getdata->car_insurance_certificate) : ''}}"/>
                                            </div>
                                        
                                    </div> 
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
        onfocusout: function (element) {
            $(element).valid();
        },
        highlight: function(element, errorClass) {

       },

        rules: {
            'question': {required: true},
            'answer': {required: true},
            
        },
        messages: {
            'question': "Please Enter Question.",        
            'answer': "Please Enter Answer.",        
        },
        
        errorPlacement: function(error, element) {
            if (element.attr("name") == "data[Payment][phone]") {
              error.insertAfter(".error-placement");
          } else {
              error.insertAfter(element);
          }
      },

      submitHandler: function(form) {

        if (this.valid()){
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

