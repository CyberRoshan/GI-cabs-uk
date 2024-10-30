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
                                    <form method="post" id="settingform" action="{{$saveurl}}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{isset($profile->id)?$profile->id:''}}" id="data_id">
                                        <div class="mb-3">
                                            <label for="formrow-firstname-input" class="form-label">Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name" value="{{ old('name',isset($profile->name) ? $profile->name : '' )}}" class="form-control" id="formrow-firstname-input" placeholder="Enter Your Full Name">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" value="{{ old('email',isset($profile->email) ? $profile->email : '' )}}" class="form-control" id="formrow-email-input" placeholder="Enter Your Email ID">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-password-input" class="form-label">Phone <span class="text-danger">*</span></label>
                                                    <input type="phone" id="mobile_code" name="phone" width="100%" value="{{ old('phone',isset($profile->phone) ? '+'.$profile->country_code.' '.$profile->phone : '' )}}" class="form-control" id="formrow-password-input" placeholder="Enter Your Phone Number">
                                                </div>
                                            </div>

                                            <input type="hidden" name="country_code" class="country_code">
                                        </div>
                                        <?php
                                          if (!empty($profile->image)) {
                                            $data_image = url($profile->image);
                                          }else{
                                            $data_image = '';
                                          }
                                        ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                  <label>Profile</label><br>
                                                  <input type="file" id="input-file-now" accept="image/*" name="image" class="dropify" data-default-file="{{$data_image}}"/>
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

        onfocusout: function (element) {
            $(element).valid();
        },

        rules: {
            'name': {required: true},
            'email': {required: true},
            'phone': {required: true,number: true},
        },
        messages: {
            'name': "Please Enter full name.",        
            'email': "Please Enter email address.",        
            
            'phone': {
                required: "Please Enter phone number.",
                number: "Please enter only number."
            },       
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
            var country_code = $('.iti__selected-dial-code').html();
            $('.country_code').val(country_code);
            $('.confirm-reservation-cart').attr("disabled", "disabled");
            
            form.submit();
        } 
    },   
});

</script>

<script>
    function delete_image(){
        var id = $('#data_id').val();;
        $.ajax(
        {
            url: "{{ route('admin_delete_image') }}",
            type: 'GET',
            data: {
                    '_token' : '<?php echo csrf_token() ?>',
                    'data_id'    : id,
                    
                },
            
            success: function (res)
            {
              $('.dropify-clear').css('display','none');
            },
            
        });
        
    }
</script>
@endsection 

