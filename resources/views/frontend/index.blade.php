@extends('frontend.layout.layout')
@section('content')

<head>
    <link href="{{ asset('frontend/assets/css/stylee209.css?v=1.0.0') }}" rel="stylesheet">
</head>

<main class="main">
    <section class="section banner-home1 position-relative">
        <div class="position-absolute heroHeading">
            <h1 class="heading-52-medium text-md-start text-center mt-md-0 mt-5 pt-md-0 pt-5 color-white wow fadeInUp">Taxi Service in Leicester </h1>
            <p class="hero-para text-white fw-normal fs-5 w-75 d-md-block d-none lh-base">Discover Leicester’s premier taxi service offering reliable airport transfers to all major UK
                airports, local and long-distance tours, business travel solutions, and more. Comfortable,
                professional, and timely transportation.</p>
        </div>
        <div class="box-swiper">
            <div class="swiper-container swiper-banner-1 pb-0">
                <div class="swiper-wrapper">
                    @foreach ($banner as $slider)
                    <div class="swiper-slide">
                        <div class="box-cover-image" style="background-image: url('{{ url($slider->image) }}')"></div>
                    </div>
                    @endforeach



                </div>
                <div class="box-pagination-button">
                    <div class="swiper-button-prev swiper-button-prev-banner"></div>
                    <div class="swiper-button-next swiper-button-next-banner"></div>
                    <div class="swiper-pagination swiper-pagination-banner"></div>
                </div>
            </div>
        </div>
        <div class="box-search-ride wow fadeInUp">
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
                    <input class="search-input dropdown-location" type="text" placeholder=""
                        value="London City Airport (LCY)" readonly="readonly">
                    <div class="box-dropdown-location">
                        <div class="list-locations">
                            <div class="item-location">
                                <div class="location-icon"> <img
                                        src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png"
                                        alt="luxride"></div>
                                <div class="location-info">
                                    <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)
                                    </h6>
                                    <p class="text-14 color-grey">London, United Kingdom</p>
                                </div>
                            </div>
                            <div class="item-location">
                                <div class="location-icon"> <img
                                        src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/building.png"
                                        alt="luxride"></div>
                                <div class="location-info">
                                    <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                                    <p class="text-14 color-grey">London, United Kingdom</p>
                                </div>
                            </div>
                            <div class="item-location">
                                <div class="location-icon"> <img
                                        src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/train.png"
                                        alt="luxride"></div>
                                <div class="location-info">
                                    <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                                    <p class="text-14 color-grey">London, United Kingdom</p>
                                </div>
                            </div>
                            <div class="item-location">
                                <div class="location-icon"> <img
                                        src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png"
                                        alt="luxride"></div>
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
                    <input class="search-input dropdown-location" type="text" placeholder=""
                        value="London City Airport (LCY)" readonly="readonly">
                    <div class="box-dropdown-location">
                        <div class="list-locations">
                            <div class="item-location">
                                <div class="location-icon"> <img
                                        src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png"
                                        alt="luxride"></div>
                                <div class="location-info">
                                    <h6 class="text-16-medium color-text title-location">London Heathrow Airport (LHR)
                                    </h6>
                                    <p class="text-14 color-grey">London, United Kingdom</p>
                                </div>
                            </div>
                            <div class="item-location">
                                <div class="location-icon"> <img
                                        src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/building.png"
                                        alt="luxride"></div>
                                <div class="location-info">
                                    <h6 class="text-16-medium color-text title-location">London Tower Hill</h6>
                                    <p class="text-14 color-grey">London, United Kingdom</p>
                                </div>
                            </div>
                            <div class="item-location">
                                <div class="location-icon"> <img
                                        src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/train.png"
                                        alt="luxride"></div>
                                <div class="location-info">
                                    <h6 class="text-16-medium color-text title-location">Leyton Train Station</h6>
                                    <p class="text-14 color-grey">London, United Kingdom</p>
                                </div>
                            </div>
                            <div class="item-location">
                                <div class="location-icon"> <img
                                        src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/plane.png"
                                        alt="luxride"></div>
                                <div class="location-info">
                                    <h6 class="text-16-medium color-text title-location">London Luton Airport (LTN)</h6>
                                    <p class="text-14 color-grey">London, United Kingdom</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-item search-button">
                <button class="btn btn-search" type="submit"> <img
                        src="{{url('/public/frontend/')}}/assets/imgs/template/icons/search.svg"
                        alt="luxride">Search</button>
            </div>
        </div>
    </section>

    <section class="section pt-65 pb-35 border-bottom">
        <div class="container-sub">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4 mb-30">
                    <h3 class="color-primary wow fadeInUp">The partners who sell<br class="d-none d-lg-block">our
                        products</h3>
                </div>
                <div class="col-xl-9 col-lg-8 mb-30">
                    <ul class="list-logos d-flex align-item-center wow fadeInUp">
                        <li><img src="{{url('/public/frontend/')}}/assets/imgs/slider/logo/air.svg" alt="luxride"></li>
                        <li><img src="{{url('/public/frontend/')}}/assets/imgs/slider/logo/eb.svg" alt="luxride"></li>
                        <li><img src="{{url('/public/frontend/')}}/assets/imgs/slider/logo/nba.svg" alt="luxride"></li>
                        <li><img src="{{url('/public/frontend/')}}/assets/imgs/slider/logo/nla.svg" alt="luxride"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-65 pb-0">
        <div class="container-sub">
            <div class="text-center">
                <h2 class="heading-44-medium wow fadeInUp">Our Services</h2>
                <p class="py-1 commonHead-para">We offer a wide range of services</p>
            </div>
            <div class="row mt-60 ">
                <!-- @foreach ($service as $ser_data)
                <div class="col-lg-4 mb-30">
                    <div class="cardServiceStyle2 wow fadeInUp">
                        <div class="cardImage"><a href="{{url('service-detail/'.$ser_data->slug)}}"><img
                                    src="{{url($ser_data->image)}}" alt="Luxride"></a></div>
                        <div class="cardInfo">
                            <h3 class="cardTitle text-20-medium color-text mb-10">{{$ser_data->title}}</h3>
                            <p class="cardDesc text-14 color-text mb-10">{{$ser_data->short_description}}</p><a
                                class="cardLink btn btn-link hover-up"
                                href="{{url('service-detail/'.$ser_data->slug)}}">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
                @endforeach -->

                <div class="col-lg-4 mb-30">
                    <div class="cardServiceStyle2 wow fadeInUp">
                        <div class="cardImage"><a href="{{url('service-detail/'.$ser_data->slug)}}"><img
                                    src="{{url($ser_data->image)}}" alt="Luxride"></a></div>
                        <div class="cardInfo">
                            <h3 class="cardTitle text-20-medium color-text mb-10">Airport Transfers</h3>
                            <p class="cardDesc text-14 color-text mb-10">Experience seamless and punctual airport transfers from Leicester to all major UK airports,
                                including Birmingham, East Midlands, Luton, Manchester, Gatwick, Stansted, and London
                                Heathrow. Our professional drivers ensure a comfortable and stress-free journey every time.
                            </p><a
                                class="cardLink btn btn-link hover-up"
                                href="{{url('service-detail/'.$ser_data->slug)}}">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-30">
                    <div class="cardServiceStyle2 wow fadeInUp">
                        <div class="cardImage"><a href="{{url('service-detail/'.$ser_data->slug)}}"><img
                                    src="{{url($ser_data->image)}}" alt="Luxride"></a></div>
                        <div class="cardInfo">
                            <h3 class="cardTitle text-20-medium color-text mb-10">Local Tours</h3>
                            <p class="cardDesc text-14 color-text mb-10">Discover Leicester and its surrounding areas with our expertly guided local tours. From historical
                                landmarks to vibrant city attractions, our knowledgeable drivers provide insightful commentary
                                and a personalized experience to make your visit unforgettable.</p><a
                                class="cardLink btn btn-link hover-up"
                                href="{{url('service-detail/'.$ser_data->slug)}}">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-30">
                    <div class="cardServiceStyle2 wow fadeInUp">
                        <div class="cardImage"><a href="{{url('service-detail/'.$ser_data->slug)}}"><img
                                    src="{{url($ser_data->image)}}" alt="Luxride"></a></div>
                        <div class="cardInfo">
                            <h3 class="cardTitle text-20-medium color-text mb-10">Seaport Transfers</h3>
                            <p class="cardDesc text-14 color-text mb-10">Reliable and efficient seaport transfers from Leicester to nearby ports. Whether you’re traveling
                                for leisure or business, our comfortable vehicles and professional drivers ensure timely and
                                hassle-free transportation to and from major seaports.
                            </p><a
                                class="cardLink btn btn-link hover-up"
                                href="{{url('service-detail/'.$ser_data->slug)}}">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-30">
                    <div class="cardServiceStyle2 wow fadeInUp">
                        <div class="cardImage"><a href="{{url('service-detail/'.$ser_data->slug)}}"><img
                                    src="{{url($ser_data->image)}}" alt="Luxride"></a></div>
                        <div class="cardInfo">
                            <h3 class="cardTitle text-20-medium color-text mb-10">Long Distance Transfers</h3>
                            <p class="cardDesc text-14 color-text mb-10">Travel across the UK with ease using our long distance transfer services. Whether it’s a
                                cross-country trip or a special journey, enjoy comfortable, safe, and reliable transportation
                                tailored to your specific travel needs.</p><a
                                class="cardLink btn btn-link hover-up"
                                href="{{url('service-detail/'.$ser_data->slug)}}">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-30">
                    <div class="cardServiceStyle2 wow fadeInUp">
                        <div class="cardImage"><a href="{{url('service-detail/'.$ser_data->slug)}}"><img
                                    src="{{url($ser_data->image)}}" alt="Luxride"></a></div>
                        <div class="cardInfo">
                            <h3 class="cardTitle text-20-medium color-text mb-10">Business Travel</h3>
                            <p class="cardDesc text-14 color-text mb-10">Enhance your business trips with our professional business travel services. Offering discreet,
                                timely, and comfortable transportation for corporate clients, meetings, and events, ensuring you
                                arrive relaxed and ready to succeed.</p><a
                                class="cardLink btn btn-link hover-up"
                                href="{{url('service-detail/'.$ser_data->slug)}}">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Our Fleet -->
    <section class="section pt-65 pb-30 bg-our-fleet">
        <div class="container-sub">
            <div class="row align-items-center">
                <div class="col-lg-6 col-7">
                    <h2 class="heading-44-medium title-fleet wow fadeInUp">Our Fleet</h2>
                </div>
                <div class="col-lg-6 col-5 text-end"><a class="text-16-medium color-primary wow fadeInUp" href="#">More
                        Fleet
                        <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                        </svg></a></div>
            </div>
        </div>
        <div class="box-slide-fleet mt-50">
            <div class="box-swiper">
                <div class="swiper-container swiper-group-4-fleet pb-0">
                    <div class="swiper-wrapper">
                        @foreach ($fleet as $fleet_data)
                        <div class="swiper-slide">
                            <div class="cardFleet wow fadeInUp">
                                <div class="cardInfo"><a href="{{url('fleet-detail/'.$fleet_data->slug)}}">
                                        <h3 class="text-20-medium color-text mb-10">{{$fleet_data->title}}</h3>
                                    </a>
                                    <p class="text-14 color-text mb-30">{{$fleet_data->sub_title}}</p>
                                </div>
                                <div class="cardImage mb-30"><a href="{{url('fleet-detail/'.$fleet_data->slug)}}"><img
                                            src="{{url($fleet_data->banner)}}" alt="Luxride"></a></div>
                                <div class="cardInfoBottom">
                                    <div class="passenger"><span class="icon-circle icon-passenger"></span><span
                                            class="text-14">Passengers<span>{{$fleet_data->passengers}}</span></span>
                                    </div>
                                    <div class="luggage"><span class="icon-circle icon-luggage"></span><span
                                            class="text-14">Luggage<span>{{$fleet_data->luggage_large}}</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <div class="box-pagination-fleet">
                        <div class="swiper-button-prev swiper-button-prev-fleet">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                            </svg>
                        </div>
                        <div class="swiper-button-next swiper-button-next-fleet">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Airport Transfer Services from Leicester -->
    <section class="section pt-65 pb-0">
        <div class="container-sub">
            <div class="text-center">
                <h2 class="heading-44-medium wow fadeInUp">Airport Transfer Services from Leicester</h2>
                <p class="py-1 commonHead-para">Experience hassle-free and punctual airport transfers from Leicester to all major UK airports.</p>
            </div>
            <div class="row mt-60 ">
                <div class="row g-3">
                    <div class="col-lg-4 mb-30">
                        <div class="cardServiceStyle2 serviceCard wow fadeInUp cursor-pointer py-3 px-3 h-100">
                            <div class="shadow-sm rounded-circle flightSvg p-2 my-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#E95440" viewBox="0 0 576 512">
                                    <path d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z" />
                                </svg>
                            </div>
                            <h3 class="cardTitle text-20-medium mb-10 cardH2 mt-3">Leicester to Birmingham International Airport</h3>
                            <p class="cardDesc text-14 color-text mb-10">Quick and reliable transfers to Birmingham International Airport. Arrive on time for your flight
                                with our professional drivers.
                            </p><a
                                class="cardLink learnMore btn btn-link hover-up"
                                href="">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="cardServiceStyle2 serviceCard wow fadeInUp cursor-pointer py-3 px-3 h-100">
                            <div class="shadow-sm rounded-circle flightSvg p-2 my-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#E95440" viewBox="0 0 576 512">
                                    <path d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z" />
                                </svg>
                            </div>
                            <h3 class="cardTitle text-20-medium mb-10 cardH2 mt-3">Leicester to East Midlands Airport</h3>
                            <p class="cardDesc text-14 color-text mb-10">Seamless transportation to East Midlands Airport. Enjoy a comfortable ride and punctual service
                                for all your travel needs.
                            </p><a
                                class="cardLink learnMore btn btn-link hover-up"
                                href="">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="cardServiceStyle2 serviceCard wow fadeInUp cursor-pointer py-3 px-3 h-100">
                            <div class="shadow-sm rounded-circle flightSvg p-2 my-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#E95440" viewBox="0 0 576 512">
                                    <path d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z" />
                                </svg>
                            </div>
                            <h3 class="cardTitle text-20-medium mb-10 cardH2 mt-3">Leicester to Luton Airport</h3>
                            <p class="cardDesc text-14 color-text mb-10">Efficient transfers to Luton Airport. Trust our experienced drivers to get you to the airport safely
                                and on schedule.
                            </p><a
                                class="cardLink learnMore btn btn-link hover-up"
                                href="">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="cardServiceStyle2 serviceCard wow fadeInUp cursor-pointer py-3 px-3 h-100">
                            <div class="shadow-sm rounded-circle flightSvg p-2 my-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#E95440" viewBox="0 0 576 512">
                                    <path d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z" />
                                </svg>
                            </div>
                            <h3 class="cardTitle text-20-medium mb-10 cardH2 mt-3">Leicester to Manchester Airport</h3>
                            <p class="cardDesc text-14 color-text mb-10">Dependable rides to Manchester Airport. Travel in comfort and style with our timely and
                                professional airport transfer services.
                            </p><a
                                class="cardLink learnMore btn btn-link hover-up"
                                href="">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="cardServiceStyle2 serviceCard wow fadeInUp cursor-pointer py-3 px-3 h-100">
                            <div class="shadow-sm rounded-circle flightSvg p-2 my-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#E95440" viewBox="0 0 576 512">
                                    <path d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z" />
                                </svg>
                            </div>
                            <h3 class="cardTitle text-20-medium mb-10 cardH2 mt-3">Leicester to Gatwick Airport</h3>
                            <p class="cardDesc text-14 color-text mb-10">Smooth transfers to Gatwick Airport. Our courteous drivers ensure a stress-free journey to one
                                of the UK's busiest airports.
                            </p><a
                                class="cardLink learnMore btn btn-link hover-up"
                                href="">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="cardServiceStyle2 serviceCard wow fadeInUp cursor-pointer py-3 px-3 h-100">
                            <div class="shadow-sm rounded-circle flightSvg p-2 my-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#E95440" viewBox="0 0 576 512">
                                    <path d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z" />
                                </svg>
                            </div>
                            <h3 class="cardTitle text-20-medium mb-10 cardH2 mt-3">Leicester to Stansted Airport</h3>
                            <p class="cardDesc text-14 color-text mb-10">Reliable transportation to Stansted Airport. Enjoy a comfortable and prompt transfer with our
                                dedicated airport transfer team.
                            </p><a
                                class="cardLink learnMore btn btn-link hover-up"
                                href="">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="cardServiceStyle2 serviceCard wow fadeInUp cursor-pointer py-3 px-3 h-100">
                            <div class="shadow-sm rounded-circle flightSvg p-2 my-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#E95440" viewBox="0 0 576 512">
                                    <path d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z" />
                                </svg>
                            </div>
                            <h3 class="cardTitle text-20-medium mb-10 cardH2 mt-3">Leicester to London Heathrow Airport</h3>
                            <p class="cardDesc text-14 color-text mb-10">Premium transfers to London Heathrow Airport. Experience top-notch service and punctuality
                                for your international and domestic flights.
                            </p><a
                                class="cardLink learnMore btn btn-link hover-up"
                                href="">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>

                </div>

            </div>


        </div>
        </div>
    </section>

    <!-- Seaport Transfer Services from Leicester -->
    <section class="section pt-65 pb-0">
        <div class="container-sub">
            <div class="text-center">
                <h2 class="heading-44-medium wow fadeInUp">Seaport Transfer Services from Leicester</h2>
                <p class="py-1 commonHead-para">Experience reliable and comfortable seaport transfers from Leicester to the UK’s major
                    seaports.
                </p>
            </div>
            <div class="row mt-60 ">
                <div class="row g-3">
                    <div class="col-lg-4 mb-30">
                        <div class="cardServiceStyle2 serviceCard wow fadeInUp cursor-pointer py-3 px-3 h-100">
                            <div class="shadow-sm rounded-circle flightSvg p-2 my-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#E95440" viewBox="0 0 576 512">
                                    <path d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z" />
                                </svg>
                            </div>
                            <h3 class="cardTitle text-20-medium mb-10 cardH2 mt-3">Leicester to London Gateway Port</h3>
                            <p class="cardDesc text-14 color-text mb-10">Efficient transfers to London Gateway Port. Enjoy a comfortable ride with our punctual and
                                professional seaport transfer services.
                            </p><a
                                class="cardLink learnMore btn btn-link hover-up"
                                href="">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="cardServiceStyle2 serviceCard wow fadeInUp cursor-pointer py-3 px-3 h-100">
                            <div class="shadow-sm rounded-circle flightSvg p-2 my-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#E95440" viewBox="0 0 576 512">
                                    <path d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z" />
                                </svg>
                            </div>
                            <h3 class="cardTitle text-20-medium mb-10 cardH2 mt-3">Leicester to Southampton Port</h3>
                            <p class="cardDesc text-14 color-text mb-10">Reliable transportation to Southampton Port. Trust our experienced drivers to get you there
                                safely and on schedule.
                            </p><a
                                class="cardLink learnMore btn btn-link hover-up"
                                href="">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="cardServiceStyle2 serviceCard wow fadeInUp cursor-pointer py-3 px-3 h-100">
                            <div class="shadow-sm rounded-circle flightSvg p-2 my-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#E95440" viewBox="0 0 576 512">
                                    <path d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z" />
                                </svg>
                            </div>
                            <h3 class="cardTitle text-20-medium mb-10 cardH2 mt-3">Leicester to Liverpool Port</h3>
                            <p class="cardDesc text-14 color-text mb-10">Seamless transfers to Liverpool Port. Travel in comfort and style with our dependable seaport
                                transfer solutions.
                            </p><a
                                class="cardLink learnMore btn btn-link hover-up"
                                href="">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="cardServiceStyle2 serviceCard wow fadeInUp cursor-pointer py-3 px-3 h-100">
                            <div class="shadow-sm rounded-circle flightSvg p-2 my-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#E95440" viewBox="0 0 576 512">
                                    <path d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z" />
                                </svg>
                            </div>
                            <h3 class="cardTitle text-20-medium mb-10 cardH2 mt-3">Leicester to Felixstowe Port</h3>
                            <p class="cardDesc text-14 color-text mb-10">Dependable rides to Felixstowe Port. Our professional drivers ensure a stress-free and timely
                                transfer for all your needs.
                            </p><a
                                class="cardLink learnMore btn btn-link hover-up"
                                href="">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="cardServiceStyle2 serviceCard wow fadeInUp cursor-pointer py-3 px-3 h-100">
                            <div class="shadow-sm rounded-circle flightSvg p-2 my-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#E95440" viewBox="0 0 576 512">
                                    <path d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z" />
                                </svg>
                            </div>
                            <h3 class="cardTitle text-20-medium mb-10 cardH2 mt-3">Leicester to Dover Port</h3>
                            <p class="cardDesc text-14 color-text mb-10">Smooth transfers to Dover Port. Experience hassle-free transportation with our dedicated
                                seaport transfer team.
                            </p><a
                                class="cardLink learnMore btn btn-link hover-up"
                                href="">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="cardServiceStyle2 serviceCard wow fadeInUp cursor-pointer py-3 px-3 h-100">
                            <div class="shadow-sm rounded-circle flightSvg p-2 my-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#E95440" viewBox="0 0 576 512">
                                    <path d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z" />
                                </svg>
                            </div>
                            <h3 class="cardTitle text-20-medium mb-10 cardH2 mt-3">Leicester to Bristol Port</h3>
                            <p class="cardDesc text-14 color-text mb-10">Reliable transportation to Bristol Port. Enjoy a comfortable and prompt journey with our expert
                                seaport transfer services.
                            </p><a
                                class="cardLink learnMore btn btn-link hover-up"
                                href="">Learn more
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>

                </div>

            </div>


        </div>
        </div>
    </section>

    <!-- Why Choose Us? -->
    <section class="section pt-65 pb-0">
        <div class="container-sub">
            <div class="text-center">
                <h2 class="heading-44-medium wow fadeInUp">Why Choose Us?</h2>
                <p class="py-1 commonHead-para">Choosing the right taxi service can make all the difference in your travel experience.
                </p>
            </div>
            <div class="row mt-60  justify-content-between px-lg-0 px-3">
                <div class="col-lg-6 mb-20">
                    <div class="why-box flex ">
                        <div class="whyItems1">
                            <svg fill="#E95440" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M128 0c13.3 0 24 10.7 24 24l0 40 144 0 0-40c0-13.3 10.7-24 24-24s24 10.7 24 24l0 40 40 0c35.3 0 64 28.7 64 64l0 16 0 48 0 256c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 192l0-48 0-16C0 92.7 28.7 64 64 64l40 0 0-40c0-13.3 10.7-24 24-24zM400 192L48 192l0 256c0 8.8 7.2 16 16 16l320 0c8.8 0 16-7.2 16-16l0-256zM329 297L217 409c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47 95-95c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                            </svg>
                        </div>
                        <div class="whyItems2">
                            <h3 class="cardTitle whyH3  mb-10">Availability</h3>
                            <p class=" whyPara color-text mb-10">Whether it's an early morning flight or a late-night event, our services are available around the
                                clock. We’re always here to ensure you reach your destination on time, no matter the hour.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <div class="why-box flex ">
                        <div class="whyItems1">
                            <svg fill="#E95440" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                            </svg>
                        </div>
                        <div class="whyItems2">
                            <h3 class="cardTitle whyH3  mb-10">Professional and Experienced Drivers</h3>
                            <p class=" whyPara color-text mb-10">Our team of courteous and knowledgeable drivers are fully licensed and trained to provide safe,
                                efficient, and friendly service. They know Leicester and its surroundings inside out.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <div class="why-box flex ">
                        <div class="whyItems1">
                            <svg fill="#E95440" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                            </svg>
                        </div>
                        <div class="whyItems2">
                            <h3 class="cardTitle whyH3  mb-10">Punctuality Guaranteed</h3>
                            <p class=" whyPara color-text mb-10">We understand the importance of time, especially when catching a flight or attending a business
                                meeting. Our commitment to punctuality means you can rely on us to be there.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <div class="why-box flex ">
                        <div class="whyItems1">
                            <svg fill="#E95440" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M192 0c-17.7 0-32 14.3-32 32l0 32 0 .2c-38.6 2.2-72.3 27.3-85.2 64.1L39.6 228.8C16.4 238.4 0 261.3 0 288L0 432l0 48c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32l0-48 320 0 0 48c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32l0-48 0-144c0-26.7-16.4-49.6-39.6-59.2L437.2 128.3c-12.9-36.8-46.6-62-85.2-64.1l0-.2 0-32c0-17.7-14.3-32-32-32L192 0zM165.4 128l181.2 0c13.6 0 25.7 8.6 30.2 21.4L402.9 224l-293.8 0 26.1-74.6c4.5-12.8 16.6-21.4 30.2-21.4zM96 288a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm288 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                            </svg>
                        </div>
                        <div class="whyItems2">
                            <h3 class="cardTitle whyH3  mb-10">Comfortable and Well-Maintained Fleet</h3>
                            <p class=" whyPara color-text mb-10">Travel in comfort with our diverse range of vehicles, from spacious sedans to luxury vans. Each
                                vehicle is meticulously maintained and equipped.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <div class="why-box flex ">
                        <div class="whyItems1">
                            <svg fill="#E95440" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path d="M312 24l0 10.5c6.4 1.2 12.6 2.7 18.2 4.2c12.8 3.4 20.4 16.6 17 29.4s-16.6 20.4-29.4 17c-10.9-2.9-21.1-4.9-30.2-5c-7.3-.1-14.7 1.7-19.4 4.4c-2.1 1.3-3.1 2.4-3.5 3c-.3 .5-.7 1.2-.7 2.8c0 .3 0 .5 0 .6c.2 .2 .9 1.2 3.3 2.6c5.8 3.5 14.4 6.2 27.4 10.1l.9 .3s0 0 0 0c11.1 3.3 25.9 7.8 37.9 15.3c13.7 8.6 26.1 22.9 26.4 44.9c.3 22.5-11.4 38.9-26.7 48.5c-6.7 4.1-13.9 7-21.3 8.8l0 10.6c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-11.4c-9.5-2.3-18.2-5.3-25.6-7.8c-2.1-.7-4.1-1.4-6-2c-12.6-4.2-19.4-17.8-15.2-30.4s17.8-19.4 30.4-15.2c2.6 .9 5 1.7 7.3 2.5c13.6 4.6 23.4 7.9 33.9 8.3c8 .3 15.1-1.6 19.2-4.1c1.9-1.2 2.8-2.2 3.2-2.9c.4-.6 .9-1.8 .8-4.1l0-.2c0-1 0-2.1-4-4.6c-5.7-3.6-14.3-6.4-27.1-10.3l-1.9-.6c-10.8-3.2-25-7.5-36.4-14.4c-13.5-8.1-26.5-22-26.6-44.1c-.1-22.9 12.9-38.6 27.7-47.4c6.4-3.8 13.3-6.4 20.2-8.2L264 24c0-13.3 10.7-24 24-24s24 10.7 24 24zM568.2 336.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 485.5c-23.4 17.2-51.6 26.5-80.7 26.5L192 512 32 512c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l36.8 0 44.9-36c22.7-18.2 50.9-28 80-28l78.3 0 16 0 64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0-16 0c-8.8 0-16 7.2-16 16s7.2 16 16 16l120.6 0 119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 384c0 0 0 0 0 0l-.9 0c.3 0 .6 0 .9 0z" />
                            </svg>
                        </div>
                        <div class="whyItems2">
                            <h3 class="cardTitle whyH3  mb-10">Competitive and Transparent Pricing</h3>
                            <p class=" whyPara color-text mb-10">Enjoy top-quality service without breaking the bank. Our pricing is competitive, with no hidden
                                fees, ensuring you get the best value for your money.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <div class="why-box flex ">
                        <div class="whyItems1">
                            <svg fill="#E95440" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path d="M0 48C0 21.5 21.5 0 48 0l0 48 0 393.4 130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4 336 48 48 48 48 0 336 0c26.5 0 48 21.5 48 48l0 440c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488L0 48z" />
                            </svg>
                        </div>
                        <div class="whyItems2">
                            <h3 class="cardTitle whyH3  mb-10">Easy and Convenient Booking</h3>
                            <p class=" whyPara color-text mb-10">Booking your ride is simple and hassle-free with our user-friendly website and mobile-friendly
                                platform. Whether you prefer to book online.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <div class="why-box flex ">
                        <div class="whyItems1">
                            <svg fill="#E95440" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path d="M544 248l0 3.3 69.7-69.7c21.9-21.9 21.9-57.3 0-79.2L535.6 24.4c-21.9-21.9-57.3-21.9-79.2 0L416.3 64.5c-2.7-.3-5.5-.5-8.3-.5L296 64c-37.1 0-67.6 28-71.6 64l-.4 0 0 120c0 22.1 17.9 40 40 40s40-17.9 40-40l0-72c0 0 0-.1 0-.1l0-15.9 16 0 136 0c0 0 0 0 .1 0l7.9 0c44.2 0 80 35.8 80 80l0 8zM336 192l0 56c0 39.8-32.2 72-72 72s-72-32.2-72-72l0-118.6c-35.9 6.2-65.8 32.3-76 68.2L99.5 255.2 26.3 328.4c-21.9 21.9-21.9 57.3 0 79.2l78.1 78.1c21.9 21.9 57.3 21.9 79.2 0l37.7-37.7c.9 0 1.8 .1 2.7 .1l160 0c26.5 0 48-21.5 48-48c0-5.6-1-11-2.7-16l2.7 0c26.5 0 48-21.5 48-48c0-12.8-5-24.4-13.2-33c25.7-5 45.1-27.6 45.2-54.8l0-.4c-.1-30.8-25.1-55.8-56-55.8c0 0 0 0 0 0l-120 0z" />
                            </svg>
                        </div>
                        <div class="whyItems2">
                            <h3 class="cardTitle whyH3  mb-10">Excellent Customer Service</h3>
                            <p class=" whyPara color-text mb-10">Our dedicated customer support team is always ready to assist you with any inquiries or special
                                requests. We strive to provide exceptional service and ensure your complete satisfaction from
                                start to finish.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <div class="why-box flex ">
                        <div class="whyItems1">
                            <svg fill="#E95440" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c1.8 0 3.5-.2 5.3-.5c-76.3-55.1-99.8-141-103.1-200.2c-16.1-4.8-33.1-7.3-50.7-7.3l-91.4 0zm308.8-78.3l-120 48C358 277.4 352 286.2 352 296c0 63.3 25.9 168.8 134.8 214.2c5.9 2.5 12.6 2.5 18.5 0C614.1 464.8 640 359.3 640 296c0-9.8-6-18.6-15.1-22.3l-120-48c-5.7-2.3-12.1-2.3-17.8 0zM591.4 312c-3.9 50.7-27.2 116.7-95.4 149.7l0-187.8L591.4 312z" />
                            </svg>
                        </div>
                        <div class="whyItems2">
                            <h3 class="cardTitle whyH3  mb-10">Safety and Hygiene First</h3>
                            <p class=" whyPara color-text mb-10">Your safety is our top priority. We adhere to strict hygiene protocols, regularly sanitizing our
                                vehicles and ensuring all safety measures are in place.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <div class="why-box flex ">
                        <div class="whyItems1">
                            <svg fill="#E95440" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z" />
                            </svg>
                        </div>
                        <div class="whyItems2">
                            <h3 class="cardTitle whyH3  mb-10">Positive Customer Reviews</h3>
                            <p class=" whyPara color-text mb-10">Don’t just take our word for it—our satisfied customers consistently praise our reliability,
                                professionalism, and outstanding service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        </div>
    </section>


    <!-- Ready to Go? -->
    <section class="section pt-65 pb-0">
        <div class="container-sub">
            <div class="bg-showcase readyToGo flex flex-md-row flex-column gap-md-0 gap-3 p-5">
                <div class="item1">
                    <h2 class="heading-44-medium text-white wow fadeInUp">Ready to Go?</h2>
                    <p class="py-1 text-white commonHead-para">Book your reliable and comfortable taxi ride in just a few clicks</p>
                </div>
                <div class="item2 d-flex align-items-center justify-content-center">

                    <button class="button-27" role="button">Book Now
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="section pt-65 pb-0">
        <div class="container-sub py-5">
            <div class="row  align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12">
                            <h2 class="heading-44-medium wow fadeInUp mb-3">About Us</h2>
                            <div>
                                <p class="mb-5 pb-5 aboutPara lh-base"> Welcome to GI Express, Leicester’s trusted taxi service dedicated to providing reliable,
                                    comfortable, and professional transportation solutions. Whether you’re heading to the airport, exploring the city, or traveling across the UK, we are here to ensure your journey is seamless
                                    and stress-free.</p>
                                <p class="mb-5 aboutPara lh-base"> Our mission is to deliver exceptional transportation services that exceed our customers’
                                    expectations. We strive to offer punctual, safe, and comfortable rides, ensuring every passenger
                                    experiences the highest level of satisfaction. We were established with a passion for excellence
                                    in transportation. Starting as a small local taxi service in Leicester.</p>
                            </div>
                            <button class="aboutUs-readBtn">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="https://bootstrapbrain.com/demo/components/abouts/about-1/assets/img/about-img-1.jpg" alt="About 1">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="section pt-60 block-padding-100">
        <h2 class="heading-44-medium text-center pb-5 mb-5 wow fadeInUp">Testimonials</h2>
        <div class="box-fleet-padding bg-2 bg-testimonial">
            <div class="container-sub">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-30">
                        <h2 class="heading-44-medium color-text mb-30 wow fadeInUp"
                            style="visibility: visible; animation-name: fadeInUp;">Hear what our amazing customers say
                        </h2>
                        <p class="text-16 color-text mb-30 wow fadeInUp"
                            style="visibility: visible; animation-name: fadeInUp;">Sad ipscing elitrsed diamnonu myeir
                            mod, sadipscing elitrsed dia morem ipsum dolor situamet consetetur loutrytru.</p><a
                            class="btn btn-secondary wow fadeInUp"
                            style="visibility: visible; animation-name: fadeInUp;">Get Started
                            <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                            </svg></a>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="box-region-right wow fadeInUp"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="box-swiper">
                                <div
                                    class="swiper-container swiper-group-testimonials-2 pb-50 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                    <div class="swiper-wrapper" id="swiper-wrapper-106854edcf51158f6" aria-live="off"
                                        style="transform: translate3d(-1062px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                            data-swiper-slide-index="1" role="group" aria-label="1 / 4"
                                            style="width: 531px;">
                                            <div class="cardTestimonial">
                                                <div class="cardAuthor mb-30">
                                                    <div class="box-author"> <img
                                                            src="{{url('/public/frontend/')}}/assets/imgs/page/homepage2/author.png"
                                                            alt="luxride">
                                                        <div class="author-info">
                                                            <div class="author-name text-18-medium-2 color-text">
                                                                Jonathan Miller</div>
                                                            <p class="text-14 color-text desc-author">Web Developer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="info-testimonial">
                                                    <p class="color-text text-18-medium">I really can recommend this
                                                        theme, because it’s coded very well and it’s really easy to
                                                        build your own website!</p>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($testimonial as $test)
                                        <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
                                            data-swiper-slide-index="0" role="group" aria-label="2 / 4"
                                            style="width: 531px;">
                                            <div class="cardTestimonial">
                                                <div class="cardAuthor mb-30">
                                                    <div class="box-author"> <img
                                                            src="{{isset($test->profile)?url($test->profile):url('/public/frontend/')}}/assets/imgs/page/homepage2/author.png"
                                                            alt="luxride">
                                                        <div class="author-info">
                                                            <div class="author-name text-18-medium color-text">
                                                                {{$test->name}}
                                                            </div>
                                                            <p class="text-14 color-text desc-author">
                                                                {{$test->designation}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="info-testimonial">
                                                    <p class="color-text text-18-medium-2">{{$test->review}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                    <div class="box-pagination-button-testimonials-2">
                                        <div class="swiper-button-prev swiper-button-prev-testimonials-2" tabindex="0"
                                            role="button" aria-label="Previous slide"
                                            aria-controls="swiper-wrapper-106854edcf51158f6"></div>
                                        <div class="swiper-button-next swiper-button-next-testimonials-2" tabindex="0"
                                            role="button" aria-label="Next slide"
                                            aria-controls="swiper-wrapper-106854edcf51158f6"></div>
                                        <div
                                            class="swiper-pagination swiper-pagination-testimonials-2 swiper-pagination-fraction">
                                            <span class="swiper-pagination-current">2</span> / <span
                                                class="swiper-pagination-total">2</span>
                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Limited Time Offer! -->
    <section class="section pt-65 pb-0">
        <div class="container-sub">
            <div class="bg-showcase readyToGo flex flex-md-row flex-column gap-md-0 gap-3 p-5">
                <div class="item1">
                    <h2 class="heading-44-medium text-white wow fadeInUp">Limited Time Offer!</h2>
                    <p class="py-1 text-white commonHead-para"> Enjoy 10% off your first booking with us. Don’t miss out!</p>
                </div>
                <div class="item2 d-flex align-items-center justify-content-center">

                    <button class="button-27" role="button">Claim Your Offer

                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Book? -->
    <section class="section pt-65 pb-30">
        <div class="container-sub">
            <div class="text-center">
                <h2 class="heading-44-medium wow fadeInUp"> How to Book?</h2>
            </div>
            <div class="d-flex flex-lg-row flex-column align-items-center justify-content-between gap-5 py-5">
                <div class="cardWork px-3 text-center">
                    <div class="d-flex justify-content-center pb-3">
                        <span class="how-numbering text-white rounded-circle p-3 text-23-semibold d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">01</span>
                    </div>

                    <div class="cardTitle">
                        <h5 class="text-23-semibold color-text">Choose Your Service</h5>
                    </div>
                </div>
                <div class="cardWork px-3 text-center">
                    <div class="d-flex justify-content-center pb-3">
                        <span class="how-numbering text-white rounded-circle p-3 text-23-semibold d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">02</span>
                    </div>

                    <div class="cardTitle">
                        <h5 class="text-23-semibold color-text">Select Your Vehicle</h5>
                    </div>
                </div>
                <div class="cardWork px-3 text-center">
                    <div class="d-flex justify-content-center pb-3">
                        <span class="how-numbering text-white rounded-circle p-3 text-23-semibold d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">03</span>
                    </div>

                    <div class="cardTitle">
                        <h5 class="text-23-semibold color-text">Enter Your Details</h5>
                    </div>
                </div>
                <div class="cardWork px-3 text-center">
                    <div class="d-flex justify-content-center pb-3">
                        <span class="how-numbering text-white rounded-circle p-3 text-23-semibold d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">04</span>
                    </div>

                    <div class="cardTitle">
                        <h5 class="text-23-semibold color-text">Confirm and Book</h5>
                    </div>
                </div>

            </div>
    </section>

    <!-- Trusted Taxi Service in Leicester -->
    <section class="section pt-65 pb-0">
        <div class="container-sub">
            <h2 class="heading-44-medium text-center wow fadeInUp mb-5 pb-5">Trusted Taxi Service in Leicester</h2>
            <div class="row gap-lg-0 gap-3 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12">
                            <div>
                                <p class="mb-5 pb-5 aboutPara lh-base"> Welcome to GI Express, Leicester’s trusted taxi service dedicated to providing reliable,
                                    comfortable, and professional transportation solutions. Whether you’re heading to the airport,
                                    exploring the city, or traveling across the UK, we are here to ensure your journey is seamless
                                    and stress-free.
                                </p>
                                <p class="mb-5 aboutPara lh-base">Our mission is to deliver exceptional transportation services that exceed our customers’
                                    expectations. We strive to offer punctual, safe, and comfortable rides, ensuring every passenger
                                    experiences the highest level of satisfaction. We were established with a passion for excellence
                                    in transportation. Starting as a small local taxi service in Leicester.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="https://bootstrapbrain.com/demo/components/abouts/about-1/assets/img/about-img-1.jpg" alt="About 1">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ's -->
    <section class="section pt-65 pb-30 bg-faqs">
        <div class="container-sub">
            <div class="box-faqs">
                <div class="text-center">
                    <h2 class="color-brand-1 mb-20 wow fadeInUp">Frequently Asked Questions</h2>
                </div>
                <div class="mt-60 mb-40">
                    @foreach($faq as $faq_key=>$faq_data)
                    @php
                    if($faq_key == 0){
                    $class = 'accordion wow fadeInUp';
                    $classtwo = 'show';
                    }else{
                    $class = 'accordion-item';
                    $classtwo = '';
                    }
                    @endphp
                    <div class="{{$class}}" id="accordionFAQ">


                        <div class="accordion-item">
                            <h5 class="accordion-header" id="heading{{$faq_key}}">
                                <button class="accordion-button text-heading-5" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{$faq_key}}" aria-expanded="true"
                                    aria-controls="collapse{{$faq_key}}">{{$faq_data->question}}</button>
                            </h5>
                            <div class="accordion-collapse collapse {{$classtwo}}" id="collapse{{$faq_key}}"
                                aria-labelledby="heading{{$faq_key}}" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">{{$faq_data->answer}}</div>
                            </div>
                        </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest From News -->
    <!-- <section class="sectionpt-65 pb-30 bg-white latest-new-white">
        <div class="container-sub">
            <div class="row align-items-center">
                <div class="col-lg-6 col-7">
                    <h2 class="heading-44-medium color-text wow fadeInUp"
                        style="visibility: visible; animation-name: fadeInUp;">Latest From News</h2>
                </div>
                <div class="col-lg-6 col-5 text-end"><a
                        class="text-16-medium color-text hover-up d-inline-block wow fadeInUp" href="#"
                        style="visibility: visible; animation-name: fadeInUp;">More News
                        <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                        </svg></a></div>
            </div>
            <div class="row mt-50">
                @foreach($blog as $blog_data)
                <div class="col-lg-4">
                    <div class="cardNews wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><a
                            href="{{url('/blog-detail/'.$blog_data->slug)}}">
                            <div class="cardImage">
                                <div class="datePost">
                                    <div class="heading-52-medium color-white">14.</div>
                                    <p class="text-14 color-white">Jun, 2022</p>
                                </div><img src="{{ isset($blog_data->image) ? url($blog_data->image) : url('/public/frontend/assets/imgs/page/homepage1/news1.png') }}"
                                    alt="luxride" height="260px">

                            </div>
                        </a>
                        <div class="cardInfo">
                            <div class="tags mb-10"><a href="#">Travel</a></div><a class="color-white"
                                href="{{url('/blog-detail/'.$blog_data->slug)}}">
                                <h3 class="text-20-medium color-white mb-20">{{$blog_data->title}}</h3>
                            </a><a class="cardLink btn btn-arrow-up" href="{{url('/blog-detail/'.$blog_data->slug)}}">
                                <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section> -->

    <!-- Join our Happy Customers -->
    <section class="section pt-65 pb-0">
        <div class="container-sub">
            <div class="bg-showcase readyToGo flex flex-md-row flex-column gap-md-0 gap-3 p-5">
                <div class="item1">
                    <h2 class="heading-44-medium text-white wow fadeInUp">Join Our Happy Customers</h2>
                    <p class="py-1 text-white commonHead-para"> Experience the best taxi service in Leicester today.</p>
                </div>
                <div class="item2 d-flex align-items-center justify-content-center">

                    <button class="button-27" role="button"> Book Your Ride

                    </button>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection