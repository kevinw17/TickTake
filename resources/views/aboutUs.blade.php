@extends('layout')

@section('title', 'About Us')

@section('content')
    <div class="col">
    <div class="container-fluid mt-3">
      <h1 style="font-family: 'Averia Libre', cursive; text-align: center; background-color:#4ECDC4; padding: 50px;">
        About TickTake
      </h1>
    </div>
  </div>
  
  <div class="col">
    <div class="content-container" style="display: flex; justify-content: center; align-items: center; text-align: center; padding-top: 50px; padding-bottom: 50px;">
      <div class="content-image" style="max-width: 100%; height: auto;">
        <img src="img_beatles.gif" alt="Beatles" class="content-image">
      </div>
      <div class="content-text" style="flex: 1; text-align: justify; padding: 0 20px;">
        <p style="font-family: 'Averia Libre', cursive; text-align:left; padding-top: 50px;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
  </div>
@endsection
