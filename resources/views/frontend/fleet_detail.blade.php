@extends('frontend.layout.layout')
@section('content')
    <main class="main">
      <div class="section pt-60 pb-60 bg-primary">
        <div class="container-sub"> 
          <h1 class="heading-44-medium color-white mb-5">Our Fleet</h1>
          <div class="box-breadcrumb"> 
            <ul>
              <li> <a href="index.php">Home</a></li>
              <li> <a href="fleet-list.php">Our Fleet</a></li>
            </ul>
          </div>
        </div>
      </div>
      <section class="section"><img src="{{ isset($data->banner) ? url($data->banner) : url('/public/frontend/assets/imgs/page/homepage1/e-class.png') }}" alt="Luxride">
        <div class="container-sub"> 
          <div class="mt-120"> 
            <h2 class="heading-44-medium mb-30 color-text title-fleet wow fadeInUp">{{$data->sub_title}}</h2>
            <div class="content-single wow fadeInUp"> 
              {!!$data->description!!}
              <h6 class="heading-24-medium color-text mb-30">We offer</h6>
              <ul class="list-ticks list-ticks-small">
                <li class="text-16 mb-20">100% Luxurious Fleet</li>
                <li class="text-16 mb-20">All Our Fleet Are Fully Valeted & Serviced</li>
                <li class="text-16 mb-20">A Safe & Secure Journey</li>
                <li class="text-16 mb-20">Comfortable And Enjoyable</li>
                <li class="text-16 mb-20">Clean, Polite & Knowledgeable</li>
              </ul>
              <div class="mt-30"><a class="btn btn-primary btn-book">Book Now
                  <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                  </svg></a></div>
            </div>
          </div>
        </div>
        <div class="box-slide-fleet mt-120 wow fadeInUp">
          <div class="box-swiper"> 
            <div class="swiper-container swiper-group-2-single-fleet pb-0">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{url('/public/frontend/')}}/assets/imgs/page/fleet/slide1.png" alt="luxride"></div>
                <div class="swiper-slide"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/fleet/slide2.png" alt="luxride"></div>
              </div>
              <div class="box-pagination-fleet">
                <div class="swiper-button-prev swiper-button-prev-fleet">
                  <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                  </svg>
                </div>
                <div class="swiper-button-next swiper-button-next-fleet">
                  <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-120">
        <div class="container-sub"> 
          <h2 class="heading-44-medium wow fadeInUp">Features Of Our Mercedes-Benz E-Class Vehicles</h2>
          <div class="row mt-50 cardIconTitleDescLeft"> 
            <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
              <div class="cardIconTitleDesc wow fadeInUp">
                <div class="cardIcon"><img src="{{url('/public/frontend/')}}/assets/imgs/page/fleet/camera.svg" alt="luxride"></div>
                <div class="cardTitle">
                  <h5 class="text-20-medium color-text">Safety First</h5>
                </div>
                <div class="cardDesc">
                  <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
              <div class="cardIconTitleDesc wow fadeInUp">
                <div class="cardIcon"><img src="{{url('/public/frontend/')}}/assets/imgs/page/fleet/water.svg" alt="luxride"></div>
                <div class="cardTitle">
                  <h5 class="text-20-medium color-text">Prices With No Surprises</h5>
                </div>
                <div class="cardDesc">
                  <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
              <div class="cardIconTitleDesc wow fadeInUp">
                <div class="cardIcon"><img src="{{url('/public/frontend/')}}/assets/imgs/page/fleet/coffee.svg" alt="luxride"></div>
                <div class="cardTitle">
                  <h5 class="text-20-medium color-text">Private Travel Solutions</h5>
                </div>
                <div class="cardDesc">
                  <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
              <div class="cardIconTitleDesc wow fadeInUp">
                <div class="cardIcon"><img src="{{url('/public/frontend/')}}/assets/imgs/page/fleet/newspaper.svg" alt="luxride"></div>
                <div class="cardTitle">
                  <h5 class="text-20-medium color-text">Safety First</h5>
                </div>
                <div class="cardDesc">
                  <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
              <div class="cardIconTitleDesc wow fadeInUp">
                <div class="cardIcon"><img src="{{url('/public/frontend/')}}/assets/imgs/page/fleet/cooperation.svg" alt="luxride"></div>
                <div class="cardTitle">
                  <h5 class="text-20-medium color-text">Prices With No Surprises</h5>
                </div>
                <div class="cardDesc">
                  <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-30"> 
              <div class="cardIconTitleDesc wow fadeInUp">
                <div class="cardIcon"><img src="{{url('/public/frontend/')}}/assets/imgs/page/fleet/rim.svg" alt="luxride"></div>
                <div class="cardTitle">
                  <h5 class="text-20-medium color-text">Private Travel Solutions</h5>
                </div>
                <div class="cardDesc">
                  <p class="text-16 color-text">Both you and your shipments will travel with professional drivers. Always with the highest quality standards.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-90">
        <div class="container-sub"> 
          <h2 class="heading-44-medium wow fadeInUp">Book Your Business Class</h2>
          <div class="row mt-50"> 
            <div class="col-xl-8 col-lg-7 mb-30"> 
              <h5 class="text-20-medium color-text mb-10 wow fadeInUp">Business Class</h5>
              <p class="text-14 color-text mb-15 wow fadeInUp">Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p>
              <div class="mt-5 wow fadeInUp"> <span class="passengers-info mr-20 color-text">Passengers 4</span><span class="luggages-info color-text">Luggage 2</span></div>
              <div class="mt-20 text-center wow fadeInUp"> <img class="d-block" src="{{url('/public/frontend/')}}/assets/imgs/page/fleet/vehicle.png" alt="luxride"></div>
            </div>
            <div class="col-xl-4 col-lg-5 mb-30"> 
              <div class="box-vehicle-price wow fadeInUp"> 
                <ul class="list-prices"> 
                  <li> <span class="text">Hourly rate (minimum 3 hours)</span><span class="price">$29</span></li>
                  <li> <span class="text">Day rate (8 hours)</span><span class="price">$136</span></li>
                  <li> <span class="text">Heathrow to Central London</span><span class="price">$780</span></li>
                </ul>
                <div class="mt-30 wow fadeInUp"><a class="btn btn-primary btn-book mw-100">Book Now
                    <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg></a></div>
              </div>
              <div class="row mt-30"> 
                <div class="col-lg-6 col-md-3 col-sm-6 mb-20 wow fadeInUp"> <span class="text-conditions icon-meet">Meet & Greet included</span></div>
                <div class="col-lg-6 col-md-3 col-sm-6 mb-20 wow fadeInUp"> <span class="text-conditions icon-free-cancel">Free cancellation</span></div>
                <div class="col-lg-6 col-md-3 col-sm-6 mb-20 wow fadeInUp"> <span class="text-conditions icon-free-wait">Free Waiting time</span></div>
                <div class="col-lg-6 col-md-3 col-sm-6 mb-20 wow fadeInUp"> <span class="text-conditions icon-safe">Safe and secure travel</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section mt-50 mb-50">
        <div class="container-sub"> 
          <h2 class="heading-44-medium wow fadeInUp">Book Your Business Class</h2>
          <div class="row mt-50"> 
            <div class="col-lg-4 col-md-6 mb-30"> 
              <div class="cardFleet wow fadeInUp">
                <div class="cardInfo"><a href="fleet-single.php">
                    <h3 class="text-20-medium color-text mb-10">Business Class</h3></a>
                  <p class="text-14 color-text mb-30">Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p>
                </div>
                <div class="cardImage mb-30"><a href="fleet-single.php"><img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/e-class.png" alt="Luxride"></a></div>
                <div class="cardInfoBottom">
                  <div class="passenger"><span class="icon-circle icon-passenger"></span><span class="text-14">Passengers<span>4</span></span></div>
                  <div class="luggage"><span class="icon-circle icon-luggage"></span><span class="text-14">Luggage<span>2</span></span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30"> 
              <div class="cardFleet wow fadeInUp">
                <div class="cardInfo"><a href="fleet-single.php">
                    <h3 class="text-20-medium color-text mb-10">Business Class</h3></a>
                  <p class="text-14 color-text mb-30">Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p>
                </div>
                <div class="cardImage mb-30"><a href="fleet-single.php"><img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/e-class.png" alt="Luxride"></a></div>
                <div class="cardInfoBottom">
                  <div class="passenger"><span class="icon-circle icon-passenger"></span><span class="text-14">Passengers<span>4</span></span></div>
                  <div class="luggage"><span class="icon-circle icon-luggage"></span><span class="text-14">Luggage<span>2</span></span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30"> 
              <div class="cardFleet wow fadeInUp">
                <div class="cardInfo"><a href="fleet-single.php">
                    <h3 class="text-20-medium color-text mb-10">Business Class</h3></a>
                  <p class="text-14 color-text mb-30">Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p>
                </div>
                <div class="cardImage mb-30"><a href="fleet-single.php"><img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/e-class.png" alt="Luxride"></a></div>
                <div class="cardInfoBottom">
                  <div class="passenger"><span class="icon-circle icon-passenger"></span><span class="text-14">Passengers<span>4</span></span></div>
                  <div class="luggage"><span class="icon-circle icon-luggage"></span><span class="text-14">Luggage<span>2</span></span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    @endsection