@extends('master')
@section('content')

<div class="container-fluid custom-product">



 

   <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        @foreach ($products as $item)
        <div class="carousel-item {{$item['id']==1?'active':''}}">

            <a href="detail/{{$item['id']}}">
                <!--Mask color-->
                <div class="view">
                  <img class="slider-img d-block w-100" src="{{$item['gallery']}}"
                    alt="Third slide">
                  <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption slider-text">
                  <h3 class="h3-responsive">{{$item['name']}}</h3>
                  <p>{{$item['description']}}</p>
                </div>
            </a>

          </div>
        @endforeach
    
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->


  <div class="trending-wrapper p-4">
    <!--Mask color-->
    <h3 class="text-center">Trending Products</h3>
    <div class="container">
        <div class="row g-4">
    @foreach ($products as $item)

    <div class="col-2">

      <a href="detail/{{$item['id']}}">
        <div class="card trending-item">
            <img class="trending-img card-top" src="{{$item['gallery']}}"
                alt="Third slide">
            <div class=""></div>
            <div class="card-footer">
                <h3 class="h3-responsive">{{$item['name']}}</h3>
            </div>
        </div>
      </a>

    </div>
    @endforeach  
</div>
</div>


  </div>

  </div>

      
@endsection