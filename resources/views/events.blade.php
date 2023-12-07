@extends('layouts.layout')

@section('content')

<div class="row pt-5">
  @foreach ($categories as $c)
    <h5>{{ $c->name }}</h5>
    @foreach ($events as $event)
      <div class="col"> 
        <div class="card my-4" style="width:300px">
            <img class="card-img-top c-img" src="img/{{ $event->EventPict }}" alt="Card image">
            <div class="card-body">
              <h4 class="card-title" style="text-transform: capitalize">{{ $event->EventName }}</h4>
              <p class="card-text">{{ $event->EventDate }} </p>
              <p class="card-text">Rp. {{ $event->EventPrice }}</p>
              <img src="img/{{ $event->OrganizerLogo }}" alt="" class="d-flex position-absolute" style="height: 8%; top:86.5%; width:10%; left:15%" >
              <a class="btn border pb-2 position-relative px-5" style="left:8%; ">{{ $event->OrganizerName }}</a>
            </div>
          </div>
      </div>
    @endforeach
  @endforeach
@endsection