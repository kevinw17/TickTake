@extends('layouts.layout')

@section('content')
  <div class="jumbotron text-center py-5" style="background-color: #4ECDC4">
    <p class="display-1 text-capitalize">About us</p>
  </div>
    
  <div class="row my-4 py-2 border ">
    <div class="col-md-4 my-4 bg-none">
        <img src="img/operator.jpg" alt="" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
        <div class="card-body pt-2">
          <h2 class="card-title text-center mb-4 text-capitalize"> history</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi eveniet vel ullam. Ducimus 
            culpa voluptas nisi labore voluptatum. Inventore, 
            ad neque? Illum odio repudiandae sit dolore non quas eum culpa.</p>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum harum debitis maxime deleniti autem 
            deserunt quibusdam reiciendis repellendus, ex inventore voluptatibus sit nemo? 
            Hic labore deleniti incidunt voluptates est nesciunt?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit at molestias aspernatur, 
              a culpa deserunt quos? Quo maxime at, ab officia corporis nesciunt eius mollitia. Unde obcaecati quidem ad? Repellendus?
          </p>
          <button class="btn btn-outline-primary col-md-3"> click here</button>
        </div>
    </div>
  </div>
        
  <div class="row my-4 py-2 border">
    <div class="col-md-8 mx-auto">
      <div class="card-body pt-2">
        <h2 class="text-center">Our Team</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="/w3images/team1.jpg" alt="Kevin" class="card-img-top">
              <div class="card-body">
                <h3 class="card-title">Kevin Winata</h3>
                <p class="card-text title">-</p>
                <p class="card-text">lorem ipsum ipsum lorem lorem ipsum ipsum lorem.</p>
                <p class="card-text">email@example.com</p>
                <button class="btn btn-primary w-100" style="background-color: #4ECDC4">Contact</button>
              </div>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="/w3images/team2.jpg" alt="Aqil" class="card-img-top">
              <div class="card-body">
                <h3 class="card-title">Aqil Nauffan M</h3>
                <p class="card-text title">-</p>
                <p class="card-text">lorem ipsum ipsum lorem lorem ipsum ipsum lorem.</p>
                <p class="card-text">email@example.com</p>
                <button class="btn btn-primary w-100" style="background-color: #4ECDC4">Contact</button>
              </div>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="/w3images/team3.jpg" alt="Walid" class="card-img-top">
              <div class="card-body">
                <h3 class="card-title">Walid Fernando S</h3>
                <p class="card-text title">-</p>
                <p class="card-text">lorem ipsum ipsum lorem lorem ipsum ipsum lorem.</p>
                <p class="card-text">email@example.com</p>
                <button class="btn btn-primary w-100" style="background-color: #4ECDC4">Contact</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

@endsection
