@extends('layouts.layout')

@section('content')

<div class="row pt-5">
  <h5>Feature Events</h5>
    @foreach ($event_details as $item)
      <div class="col"> 
        <div class="card my-4" style="width:300px">
            <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title" style="text-transform: capitalize">Steve Aoki's</h4>
              <p class="card-text">{{ $item->event_date }} </p>
              <p class="card-text">Rp. {{ $item->price }}</p>
              <img src="img/R.png" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
              <a class="btn border pb-2 position-relative px-5" style="left:8%; ">Prestige Promotion</a>
            </div>
          </div>
      </div>
    @endforeach

    <h5>Festival Fair</h5>
    @foreach ($event_details as $item)
      <div class="col"> 
        <div class="card my-4" style="width:300px">
            <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title" style="text-transform: capitalize">Steve Aoki's</h4>
              <p class="card-text">{{ $item->event_date }} </p>
              <p class="card-text">Rp. {{ $item->price }}</p>
              <img src="img/R.png" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
              <a class="btn border pb-2 position-relative px-5" style="left:8%; ">Prestige Promotion</a>
            </div>
          </div>
      </div>
    @endforeach

    <h5>Festival Fair</h5>
    @foreach ($event_details as $item)
      <div class="col"> 
        <div class="card my-4" style="width:300px">
            <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title" style="text-transform: capitalize">Steve Aoki's</h4>
              <p class="card-text">{{ $item->event_date }} </p>
              <p class="card-text">Rp. {{ $item->price }}</p>
              <img src="img/R.png" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
              <a class="btn border pb-2 position-relative px-5" style="left:8%; ">Prestige Promotion</a>
            </div>
          </div>
      </div>
    @endforeach

        {{-- <div class="col"> 
          <div class="card my-4" style="width:300px">
              <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
              <div class="card-body">
                <h4 class="card-title" style="text-transform: capitalize">{{ $event["event_title"] }}</h4>
                <p class="card-text">{{ $event["event_date"] }} </p>
                <p class="card-text">{{ $event["event_price"] }}</p>
                <img src="img/{{ $event["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
                <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $event["producer_name"] }}</a>
              </div>
            </div>
        </div>

        <div class="col"> 
          <div class="card my-4" style="width:300px">
              <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
              <div class="card-body">
                <h4 class="card-title" style="text-transform: capitalize">{{ $event["event_title"] }}</h4>
                <p class="card-text">{{ $event["event_date"] }} </p>
                <p class="card-text">{{ $event["event_price"] }}</p>
                <img src="img/{{ $event["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
                <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $event["producer_name"] }}</a>
              </div>
            </div>
        </div>

        <div class="col"> 
          <div class="card my-4" style="width:300px">
              <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
              <div class="card-body">
                <h4 class="card-title" style="text-transform: capitalize">{{ $event["event_title"] }}</h4>
                <p class="card-text">{{ $event["event_date"] }} </p>
                <p class="card-text">{{ $event["event_price"] }}</p>
                <img src="img/{{ $event["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
                <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $event["producer_name"] }}</a>
              </div>
            </div>
        </div>

        <div class="col"> 
          <div class="card my-4" style="width:300px">
              <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
              <div class="card-body">
                <h4 class="card-title" style="text-transform: capitalize">{{ $event["event_title"] }}</h4>
                <p class="card-text">{{ $event["event_date"] }} </p>
                <p class="card-text">{{ $event["event_price"] }}</p>
                <img src="img/{{ $event["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
                <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $event["producer_name"] }}</a>
              </div>
            </div>
        </div>
      </div>
    
    <div class="row">
      <h5>Festival Fair</h5>
      <div class="col"> 
        <div class="card my-4" style="width:300px">
            <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title" style="text-transform: capitalize">{{ $event["event_title"] }}</h4>
              <p class="card-text">{{ $event["event_date"] }} </p>
              <p class="card-text">{{ $event["event_price"] }}</p>
              <img src="img/{{ $event["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
              <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $event["producer_name"] }}</a>
            </div>
          </div>
      </div>

      <div class="col"> 
        <div class="card my-4" style="width:300px">
            <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title" style="text-transform: capitalize">{{ $event["event_title"] }}</h4>
              <p class="card-text">{{ $event["event_date"] }} </p>
              <p class="card-text">{{ $event["event_price"] }}</p>
              <img src="img/{{ $event["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
              <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $event["producer_name"] }}</a>
            </div>
          </div>
      </div>

      <div class="col"> 
        <div class="card my-4" style="width:300px">
            <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title" style="text-transform: capitalize">{{ $event["event_title"] }}</h4>
              <p class="card-text">{{ $event["event_date"] }} </p>
              <p class="card-text">{{ $event["event_price"] }}</p>
              <img src="img/{{ $event["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
              <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $event["producer_name"] }}</a>
            </div>
          </div>
      </div>

      <div class="col"> 
        <div class="card my-4" style="width:300px">
            <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title" style="text-transform: capitalize">{{ $event["event_title"] }}</h4>
              <p class="card-text">{{ $event["event_date"] }} </p>
              <p class="card-text">{{ $event["event_price"] }}</p>
              <img src="img/{{ $event["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
              <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $event["producer_name"] }}</a>
            </div>
          </div>
      </div>
    </div>

<div class="row pb-5">
  <h5>Festival Fair</h5>
  <div class="col"> 
    <div class="card my-4" style="width:300px">
        <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title" style="text-transform: capitalize">{{ $event["event_title"] }}</h4>
          <p class="card-text">{{ $event["event_date"] }} </p>
          <p class="card-text">{{ $event["event_price"] }}</p>
          <img src="img/{{ $event["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
          <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $event["producer_name"] }}</a>
        </div>
      </div>
  </div>

  <div class="col"> 
    <div class="card my-4" style="width:300px">
        <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title" style="text-transform: capitalize">{{ $event["event_title"] }}</h4>
          <p class="card-text">{{ $event["event_date"] }} </p>
          <p class="card-text">{{ $event["event_price"] }}</p>
          <img src="img/{{ $event["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
          <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $event["producer_name"] }}</a>
        </div>
      </div>
  </div>

  <div class="col"> 
    <div class="card my-4" style="width:300px">
        <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title" style="text-transform: capitalize">{{ $event["event_title"] }}</h4>
          <p class="card-text">{{ $event["event_date"] }} </p>
          <p class="card-text">{{ $event["event_price"] }}</p>
          <img src="img/{{ $event["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
          <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $event["producer_name"] }}</a>
        </div>
      </div>
  </div>

  <div class="col"> 
    <div class="card my-4" style="width:300px">
        <img class="card-img-top c-img" src="img/image 31.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title" style="text-transform: capitalize">{{ $event["event_title"] }}</h4>
          <p class="card-text">{{ $event["event_date"] }} </p>
          <p class="card-text">{{ $event["event_price"] }}</p>
          <img src="img/{{ $event["producer_logo"] }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
          <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $event["producer_name"] }}</a>
        </div>
      </div>
  </div>
  </div> --}}
@endsection