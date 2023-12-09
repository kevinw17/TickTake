@extends('layouts.layout')

@section('content')
  <div class="col mt-5"></div>
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
@endsection
