<?php
include 'header.php';
?>
    <main class="main">
      <section class="section mt-120 mb-100"> 
        <div class="container-sub"> 
          <div class="text-center"> 
            <h2 class="heading-44-medium wow fadeInUp">Sign in</h2>
            <p class="color-text text-14 wow fadeInUp">Sign in with this account across the following sites.</p>
          </div>
          <div class="box-login mt-70"> 
            <div class="form-contact form-comment wow fadeInUp"> 
              <form action="#">
                <div class="row"> 
                  <div class="col-lg-12">
                    <div class="form-group"> 
                      <label class="form-label" for="fullname">Email</label>
                      <input class="form-control" id="fullname" type="text" value="creativelayers088@gmail.com">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group"> 
                      <label class="form-label" for="email">Password</label>
                      <input class="form-control" id="email" type="text" placeholder="">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-20">
                      <div class="d-flex justify-content-between"> 
                        <label class="text-14 color-text"> 
                          <input class="cb-rememberme" type="checkbox">Remember me
                        </label><a class="text-14 color-text" href="#">Lost your password?</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <button class="btn btn-primary w-100" type="submit">Sign in
                      <svg class="icon-16 ml-5" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                      </svg>
                    </button>
                  </div>
                  <div class="col-lg-12"> 
                    <div class="text-or-box"> <span class="text-or">OR</span></div>
                    <div class="mb-20"><a class="btn btn-login-google" href="#">Continue Google</a></div>
                    <div class="mb-20"><a class="btn btn-login-facebook" href="#">Continue Facebook</a></div>
                    <div class="mb-20"><a class="btn btn-login-apple" href="#">Continue Apple</a></div>
                  </div>
                  <div class="mt-0 text-center"> <span class="text-14-medium color-text">Not signed up? </span><a class="text-14-medium color-text" href="#">Create an account.</a></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
   
    <?php
include 'footer.php';
?>