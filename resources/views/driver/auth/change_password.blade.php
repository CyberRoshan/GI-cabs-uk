@extends('driver.layout.layout')
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
                                <div class="mb-3 form-group">
                                    <label for="formrow-firstname-input" class="form-label">Current Password <span class="text-danger">*</span></label>
                                    <div class="input-group change-passwords">
                                        <span ><i toggle="#password-field" class="fa fa-eye-slash toggle-password"></i></span>
                                        <input type="password" name="current-password" value="{{ old('current-password')}}" class="form-control password_data" id="password-field" placeholder="Enter Current Password" >
                                    </div>
                                </div>

                                <div class="mb-3 form-group">
                                    <label for="formrow-firstname-input" class="form-label">New Password <span class="text-danger">*</span></label>
                                    <div class="input-group change-passwords">
                                        <span ><i toggle="#newpasword" class="fa fa-eye-slash toggle-password"></i></span>
                                        <input type="password" name="new-password" value="{{ old('new-password')}}" class="form-control" id="newpasword" placeholder="Enter New Password">
                                    </div>
                                </div>

                                <div class="mb-3 form-group">
                                    <label for="formrow-firstname-input" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                    <div class="input-group change-passwords">
                                        <span><i toggle="#password-field2" class="fa fa-eye-slash toggle-password"></i></span>
                                        <input type="password" name="new-password_confirmation" value="{{ old('new-password_confirmation')}}" id="password-field2" class="form-control"  placeholder="Enter New Confirm Password">
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
    $("#settingform").validate({

        onfocusout: function (element) {
            $(element).valid();
        },

        rules: {
            'current-password': {required: true},
            'new-password': {required: true},
            'new-password_confirmation': {required: true,equalTo: "#newpasword",},
            
        },
        messages: {
            'current-password': "Please Enter Current Password.",        
            'new-password': "Please Enter New Password.",          
            'new-password_confirmation': {
                required: "Please enter confirm password.",
                equalTo: "Confirm password and password are not same."
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

