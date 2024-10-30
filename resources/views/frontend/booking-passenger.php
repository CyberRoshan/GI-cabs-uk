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
                <div class="box-tab-step active">
                  <div class="icon-tab"> <span class="icon-book icon-extra"> </span><span class="text-tab">Extras</span></div>
                  <div class="number-tab"> <span>02</span></div>
                </div></a></div>
            <div class="item-tab wow fadeInUp"><a href="booking-passenger.php">
                <div class="box-tab-step active">
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
              <div class="box-content-detail "> 
                <h3 class="heading-24-medium color-text mb-30 wow fadeInUp">Passenger Details</h3>
                <div class="form-contact form-comment wow fadeInUp"> 
                  <form action="#">
                    <div class="row"> 
                      <div class="col-lg-6">
                        <div class="form-group"> 
                          <label class="form-label" for="fullname">Name</label>
                          <input class="form-control" id="fullname" type="text" value="">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group"> 
                          <label class="form-label" for="lastname">Last Name</label>
                          <input class="form-control" id="lastname" type="text" value="">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group"> 
                          <label class="form-label" for="email">Email Address</label>
                          <input class="form-control" id="email" type="text" >
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group"> 
                          <label class="form-label" for="phone">Phone Number</label>
                          <input class="form-control" id="phone" type="text">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="mt-30"></div>
                <h3 class="heading-24-medium color-text mb-30 wow fadeInUp">Options</h3>
                <div class="form-contact form-comment wow fadeInUp"> 
                  <form action="#">
                    <div class="row"> 
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-label" for="passengers">Passengers</label>
                          <select class="form-control" id="passengers">
                            <option value=""></option>
                            <option value="1">1 </option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group"> 
                          <label class="form-label" for="luggage">Luggage</label>
                          <select class="form-control" id="luggage">
                            <option value=""></option>
                            <option value="1">1 </option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group"> 
                          <label class="form-label" for="notes">Notes to driver</label>
                          <textarea class="form-control" id="notes" rows="5"></textarea>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="mt-30 mb-120 wow fadeInUp"> <a class="btn btn-primary btn-primary-big w-100" href="booking-payment.php">Continue 
                    <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg></a></div>
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
                  <div class="border-bottom mt-30 mb-25"> </div>
                  <div class="mt-0"> <span class="text-14 color-grey">Vehicle</span><br><span class="text-14-medium color-text">Mercedes-Benz E220</span></div>
                  <div class="border-bottom mt-30 mb-25"> </div>
                  <div class="mt-0"> <span class="text-14 color-grey">Extra Options</span><br><span class="text-14-medium color-text">1 x Child Seat - $5.00</span><br><span class="text-14-medium color-text">1 x Bouquet of Flowers - $75.00</span><br><span class="text-14-medium color-text">2 x Vodka Bottle - $78.00</span><br><span class="text-14-medium color-text">1 x Bodyguard Service - $750.00</span></div>
                </div>
              </div>
              <div class="sidebar wow fadeInUp"> 
                <ul class="list-prices list-prices-2"> 
                  <li> <span class="text">Selected vehicle</span><span class="price">$174</span></li>
                  <li> <span class="text">Extra options</span><span class="price">$90.25</span></li>
                </ul>
                <div class="border-bottom mt-30 mb-15"> </div>
                <ul class="list-prices"> 
                  <li> <span class="text text-20-medium">Total</span><span class="price text-20-medium">$909.47</span></li>
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