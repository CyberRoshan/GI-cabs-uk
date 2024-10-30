@php
$admin= Auth::guard('driveradmin')->user();
@endphp


          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                              <?php
                                if (!empty($admin->profile)) {
                                    $admin_image = url($admin->profile);
                                } else {
                                    $admin_image = url('public/nouser.png');
                                }
                                ?>
                                  <img class="img-80 img-radius" src="{{$admin_image}}" alt="User-Profile-Image" style="height:50px; width:50px;">
                                  <div class="user-details">
                                      <span id="more-details">{{$admin->name}}</span>
                                  </div>
                              </div>
        
                              
                          </div>
                          
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
                          <ul class="pcoded-item pcoded-left-item">
                          <li class="{{Request::routeIs('dashboard') ? 'active' : ''}}">
                                <a href="{{route('driver_dashboard')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Dashboard</span>

                                </a>
                            </li>
                              
                          </ul>
                          
                      </div>
                  </nav>
                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h5 class="m-b-10">{{$title}}</h5>
                                          
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="{{route('driver_dashboard')}}"> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                      <!-- Page-header end -->
                        <div class="pcoded-inner-content"></div>