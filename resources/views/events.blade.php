@extends('layouts.layout')

@section('content')
  <div class="col-12 my-5">
    <h1 class="text-center">All Events</h5>
  </div>

  {{-- <div class="row justify-content-center">
    <div class="col-md-6 mb-4 ms-5">
      <form action="/events" class="d-flex ms-5">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search the event">
        <button class="btn" style="background-color: #4ECDC4" type="submit">Search</button>
      </form>
    </div>
  </div> --}}
  
  @foreach ($categories as $c)
  <h5>{{ $c->name }}</h5>
  @foreach ($events as $event)
      @if ($c->name == $event->CategoryName)
        <div class="col">
          <a href="/eventdetail/{{ $event->EventDetailID }}" style="text-decoration: none; color: black">
          <div class="card my-4" style="width:300px">
              <img class="card-img-top c-img" src="img/{{ $event->EventPict }}" alt="Card image">
              <div class="card-body">
                <h4 class="card-title" style="text-transform: capitalize">{{ $event->EventName }}</h4>
                <p class="card-text">{{ $event->EventDate }} </p>
                <p class="card-text">Rp. {{ $event->EventPrice }}</p>
                <img src="img/{{ $event->OrganizerLogo }}" alt="" class="d-flex position-absolute rounded-circle" style="height: 8%; top:83.5%; width:10%;" >
                  <a class="btn pb-2 position-relative ms-4">{{ $event->OrganizerName }}</a>
              </div>
            </div>
          </a> 
        </div>
      @endif
    @endforeach
  @endforeach
@endsection
