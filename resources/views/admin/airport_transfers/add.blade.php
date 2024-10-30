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
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" placeholder="Enter  description">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
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
            'title': {required: true},
            
        },
        messages: {
            'title': "Please Enter title.",        
                  
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

@endsection 

