@extends('frontend.layout.layout')
@section('content')
    <main class="main">
      <div class="section pt-60 pb-60 bg-primary">
        <div class="container-sub"> 
          <h1 class="heading-44-medium color-white mb-5">Blog</h1>
          <div class="box-breadcrumb"> 
            <ul>
              <li> <a href="{{url('/')}}">Home</a></li>
              <li> <a href="#">Blog</a></li>
            </ul>
          </div>
        </div>
      </div>
      <section class="section pt-60 bg-white pb-0 latest-new-white">
        <div class="container-sub"> 
          <div class="row">
            <div class="col-lg-8">
              <div class="row cardNewsList"> 
@foreach($blog as $blog_data)
                <div class="col-lg-12"> 
                  <div class="cardNews wow fadeInUp"><a href="{{url('/blog-detail/'.$blog_data->slug)}}">
                      <div class="cardImage">
                        <div class="datePost">
                          <div class="heading-52-medium color-white">14.</div>
                          <p class="text-14 color-white">Jun, 2022</p>
                          </div><img src="{{ isset($blog_data->image) ? url($blog_data->image) : url('/public/frontend/assets/imgs/page/homepage1/news1.png') }}" 
                          alt="luxride" height="260px">
                      </div></a>
                    <div class="cardInfo">
                      <div class="tags mb-10"><a href="#">Travel</a></div><a class="color-white" href="{{url('/blog-detail/'.$blog_data->slug)}}">
                        <h3 class="text-20-medium color-white mb-20">{{$blog_data->title}}</h3></a>
                      <p class="text-16 color-text mb-15">{{$blog_data->short_description}}</p><a class="cardLink btn btn-arrow-up" href="blog-single.php">
                        <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                        </svg></a>
                    </div>
                  </div>
                </div>
                @endforeach

                
              </div>
              <!-- <div class="text-center mt-40 mb-0">
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
              </div> -->
            </div>
            <div class="col-lg-4 wow fadeInUp">
              <div class="box-form-search">
                <form action="#">
                  <input class="form-control" type="text" placeholder="Search">
                  <button class="btn btn-search-2" type="submit">
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                    </svg>
                  </button>
                </form>
              </div>
              <div class="sidebar-radius">
                <h5 class="text-20-medium sidebar-title">Categories</h5>
                <div class="sidebar-content">
                  <ul>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Culture</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Ride</a></li>
                    <li><a href="#">Limousine</a></li>
                    <li><a href="#">Car Rent</a></li>
                    <li><a href="#">Chauffeur</a></li>
                  </ul>
                </div>
              </div>
              <div class="sidebar-radius">
                <h5 class="text-20-medium sidebar-title">Recent Posts</h5>
                <div class="sidebar-content">
                  <ul>
                    <li>
                      <div class="recent-post">
                        <div class="image-post"><a href="#"><img src="{{url('/public/frontend/')}}/assets/imgs/page/blog2/post1.png" alt=""></a></div>
                        <div class="info-post">
                          <div class="date-post">February 11, 2023</div><a class="link-post" href="#">3 hidden-gem destinations for your wish list</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="recent-post">
                        <div class="image-post"><a href="#"><img src="{{url('/public/frontend/')}}/assets/imgs/page/blog2/post2.png" alt=""></a></div>
                        <div class="info-post">
                          <div class="date-post">February 11, 2023</div><a class="link-post" href="#">3 hidden-gem destinations for your wish list</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="recent-post">
                        <div class="image-post"><a href="#"><img src="{{url('/public/frontend/')}}/assets/imgs/page/blog2/post3.png" alt=""></a></div>
                        <div class="info-post">
                          <div class="date-post">February 11, 2023</div><a class="link-post" href="#">3 hidden-gem destinations for your wish list</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="sidebar-radius">
                <h5 class="text-20-medium sidebar-title">Tags</h5>
                <div class="sidebar-content"><a class="btn btn-tag mb-10 mr-10" href="#">Chauffeur</a><a class="btn btn-tag mb-10 mr-10" href="#">Car</a><a class="btn btn-tag mb-10 mr-10" href="#">Rent</a><a class="btn btn-tag mb-10 mr-10" href="#">Limousine</a><a class="btn btn-tag mb-10" href="#">Travel</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    @endsection 