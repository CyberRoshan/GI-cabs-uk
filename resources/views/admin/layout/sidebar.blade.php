@php
$admin= Auth::guard('admin')->user();
@endphp


          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                              <?php
                                if (!empty($admin->image)) {
                                    $admin_image = url($admin->image);
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
                          <li class="{{Request::routeIs('admin_dashboard') ? 'active' : ''}}">
                                <a href="{{route('admin_dashboard')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Dashboard</span>

                                </a>
                            </li>
                              <li class="pcoded-hasmenu {{Request::routeIs('page') || Request::routeIs('category') || Request::routeIs('testimonial') || Request::routeIs('faq') ? 'active pcoded-trigger' : ''}}">
                                  <a href="javascript:void(0)" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                      <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">CMS</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  <ul class="pcoded-submenu">
                                    <li class="{{Request::routeIs('banner') ? 'active' : ''}}">
                                        <a href="{{route('banner')}}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Slider</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="{{Request::routeIs('page') ? 'active' : ''}}">
                                        <a href="{{route('page')}}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Pages</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="{{Request::routeIs('category') ? 'active' : ''}}">
                                        <a href="{{route('category')}}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Category</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                    <li class="{{Request::routeIs('admin_service') ? 'active' : ''}}">
                                        <a href="{{route('admin_service')}}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Service</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="{{Request::routeIs('faq') ? 'active' : ''}}">
                                        <a href="{{route('faq')}}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Faq</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="{{Request::routeIs('testimonial') ? 'active' : ''}}">
                                        <a href="{{route('testimonial')}}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Testimonial</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                      
                                  </ul>
                              </li>
                              <li class="{{Request::routeIs('fleet') ? 'active' : ''}}">
                                <a href="{{route('fleet')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-taxi"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Fleet</span>

                                </a>
                            </li>
                            <li class="{{Request::routeIs('airport_transfers') ? 'active' : ''}}">
                                <a href="{{route('airport_transfers')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-taxi"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Airport Transfers</span>

                                </a>
                            </li>
                            <li class="{{Request::routeIs('aria_to_airport') ? 'active' : ''}}">
                                <a href="{{route('aria_to_airport')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-taxi"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Aria to Airport Transfers</span>

                                </a>
                            </li>
                            <li class="{{Request::routeIs('blog_admin') ? 'active' : ''}}">
                                <a href="{{route('blog_admin')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-user"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Blog</span>

                                </a>
                            </li>
                              <li class="{{Request::routeIs('driver') ? 'active' : ''}}">
                                <a href="{{route('driver')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-user"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Driver Management</span>

                                </a>
                            </li>
                            
                            <!-- <li class="{{Request::routeIs('vehicle') ? 'active' : ''}}">
                                <a href="{{route('vehicle')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-taxi"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Vehicle Management</span>

                                </a>
                            </li> -->
                            <li class="{{Request::routeIs('payment') ? 'active' : ''}}">
                                <a href="{{route('payment')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-money"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Fare & Payment</span>

                                </a>
                            </li>
                            <li class="{{Request::routeIs(patterns: 'user') ? 'active' : ''}}">
                                <a href="{{route('user')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-user"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Customer Management</span>

                                </a>
                            </li>
                            <li class="{{Request::routeIs('coupon') ? 'active' : ''}}">
                                <a href="{{route('coupon')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-file"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Promotions & Discounts</span>

                                </a>
                            </li>
                            <li class="{{Request::routeIs('admin_contact_enquery') ? 'active' : ''}}">
                                <a href="{{route('admin_contact_enquery')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-file"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Complaints & Feedback</span>

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
                                              <a href="{{route('admin_dashboard')}}"> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session()->get('success') }}

                                </div>
                                @endif

                                @if($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{$errors->first()}}

                                </div>
                                @endif
                          </div>
                      </div>
                      <!-- Page-header end -->
                        <div class="pcoded-inner-content"></div>