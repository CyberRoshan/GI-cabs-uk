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
                                    <textarea name="description" class="form-control" placeholder="Enter Short Description">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
                                </div>
                                
                                <?php
                                  if (!empty($getdata->image)) {
                                    $data_image = url($getdata->image);
                                  }else{
                                    $data_image = '';
                                  }
                                ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        
                                            <div class="form-group">
                                              <label>Image</label><br>
                                              <input type="file" id="input-file-now" accept="image/*" name="image" class="dropify" data-default-file="{{$data_image}}"/>
                                            </div>
                                        
                                    </div> 
                                </div><br>

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
            'category_type': {required: true},
            
        },
        messages: {
            'title': "Please Enter title.",        
            'category_type': "Please Select category Type.",        
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
<script>
    function delete_image(){
        var id = $('#data_id').val();;
        $.ajax(
        {
            url: "{{ route('category_delete_image') }}",
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

