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
                                    <a href="{{route($url.'_add')}}"><button class="btn btn-success  waves-effect waves-light btn-sm">Add</button></a>
                                </div>
                            </div>
                              
                                  <table id="example" class="table table-bordered  nowrap table_data">
                                      <thead>
                                        <tr>
                                            <th>#</th>

                                            <th>Title</th>
                                            <th>Sub Title</th>
                                            <th>Passegers</th>

                                            <th>Status</th>
                                            <th data-orderable="false">Action</th>
                                        </tr>
                                      </thead>
                                      
                                      
                                  </table>
                              
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
    $(document).ready(function() {
        var table = $('.table_data').DataTable({
            "bFilter": false,
            language: {
                emptyTable: "No result found"
            },
            ajax: {
                url: "{{ url('/admin/' . $url . '-data') }}",
                data: function(d) {
                    d.title = $('input[name="title"]').val();
                    d.type = $('select[name="type"]').val();
                    d.status = $('select[name="status"]').val();
                }
            },
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },

                {
                    data: 'title',
                    name: 'title'
                },

                {
                    data: 'sub_title',
                    name: 'sub_title'
                },
                {
                    data: 'passegers',
                    name: 'passegers'
                },


                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ]
        });

        $('#search-form').on('submit', function(e) {
            table.draw();
            e.preventDefault();
        });


        $('#filter').click(function() {
            table.ajax.reload();
        });

        $('#clearBtn').click(function() {
            $('#search-form')[0].reset();
            table.ajax.reload();
        });

        //delete
        $(document).on("click", ".delete-button", function(e) {
            e.preventDefault();
            var id = $(this).attr("data-id");

            swal({
                title: "Are you sure you want to delete this?",
                text: "You will not be able to recover this action!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "{{ url('admin/" + $url + "/delete') }}",
                        datatType: 'json',
                        type: 'GET',
                        data: {
                            'id': id,
                        },
                        success: function(res) {

                            if (res.status === "success") {
                                swal({
                                        title: "Deleted!",
                                        text: res.message,
                                        icon: "success",
                                        dangerMode: true,
                                        buttons: false,
                                        timer: 1000
                                    })
                                    .then(() => {
                                        table.ajax.reload();
                                    })

                            } else {
                                swal("Error",
                                    "{!!trans('language.delete_already_used') !!}",
                                    "error");
                            }



                        }
                    });
                    // swal("Deleted!", "{!! trans('language.deleted_successfully') !!}", "success");
                } else {
                    swal({
                        title: "Cancelled",
                        text: "You cancelled your action",
                        icon: "error",
                        buttons: false,
                        timer: 1500
                    })

                }
            })

        });

    });
    </script>

    <script type="text/javascript">
    function changeStatus(id, status) {
        var token = '{!!csrf_token()!!}';

        $.ajax({
            url: "{{ url('admin/" + $url + "/status') }}",
            type: 'GET',
            data: {
                'id': id,
                'status': status,
            },
            success: function(res) {
                if (res == "Success") {
                    swal({
                            title: "Change Status!",
                            text: "Status Change Sussessfully",
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


