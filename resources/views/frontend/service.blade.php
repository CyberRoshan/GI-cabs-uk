@extends('frontend.layout.layout')
@section('content')
    <main class="main">
      <div class="section pt-60 pb-60 bg-primary">
        <div class="container-sub"> 
          <h1 class="heading-44-medium color-white mb-5">Services</h1>
          <div class="box-breadcrumb"> 
            <ul>
              <li> <a href="index.php">Home</a></li>
              <li> <a href="service-grid.php">Services</a></li>
            </ul>
          </div>
        </div>
      </div>
      <section class="section pt-60">
        <div class="container-sub"> 
          <div class="row">
@foreach($service as $ser_data)
            <div class="col-lg-4 col-sm-6 mb-30"> 
              <div class="cardService wow fadeInUp">
                <div class="cardInfo">
                  <h3 class="cardTitle text-20-medium color-white mb-10">{{$ser_data->title}}</h3>
                  <div class="box-inner-info">
                    <p class="cardDesc text-14 color-white mb-30">{{$ser_data->title}}</p><a class="cardLink btn btn-arrow-up" href="{{url('/service-detail/'.$ser_data->slug)}}">
                      <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                      </svg></a>
                  </div>
                </div>
                <div class="cardImage"><img src="{{ isset($ser_data->image) ? url($ser_data->image) : url('/public/frontend/assets/imgs/page/homepage1/news1.png') }}" 
                alt="luxride" height="260px"></div>
              </div>
            </div>
            @endforeach

            
          </div>
          <!-- <div class="text-center mt-40 mb-0 wow fadeInUp">
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
      </section>
    </main>
    
    @endsection 