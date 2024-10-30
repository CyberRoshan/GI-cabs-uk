
<?php
include 'header.php';
?>
    <main class="main">
      <section class="section py-5">
        <div class="container-sub"> 
          <div class="box-booking-tabs"> 
            <div class="item-tab wow fadeInUp"><a href="booking-vehicle.php">
                <div class="box-tab-step active">
                  <div class="icon-tab"> <span class="icon-book icon-vehicle">
                     </span><span class="text-tab">Vehicle </span></div>
                  <div class="number-tab"> <span>01</span></div>
                </div></a></div>
            <div class="item-tab wow fadeInUp"><a href="booking-extra.php">
                <div class="box-tab-step active">
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
                <h3 class="heading-24-medium color-text mb-30 wow fadeInUp">Extra Options</h3>
                <div class="form-contact form-comment wow fadeInUp"> 
                  <form action="#">
                    <div class="row"> 
                      <div class="col-lg-12">
                        <div class="form-group"> 
                          <label class="form-label" for="flight">Flight/train number</label>
                          <input class="form-control" id="flight" type="text" value="">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="list-extras wow fadeInUp"> 
                  <div class="item-extra"> 
                    <div class="extra-info"> 
                      <h5 class="text-20-medium color-text mb-5">
                        Child Seat <span class="price">$12</span></h5>
                      <p class="text-14 color-grey">Suitable for toddlers weighing 0-18 kg (approx 0 to 4 years).</p>
                    </div>
                    <div class="extra-quantity"> <span class="minus"> </span>
                      <input class="form-control" type="text" value="1"><span class="plus"></span>
                    </div>
                  </div>
                  <div class="item-extra"> 
                    <div class="extra-info"> 
                      <h5 class="text-20-medium color-text mb-5">
                        Booster seat <span class="price">$12</span></h5>
                      <p class="text-14 color-grey">Suitable for children weighing 15-36 kg (approx 4 to 10 years).</p>
                    </div>
                    <div class="extra-quantity"> <span class="minus"> </span>
                      <input class="form-control" type="text" value="1"><span class="plus"></span>
                    </div>
                  </div>
                  <div class="item-extra"> 
                    <div class="extra-info"> 
                      <h5 class="text-20-medium color-text mb-5">
                        Vodka Bottle <span class="price">$12</span></h5>
                      <p class="text-14 color-grey">Absolut Vodka 0.7l Bottle</p>
                    </div>
                    <div class="extra-quantity"> <span class="minus"> </span>
                      <input class="form-control" type="text" value="1"><span class="plus"></span>
                    </div>
                  </div>
                  <div class="item-extra"> 
                    <div class="extra-info"> 
                      <h5 class="text-20-medium color-text mb-5">
                        Bouquet of Flowers <span class="price">$12</span></h5>
                      <p class="text-14 color-grey">A bouquet of seasonal flowers prepared by a local florist</p>
                    </div>
                    <div class="extra-quantity"> <span class="minus"> </span>
                      <input class="form-control" type="text" value="1"><span class="plus"></span>
                    </div>
                  </div>
                  <div class="item-extra"> 
                    <div class="extra-info"> 
                      <h5 class="text-20-medium color-text mb-5">
                        Alcohol Package <span class="price">$12</span></h5>
                      <p class="text-14 color-grey">A bouquet of seasonal flowers prepared by a local florist</p>
                    </div>
                    <div class="extra-quantity"> <a class="btn btn-grey w-100" href="#">Select 
                        <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                        </svg></a></div>
                  </div>
                  <div class="item-extra"> 
                    <div class="extra-info"> 
                      <h5 class="text-20-medium color-text mb-5">
                        Airport Assistance and Hostess Service <span class="price">$12</span></h5>
                      <p class="text-14 color-grey">A bouquet of seasonal flowers prepared by a local florist</p>
                    </div>
                    <div class="extra-quantity"> <a class="btn btn-grey w-100" href="#">Select 
                        <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                        </svg></a></div>
                  </div>
                  <div class="item-extra"> 
                    <div class="extra-info"> 
                      <h5 class="text-20-medium color-text mb-5">
                        Bodyguard Service <span class="price">$12</span></h5>
                      <p class="text-14 color-grey">A bouquet of seasonal flowers prepared by a local florist</p>
                    </div>
                    <div class="extra-quantity"> <a class="btn btn-grey w-100" href="#">Select 
                        <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                        </svg></a></div>
                  </div>
                </div>
                <div class="mt-45 wow fadeInUp"> 
                  <div class="form-contact form-comment"> 
                    <form action="#">
                      <div class="row"> 
                        <div class="col-lg-12">
                          <div class="form-group"> 
                            <label class="form-label" for="notes">Notes for the chauffeur</label>
                            <textarea class="form-control" id="notes" 
                            rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="mt-30 mb-120 wow fadeInUp"> <a class="btn btn-primary btn-primary-big w-100" href="booking-passenger.php">Continue 
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