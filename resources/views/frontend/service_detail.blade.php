@extends('frontend.layout.layout')
@section('content')
    <main class="main">
      <div class="section pt-60 pb-60 bg-primary">
        <div class="container-sub"> 
          <h1 class="heading-44-medium color-white mb-5">{{$file->title}}</h1>
          <div class="box-breadcrumb"> 
            <ul>
              <li> <a href="{{url('/')}}">Home</a></li>
              <li> <a href="#">Services</a></li>
            </ul>
          </div>
        </div>
      </div>
      <section class="section">
        <div class="banner-image-service wow fadeInUp"></div>
        <div class="box-form-service-single">
          <div class="box-search-ride box-search-ride-style-2 wow fadeInUp"> 
            <div class="box-search-tabs">
              <div class="head-tabs"> 
                <ul class="nav nav-tabs nav-tabs-search" role="tablist">
                  <li><a class="active" href="#tab-distance" data-bs-toggle="tab" role="tab" aria-controls="tab-distance" aria-selected="true">Distance</a></li>
                  <li><a href="#tab-hourly" data-bs-toggle="tab" role="tab" aria-controls="tab-hourly" aria-selected="false">Hourly</a></li>
                  <li><a href="#tab-rate" data-bs-toggle="tab" role="tab" aria-controls="tab-rate" aria-selected="false">Flat Rate</a></li>
                </ul>
              </div>
              <div class="tab-content">
                <div class="tab-pane fade active show" id="tab-distance" role="tabpanel" aria-labelledby="tab-distance">
                  <div class="box-form-search">
                    <div class="search-item search-date"> 
                      <div class="search-icon"> <span class="item-icon icon-date"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">Date</label>
                        <input class="search-input datepicker-2" type="text" placeholder="" value="Thu, Oct 06, 2022">
                      </div>
                    </div>
                    <div class="search-item search-time"> 
                      <div class="search-icon"> <span class="item-icon icon-time"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">Time</label>
                        <input class="search-input timepicker" type="text" placeholder="" value="6 PM  :  15">
                      </div>
                    </div>
                    <div class="search-item search-from"> 
                      <div class="search-icon"> <span class="item-icon icon-from"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">From</label>
                        <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                        <div class="box-dropdown-location">
                          <div class="list-locations"> 
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/building.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/train.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="search-item search-to"> 
                      <div class="search-icon"> <span class="item-icon icon-to"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">To</label>
                        <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                        <div class="box-dropdown-location">
                          <div class="list-locations"> 
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/building.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/train.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="search-item search-button mb-0"> 
                      <button class="btn btn-search" type="submit"> <img src="{{url('/public/frontend/')}}/assets/imgs/template/icons/search.svg" alt="luxride">Search</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-hourly" role="tabpanel" aria-labelledby="tab-hourly">
                  <div class="box-form-search">
                    <div class="search-item search-time"> 
                      <div class="search-icon"> <span class="item-icon icon-time"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">Time</label>
                        <input class="search-input timepicker" type="text" placeholder="" value="6 PM  :  15">
                      </div>
                    </div>
                    <div class="search-item search-date"> 
                      <div class="search-icon"> <span class="item-icon icon-date"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">Date</label>
                        <input class="search-input datepicker" type="text" placeholder="" value="Thu, Oct 06, 2022">
                      </div>
                    </div>
                    <div class="search-item search-from"> 
                      <div class="search-icon"> <span class="item-icon icon-from"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">From</label>
                        <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                        <div class="box-dropdown-location">
                          <div class="list-locations"> 
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/building.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/train.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="search-item search-to"> 
                      <div class="search-icon"> <span class="item-icon icon-to"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">To</label>
                        <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                        <div class="box-dropdown-location">
                          <div class="list-locations"> 
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/building.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/train.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="search-item search-button mb-0"> 
                      <button class="btn btn-search" type="submit"> <img src="{{url('/public/frontend/')}}/assets/imgs/template/icons/search.svg" alt="luxride">Search</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-rate" role="tabpanel" aria-labelledby="tab-rate">
                  <div class="box-form-search">
                    <div class="search-item search-date"> 
                      <div class="search-icon"> <span class="item-icon icon-date"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">Date</label>
                        <input class="search-input datepicker" type="text" placeholder="" value="Thu, Oct 06, 2022">
                      </div>
                    </div>
                    <div class="search-item search-time"> 
                      <div class="search-icon"> <span class="item-icon icon-time"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">Time</label>
                        <input class="search-input timepicker" type="text" placeholder="" value="6 PM  :  15">
                      </div>
                    </div>
                    <div class="search-item search-from"> 
                      <div class="search-icon"> <span class="item-icon icon-from"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">From</label>
                        <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                        <div class="box-dropdown-location">
                          <div class="list-locations"> 
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/building.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/train.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="search-item search-to"> 
                      <div class="search-icon"> <span class="item-icon icon-to"> </span></div>
                      <div class="search-inputs"> 
                        <label class="text-14 color-grey">To</label>
                        <input class="search-input dropdown-location" type="text" placeholder="" value="London City Airport (LCY)" readonly="readonly">
                        <div class="box-dropdown-location">
                          <div class="list-locations"> 
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/building.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/train.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                            <div class="item-location"> 
                              <div class="location-icon"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png" alt="luxride"></div>
                              <div class="location-info"> 
                                <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                                <p class="text-14 color-grey">London, United Kingdom</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="search-item search-button mb-0"> 
                      <button class="btn btn-search" type="submit"> <img src="{{url('/public/frontend/')}}/assets/imgs/template/icons/search.svg" alt="luxride">Search</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-90">
        <div class="container-sub"> 
          <div class="row cardIconTitleDescLeft"> 
            <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
              <div class="cardIconTitleDesc wow fadeInUp">
                <div class="cardIcon"><img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage7/price.svg" alt="luxride"></div>
                <div class="cardTitle">
                  <h5 class="text-20-medium color-text">All-inclusive pricing</h5>
                </div>
                <div class="cardDesc">
                  <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
              <div class="cardIconTitleDesc wow fadeInUp">
                <div class="cardIcon"><img src="{{url('/public/frontend/')}}/assets/imgs/page/services/airport.svg" alt="luxride"></div>
                <div class="cardTitle">
                  <h5 class="text-20-medium color-text">Seamless airport travel</h5>
                </div>
                <div class="cardDesc">
                  <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
              <div class="cardIconTitleDesc wow fadeInUp">
                <div class="cardIcon"><img src="{{url('/public/frontend/')}}/assets/imgs/page/services/terms.svg" alt="luxride"></div>
                <div class="cardTitle">
                  <h5 class="text-20-medium color-text">Travel on your terms</h5>
                </div>
                <div class="cardDesc">
                  <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="container-sub"> 
          {!!$file->description!!}
        </div>
      </section>
    </main>
    
    @endsection