@php 
$aria = App\Models\AirportTransfer::with('get_aria')->where('status',1)->get();
@endphp
<footer class="footer footer-white">
      <div class="footer-1">
        <div class="container-sub">
          <div class="box-footer-top">
            <!-- <div class="row align-items-center">
              <div class="col-lg-6 col-md-6 text-md-start text-center mb-15 wow fadeInUp">
                <div class="d-flex align-items-center justify-content-md-start
                 justify-content-center"><a class="mr-30" href="#">
                    <img src="assets/imgs/template/logo-black.svg" alt="Luxride">
                </a><a class="text-14-medium call-phone color-white hover-up" 
                href="tel:+41227157000">+41 22 715 7000</a></div>
              </div>
              <div class="col-lg-6 col-md-6 text-md-end text-center mb-15 wow fadeInUp">
                <div class="d-flex align-items-center justify-content-md-end
                 justify-content-center"><span class="text-18-medium
                  color-white mr-10">Follow Us</span><a class="icon-socials
                   icon-facebook" href="#"></a><a class="icon-socials 
                   icon-twitter" href="#"></a><a class="icon-socials 
                   icon-instagram" href="#"></a><a class="icon-socials 
                   icon-linkedin" href="#"></a></div>
              </div>
            </div> -->
          </div>
          <div class="row mb-40">
          <div class="col-lg-3 width-20 wow fadeInUp">
              <div class="text-start">
                <div class=""><a class="" 
                href="#">
                <img alt="Luxride" src="{{isset($setting->header_logo)?url($setting->footer_logo):url('/public/frontend/assets/imgs/template/Gi_Express_Final.svg')}}"></a>
        <h5 class="text-18-medium color-white mb-10">{{$setting->sitename}}</h5>
                <p class="text-14 ">{{$setting->short_description}}</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 width-20 wow fadeInUp">
              <h5 class="text-18-medium color-white mb-20">Company</h5>
              <ul class="menu-footer">
                <li><a href="#">About us</a></li>
                <li><a href="#">Investors</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Gift cards</a></li>
              </ul>
            </div>
            <div class="col-lg-3 width-20 mb-30 wow fadeInUp">
              <h5 class="text-18-medium color-white mb-20">Top cities</h5>
              <ul class="menu-footer">
                <li><a href="about.html">New York</a></li>
                <li><a href="our-team.html">London</a></li>
                <li><a href="#">Berlin</a></li>
                <li><a href="#">Los Angeles</a></li>
                <li><a href="#">Paris</a></li>
              </ul>
            </div>
            <div class="col-lg-3 width-20 mb-30 wow fadeInUp">
              <h5 class="text-18-medium color-white mb-20">Explore</h5>
              <ul class="menu-footer">
                <li><a href="#">Intercity rides</a></li>
                <li><a href="#">Limousine service</a></li>
                <li><a href="#">Chauffeur service</a></li>
                <li><a href="#">Private car service</a></li>
                <li><a href="#">Airport transfer</a></li>
              </ul>
            </div>
            <div class="col-lg-3 width-20 mb-30 wow fadeInUp">
              <h5 class="text-18-medium color-white mb-20">Contact Us</h5>
              <ul class="menu-footer">
                <li><a href="#"><span class="icon-socials text-center">
                <i class="fa-solid fa-location-dot"></i></span>
                 {{$setting->address}}</a></li>
                <li><a href="#">
                <span class="icon-socials text-center">
                <i class="fa-solid fa-phone"></i></span>
                {{$setting->phone}}</a></li>
                <li><a href="#">
                <span class="icon-socials text-center">
                <i class="fa-regular fa-envelope"></i></span>
                {{$setting->email}}</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      @foreach($aria as  $item)

      <div class="footer-2">
        <div class="container-sub">
          <div class="footer-bottom">
            <div class="row align-items-center">
              <div class="col-lg-12 col-md-12 text-center text-lg-start">
              <h5 class="text-18-medium color-white mb-10 text-capitalize
              "> {{$item->title}} </h5>
                <ul class="menu-bottom ">
                  @foreach($item->get_aria as $child)
                  <li class="px-1  py-2"><a href="{{url('/aria-detail/'.$child->slug)}}">{{$child->title}} | </a></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

      
      <div class="footer-2">
        <div class="container-sub">
          <div class="footer-bottom">
            <div class="row align-items-center">
              <div class="col-lg-8 col-md-12 text-center text-lg-start">
                <span class="text-14 color-white mr-50">Copyright ©2024 All rights reserved</span>
                <ul class="menu-bottom">
                  <li><a href="{{route('term')}}">Terms</a></li>
                  <li><a href="{{route('privacy')}}">Privacy policy</a></li>
                  <li><a href="{{route('legal')}}">Legal notice</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-12 text-center text-lg-end">  
                <div class="d-flex align-items-center justify-content-md-end
                 justify-content-center"><span class="text-18-medium
                  color-white mr-10">Follow Us</span><a class="icon-socials
                   icon-facebook" href="#"></a><a class="icon-socials 
                   icon-twitter" href="#"></a><a class="icon-socials 
                   icon-instagram" href="#"></a><a class="icon-socials 
                   icon-linkedin" href="#"></a></div></div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/modernizr-3.6.0.min.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/waypoints.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/wow.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/magnific-popup.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/perfect-scrollbar.min.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/select2.min.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/isotope.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/scrollup.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/noUISlider.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/slider.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/counterup.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/jquery.countdown.min.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/jquery.elevatezoom.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/slick.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/jquery-ui.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/vendors/jquery.timepicker.min.js"></script>
    <script src="{{url('/public/frontend/')}}/assets/js/maine209.js?v=1.0.0"></script>
  </body>
</html>