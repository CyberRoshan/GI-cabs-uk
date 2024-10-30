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
      <section class="section">
        <div class="container-sub"> 
          <div class="mt-60"> 
            <h2 class="heading-44-medium mb-30 color-text title-fleet wow fadeInUp">{{$file->title}}</h2>
            <div class="content-single wow fadeInUp"> 
              {!!$file->description!!}
              
            </div>
          </div>
        </div>
      </section>
      

    </main>

    @endsection 