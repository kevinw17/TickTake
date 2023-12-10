@extends('layouts.layout')

@section('content')
  
  <div class="row">
    <div class="col">
      <div id="carouselExampleCaptions" class="carousel slide py-4 ">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/image 31.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block"></div>
            </div>
          <div class="carousel-item active">
              <img src="img/image 31.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block"></div>
          </div>
          <div class="carousel-item active">
            <img src="img/image 31.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block"></div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

 

  @foreach ($categories as $c)
    <h5>{{ $c->name }}</h5>
    @foreach ($events as $event)
        @if ($c->name == $event->CategoryName)
          <div class="col"> 
            <div class="card my-4" style="width:300px">
                <img class="card-img-top c-img" src="img/{{ $event->EventPict }}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title" style="text-transform: capitalize">{{ $event->EventName }}</h4>
                  <p class="card-text">{{ $event->EventDate }} </p>
                  <p class="card-text">Rp. {{ $event->EventPrice }}</p>
                  <img src="img/{{ $event->OrganizerLogo }}" alt="" class="d-flex position-absolute rounded-circle" style="height: 8%; top:86.5%; width:10%;" >
                  <a class="btn pb-2 position-relative ms-4">{{ $event->OrganizerName }}</a>
                </div>
              </div>
          </div>
        @endif
      @endforeach
    @endforeach
  
  <div class="container-fluid">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 my-3 ">
            <button class="btn btn-success text-capitalized">See All</button>
        </div>
      </div>
    </div>
  </div>
@endsection