@extends('admin.layout.layout')
@section('content')


    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="card">
                        <div class="card-header">
                            <h5>{{$title}}</h5>
                            
                        </div>

                          <div class="card-block">
                            <div class="row">
                              <div class="col-12">
                                <form id="search-form" method="post">
                                        <div class="row">
                                          <div class="col-md-3">
                                            <label for="from_date">Search Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Title">
                                          </div>

                                          <div class="col-md-3">
                                            <label for="from_date">Status</label>
                                            <select class="form-control" name="status">
                                              <option value="">All Type</option>
                                              <option value="1">Active</option>
                                              <option value="2">Deactive</option>
                                            </select>
                                          </div>

                                          <div class="col-md-4 col1 mt-4">
                                              <!-- <p for="date_to"></p><br> -->
                                              <button id="filter" class="btn btn-primary btn-fw">Apply Filters</button>
                                              <button class="btn btn-primary btn-fw" id="clearBtn">Reset Filters</button>
                                          </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('page_add')}}"><button class="btn btn-success  waves-effect waves-light btn-sm">Add</button></a>
                                </div>
                            </div>
                              <div class="table-responsive dt-responsive">
                                  <table id="example" class="table table-striped table-bordered dt-responsive nowrap table_data">
                                      <thead>
                                          <tr>
                                              <th>#</th>
                                              <th>Title</th>
                                              <th>Status</th>
                                              <th data-orderable="false">Action</th>
                                          </tr>
                                      </thead>
                                      
                                      
                                  </table>
                              </div>
                          </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
    <script>
       $(document).ready(function () {
          var table = $('.table_data').DataTable({
            "bFilter": false,
              ajax: {
                    url: "{{ url('/admin/page-data') }}",
                    data: function (d) {
                        d.title = $('input[name="title"]').val();
                        d.status = $('select[name="status"]').val();
                    }
                },
              columns: [
                  {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                  {data: 'title', name: 'title'},
                  {data: 'status', name: 'status'},
                  {data: 'action', name: 'action'}
              ]
          });

          $('#search-form').on('submit', function(e) {
              table.draw();
              e.preventDefault();
          });


          $('#filter').click(function(){
              table.ajax.reload();
          });

          $('#clearBtn').click(function(){
            $('#search-form')[0].reset();
              table.ajax.reload();
          });   
       
      });
    </script>

    <script type="text/javascript">

      function changeStatus(id,status){
        var token = '{!!csrf_token()!!}';
          
        $.ajax(
        {
            url: "{{ url('admin/page/status') }}",
            type: 'GET',
            data: {
                'id': id,
                'status': status,
            },
            success: function (res)
            {
                if (res == "Success")
                {
                    swal({
                    title: "Change Status!",
                    text: "Page Status Change Sussessfully",
                    icon: "success",
                    dangerMode: true,
                    buttons: false,
                    timer: 1000
                })
               .then(() => {
                        $('.table_data').DataTable().ajax.reload();
                    })
                    
                } 
                
            }
        });
    }
    </script>
@endsection 


