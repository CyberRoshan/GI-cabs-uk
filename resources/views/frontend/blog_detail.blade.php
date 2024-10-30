@extends('frontend.layout.layout')
@section('content')
    <main class="main">
      <div class="section pt-60 pb-60 bg-primary">
        <div class="container-sub"> 
          <h1 class="heading-44-medium color-white mb-5">{{$file->title}}</h1>
          <div class="box-breadcrumb"> 
            <ul>
              <li> <a href="{{url('/')}}">Home</a></li>
              <li> <a href="#">{{$file->title}}</a></li>
            </ul>
          </div>
        </div>
      </div>
      <section class="section pt-60 bg-white latest-new-white">
        <div class="container-sub"> 
          <div class="box-frature-image mb-60 wow fadeInUp"> 
            <div class="cardImage"> 
              <div class="datePost"> 
                <div class="heading-52-medium color-white">14.</div>
                <p class="text-14 color-white">Jun, 2022</p>
              </div><img src="{{url('/public/frontend/')}}/assets/imgs/page/blog2/img-single.png" alt="luxride">
            </div>
          </div>
          <h2 class="heading-44-medium mb-30 wow fadeInUp">{{$file->title}}</h2>
          {!!$file->description!!}
        </div>
      </section>
      <section class="section pt-30 bg-white latest-new-white pb-0 mb-0">
        <div class="container-sub"> 
          <h2 class="heading-44-medium color-text mb-60 wow fadeInUp">Related Posts</h2>
          <div class="row">
            <div class="col-lg-4"> 
              <div class="cardNews wow fadeInUp"><a href="blog-single.html">
                  <div class="cardImage">
                    <div class="datePost">
                      <div class="heading-52-medium color-white">14.</div>
                      <p class="text-14 color-white">Jun, 2022</p>
                    </div><img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/news1.png" alt="luxride">
                  </div></a>
                <div class="cardInfo">
                  <div class="tags mb-10"><a href="#">Travel</a></div><a class="color-white" href="blog-single.html">
                    <h3 class="text-20-medium color-white mb-20">3 hidden-gem destinations for your wish list</h3></a><a class="cardLink btn btn-arrow-up" href="blog-single.html">
                    <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4"> 
              <div class="cardNews wow fadeInUp"><a href="blog-single.html">
                  <div class="cardImage">
                    <div class="datePost">
                      <div class="heading-52-medium color-white">18.</div>
                      <p class="text-14 color-white">Jun, 2022</p>
                    </div><img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/news2.png" alt="luxride">
                  </div></a>
                <div class="cardInfo">
                  <div class="tags mb-10"><a href="#">Culture</a></div><a class="color-white" href="blog-single.html">
                    <h3 class="text-20-medium color-white mb-20">Explore the big things happening in Dallas</h3></a><a class="cardLink btn btn-arrow-up" href="blog-single.html">
                    <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4"> 
              <div class="cardNews wow fadeInUp"><a href="blog-single.html">
                  <div class="cardImage">
                    <div class="datePost">
                      <div class="heading-52-medium color-white">20.</div>
                      <p class="text-14 color-white">Jun, 2022</p>
                    </div><img src="{{url('/public/frontend/')}}/assets/imgs/page/homepage1/news3.png" alt="luxride">
                  </div></a>
                <div class="cardInfo">
                  <div class="tags mb-10"><a href="#">News</a></div><a class="color-white" href="blog-single.html">
                    <h3 class="text-20-medium color-white mb-20">LA’s worst traffic areas and how to avoid them</h3></a><a class="cardLink btn btn-arrow-up" href="blog-single.html">
                    <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    @endsection