<?php
include 'header.php';
?>
    <main class="main">
      <section class="section">
        <div class="container-sub"> 
          <div class="box-completed-booking"> 
            <div class="text-center wow fadeInUp"> <img class="mb-20" src="{{url('/public/frontend/')}}/assets/imgs/page/booking/completed.png" alt="luxride">
              <h4 class="heading-24-medium color-text mb-10">System, your order was submitted successfully!</h4>
              <p class="text-14 color-grey mb-40">Booking details has been sent to: booking@luxride.com</p>
            </div>
            <div class="box-info-book-border wow fadeInUp"> 
              <div class="info-1"> <span class="color-text text-14">Order Number</span><br><span class="color-text text-14-medium">#4039</span></div>
              <div class="info-1"> <span class="color-text text-14">Date</span><br><span class="color-text text-14-medium">Thu, Oct 06, 2022</span></div>
              <div class="info-1"> <span class="color-text text-14">Total</span><br><span class="color-text text-14-medium">$40.10</span></div>
              <div class="info-1"> <span class="color-text text-14">Payment Method</span><br><span class="color-text text-14-medium">Direct Bank Transfer</span></div>
            </div>
            <div class="box-booking-border wow fadeInUp"> 
              <h6 class="heading-20-medium color-text">Reservation Information</h6>
              <ul class="list-prices"> 
                <li> <span class="text-top">Pick Up Address</span><span class="text-bottom">London City Airport (LCY)</span></li>
                <li> <span class="text-top">Drop Off Address</span><span class="text-bottom">London City Airport (LCY)</span></li>
                <li> <span class="text-top">Pick Up Date</span><span class="text-bottom">Thu, Oct 06, 2022</span></li>
                <li> <span class="text-top">Pick Up Time</span><span class="text-bottom">6 PM  :  15</span></li>
                <li> <span class="text-top">Distance</span><span class="text-bottom">311 km/ 194 miles</span></li>
                <li> <span class="text-top">Time</span><span class="text-bottom">3h 43m</span></li>
              </ul>
            </div>
            <div class="box-booking-border wow fadeInUp"> 
              <h6 class="heading-20-medium color-text">Selected Car</h6>
              <div class="mt-20 mb-20 text-center"> <img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/e-class.png" alt="luxride"></div>
              <ul class="list-prices"> 
                <li> <span class="text-top">Class</span><span class="text-bottom">Business Class</span></li>
                <li> <span class="text-top">Cars</span><span class="text-bottom">Mercedes-Benz E-Class</span></li>
              </ul>
            </div>
            <div class="box-booking-border wow fadeInUp"> 
              <h6 class="heading-20-medium color-text">Passenger Information</h6>
              <ul class="list-prices"> 
                <li> <span class="text-top">First name</span><span class="text-bottom">Ali</span></li>
                <li> <span class="text-top">Last name</span><span class="text-bottom">Tufan</span></li>
                <li> <span class="text-top">Email</span><span class="text-bottom">creativelayers088@gmail.com</span></li>
                <li> <span class="text-top">Phone</span><span class="text-bottom">+09 383 829 91</span></li>
                <li> <span class="text-top">Address line 1</span><span class="text-bottom"> </span></li>
                <li> <span class="text-top">Address line 2</span><span class="text-bottom"> </span></li>
                <li> <span class="text-top">City</span><span class="text-bottom">London</span></li>
                <li> <span class="text-top">State/Province/Region</span><span class="text-bottom"> </span></li>
                <li> <span class="text-top">ZIP code/Postal code</span><span class="text-bottom">95833</span></li>
                <li> <span class="text-top">Country</span><span class="text-bottom">UK</span></li>
                <li> <span class="text-top">Special Requirements</span></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php
include 'footer.php';
?>
