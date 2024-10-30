<?php
include 'header.php';
?>

    <main class="main">
      <section class="section py-5">
        <div class="container-sub"> 
          <div class="box-booking-tabs"> 
            <div class="item-tab wow fadeInUp"><a href="booking-vehicle.php">
                <div class="box-tab-step active">
                  <div class="icon-tab"> <span class="icon-book icon-vehicle"> </span><span class="text-tab">Vehicle </span></div>
                  <div class="number-tab"> <span>01</span></div>
                </div></a></div>
            <div class="item-tab wow fadeInUp"><a href="booking-extra.php">
                <div class="box-tab-step">
                  <div class="icon-tab"> <span class="icon-book icon-extra"> </span><span class="text-tab">Extras</span></div>
                  <div class="number-tab"> <span>02</span></div>
                </div></a></div>
            <div class="item-tab wow fadeInUp"><a href="booking-passenger.php">
                <div class="box-tab-step">
                  <div class="icon-tab"> <span class="icon-book icon-pax"> </span><span class="text-tab">Details  </span></div>
                  <div class="number-tab"> <span>03</span></div>
                </div></a></div>
            <div class="item-tab wow fadeInUp"><a href="booking-payment.php">
                <div class="box-tab-step"> 
                  <div class="icon-tab"> <span class="icon-book icon-payment"> </span><span class="text-tab">Payment  </span></div>
                  <div class="number-tab"> <span>04</span></div>
                </div></a></div>
          </div>
          <div class="box-row-tab mt-50">
            <div class="box-tab-left">
              <div class="box-content-detail"> 
                <h3 class="heading-24-medium color-text mb-30 wow fadeInUp">Select Your Car</h3>
                <div class="list-vehicles wow fadeInUp"> 
                  <div class="item-vehicle wow fadeInUp">
                    <div class="vehicle-left">
                      <div class="vehicle-image"><img src="{{url('/public/frontend/')}}/assets/imgs/page/booking/img-vehicle.png" alt="luxride"></div>
                      <div class="vehicle-facilities">
                        <div class="text-fact meet-greeting">Meet & Greet included</div>
                        <div class="text-fact free-cancel">Free cancellation</div>
                        <div class="text-fact free-waiting">Free Waiting time</div>
                        <div class="text-fact safe-travel">Safe and secure travel</div>
                      </div>
                      <div class="mt-10"><a class="link text-14-medium" href="booking-extra.php">Show more information</a></div>
                    </div>
                    <div class="vehicle-right">
                      <h5 class="text-20-medium color-text mb-10">Business Class</h5>
                      <p class="text-14 color-text mb-20">Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p>
                      <div class="vehicle-passenger-luggage mb-10"><span class="passenger">Passengers 4</span><span class="luggage">Luggage 2</span></div>
                      <div class="vehicle-price">
                        <h4 class="heading-30-medium color-text">$125.25</h4>
                      </div>
                      <div class="price-desc mb-20">All prices include VAT, fees &amp; tip.</div><a class="btn btn-primary w-100" href="booking-extra.php">Select
                        <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                        </svg></a>
                    </div>
                  </div>
                  <div class="item-vehicle wow fadeInUp">
                    <div class="vehicle-left">
                      <div class="vehicle-image"><img src="{{url('/public/frontend/')}}/assets/imgs/page/booking/img-vehicle-2.png" alt="luxride"></div>
                      <div class="vehicle-facilities">
                        <div class="text-fact meet-greeting">Meet & Greet included</div>
                        <div class="text-fact free-cancel">Free cancellation</div>
                        <div class="text-fact free-waiting">Free Waiting time</div>
                        <div class="text-fact safe-travel">Safe and secure travel</div>
                      </div>
                      <div class="mt-10"><a class="link text-14-medium" href="booking-extra.php">Show more information</a></div>
                    </div>
                    <div class="vehicle-right">
                      <h5 class="text-20-medium color-text mb-10">First Class</h5>
                      <p class="text-14 color-text mb-20">Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p>
                      <div class="vehicle-passenger-luggage mb-10"><span class="passenger">Passengers 4</span><span class="luggage">Luggage 2</span></div>
                      <div class="vehicle-price">
                        <h4 class="heading-30-medium color-text">$250.98</h4>
                      </div>
                      <div class="price-desc mb-20">All prices include VAT, fees &amp; tip.</div><a class="btn btn-primary w-100" href="booking-extra.php">Select
                        <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                        </svg></a>
                    </div>
                  </div>
                  <div class="item-vehicle wow fadeInUp">
                    <div class="vehicle-left">
                      <div class="vehicle-image"><img src="{{url('/public/frontend/')}}/assets/imgs/page/booking/img-vehicle-3.png" alt="luxride"></div>
                      <div class="vehicle-facilities">
                        <div class="text-fact meet-greeting">Meet & Greet included</div>
                        <div class="text-fact free-cancel">Free cancellation</div>
                        <div class="text-fact free-waiting">Free Waiting time</div>
                        <div class="text-fact safe-travel">Safe and secure travel</div>
                      </div>
                      <div class="mt-10"><a class="link text-14-medium" href="booking-extra.php">Show more information</a></div>
                    </div>
                    <div class="vehicle-right">
                      <h5 class="text-20-medium color-text mb-10">Business Van/SUV</h5>
                      <p class="text-14 color-text mb-20">Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p>
                      <div class="vehicle-passenger-luggage mb-10"><span class="passenger">Passengers 4</span><span class="luggage">Luggage 2</span></div>
                      <div class="vehicle-price">
                        <h4 class="heading-30-medium color-text">$321.91</h4>
                      </div>
                      <div class="price-desc mb-20">All prices include VAT, fees &amp; tip.</div><a class="btn btn-primary w-100" href="booking-extra.php">Select
                        <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                        </svg></a>
                    </div>
                  </div>
                  <div class="item-vehicle wow fadeInUp">
                    <div class="vehicle-left">
                      <div class="vehicle-image"><img src="{{url('/public/frontend/')}}/assets/imgs/page/booking/img-vehicle-4.png" alt="luxride"></div>
                      <div class="vehicle-facilities">
                        <div class="text-fact meet-greeting">Meet & Greet included</div>
                        <div class="text-fact free-cancel">Free cancellation</div>
                        <div class="text-fact free-waiting">Free Waiting time</div>
                        <div class="text-fact safe-travel">Safe and secure travel</div>
                      </div>
                      <div class="mt-10"><a class="link text-14-medium" href="booking-extra.php">Show more information</a></div>
                    </div>
                    <div class="vehicle-right">
                      <h5 class="text-20-medium color-text mb-10">Electric Class</h5>
                      <p class="text-14 color-text mb-20">Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p>
                      <div class="vehicle-passenger-luggage mb-10"><span class="passenger">Passengers 4</span><span class="luggage">Luggage 2</span></div>
                      <div class="vehicle-price">
                        <h4 class="heading-30-medium color-text">$546.23</h4>
                      </div>
                      <div class="price-desc mb-20">All prices include VAT, fees &amp; tip.</div><a class="btn btn-primary w-100" href="booking-extra.php">Select
                        <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                        </svg></a>
                    </div>
                  </div>
                  <div class="text-center mt-60 mb-100">
                    <nav class="box-pagination">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link page-prev" href="#">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                            </svg></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link active" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                        <li class="page-item"><a class="page-link page-next" href="#">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                            </svg></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-tab-right">
              <div class="sidebar"> 
                <div class="d-flex align-items-center justify-content-between wow fadeInUp"> 
                  <h6 class="text-20-medium color-text">Ride Summary</h6><a class="text-14-medium color-text text-decoration-underline" href="#">Edit</a>
                </div>
                <div class="mt-20 wow fadeInUp"> 
                  <ul class="list-routes"> 
                    <li> <span class="location-item">A </span><span class="info-location text-14-medium">Manchester, UK </span></li>
                    <li> <span class="location-item">A </span><span class="info-location text-14-medium">London, UK</span></li>
                  </ul>
                </div>
                <div class="mt-20 wow fadeInUp"> 
                  <ul class="list-icons"> 
                    <li> <span class="icon-item icon-plan"> </span><span class="info-location text-14-medium">Thu, Oct 06, 2022</span></li>
                    <li> <span class="icon-item icon-time"></span><span class="info-location text-14-medium">6 PM  :  15</span></li>
                  </ul>
                </div>
                <div class="mt-20 wow fadeInUp"> 
                  <div class="box-map-route"> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2zVGjDoG5oIHBo4buRIE5ldyBZb3JrLCBUaeG7g3UgYmFuZyBOZXcgWW9yaywgSG9hIEvhu7M!5e0!3m2!1svi!2s!4v1679223612023!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <div class="box-info-route"> 
                    <div class="info-route-left"> <span class="text-14 color-grey">Total Distance</span><span class="text-14-medium color-text">311 km/ 194 miles</span></div>
                    <div class="info-route-left"> <span class="text-14 color-grey">Total Time</span><span class="text-14-medium color-text">3h 43m</span></div>
                  </div>
                </div>
              </div>
              <div class="sidebar wow fadeInUp"> 
                <ul class="list-ticks list-ticks-small list-ticks-small-booking">
                  <li class="text-14 mb-20">+100.000 passengers transported</li>
                  <li class="text-14 mb-20">Instant confirmation</li>
                  <li class="text-14 mb-20">All-inclusive pricing</li>
                  <li class="text-14 mb-20">Secure Payment by credit card, debit card or Paypal</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php
include 'footer.php';
?>