@extends('layouts.layout')

@section('content')
  <div class="jumbotron text-center py-5" style="background-color: #4ECDC4">
    <p class="display-1 text-capitalize">About Us</p>
  </div>
    
  <div class="row my-4 py-2 border" style="padding:10rem;">
    <div class="col-md-4 my-4 bg-none">
        <img src="img/operator.jpg" alt="" class="img-fluid rounded-start border w-100 h-100">
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
        </div>
    </div>
  </div>
        
  <div class="row mt-3 mb-5 py-2 border">
    <div class="col-md-8 mx-auto">
      <div class="card-body pt-2">
        <h2 class="text-center mb-5">Our Team</h2>
        <div class="row">
          <div class="col-md-4 d-flex">
            <div class="card mb-4 d-flex w-100" style="background-color: #4ECDC4;">

              <div class="wrapper img-fluid  d-flex justify-content-center">
                <img src="img/kevin.jpg" alt="Kevin" class="card-img-top rounded-circle" style="padding: 1.5rem;">
              </div>
              
              <div class="card-body align-items-center">
                <h3 class="card-title">Kevin Winata</h3>
                <p class="card-text title">Computer Science</p>
                <p class="card-text">lorem ipsum ipsum lorem lorem ipsum ipsum lorem.</p>
                <p class="card-text">kevin.winata003@binus.ac.id</p>
              </div>
            </div>
          </div>
  
          <div class="col-md-4 d-flex">
            <div class="card mb-4 d-flex w-100" style="background-color: #4ECDC4;">

              <div class="wrapper img-fluid img-thumbnail d-flex justify-content-center">
                <img src="img/kevin.jpg" alt="Kevin" class="card-img-top rounded-circle" style="padding: 1.5rem;">
              </div>
              
              <div class="card-body align-items-center">
                <h3 class="card-title text-capitalize">aqil nauffan marjana</h3>
                <p class="card-text title">Computer Science</p>
                <p class="card-text">lorem ipsum ipsum lorem lorem ipsum ipsum lorem.</p>
                <p class="card-text">kevin.winata003@binus.ac.id</p>
              </div>
            </div>
          </div>
  
          <div class="col-md-4 d-flex">
            <div class="card mb-4 d-flex w-100" style="background-color: #4ECDC4;">

              <div class="wrapper img-fluid img-thumbnail d-flex justify-content-center">
                <img src="img/kevin.jpg" alt="Kevin" class="card-img-top rounded-circle" style="padding: 1.5rem;">
              </div>
              
              <div class="card-body align-items-center">
                <h3 class="card-title">walid fernando</h3>
                <p class="card-text title">Computer Science</p>
                <p class="card-text">lorem ipsum ipsum lorem lorem ipsum ipsum lorem.</p>
                <p class="card-text">kevin.winata003@binus.ac.id</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <h1 class="text-uppercase text-center">recent project</h1>  

            <div class="row d-flex flex-direction-column justify-content-center w-100 h-75 my-5 p-4" style="gap: 10px;">
            
              <div class="col-md-3 w-25 border" style="background-color:aquamarine; ">
                <img src="img/CSS-Logo.png" alt="" class="img-fluid rounded-circle my-5">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ullam magni vel tempora mollitia pariatur ipsam eaque numquam, quidem suscipit expedita rem veniam sed molestiae consectetur provident temporibus optio et?</p>
              </div>
              
              
              <div class="col-md-3" style="background-color:aquamarine;">
                <img src="img/.net.png" alt="" class="img-fluid rounded-circle my-3" style="padding: 1rem;">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ullam magni vel tempora mollitia pariatur ipsam eaque numquam, quidem suscipit expedita rem veniam sed molestiae consectetur provident temporibus optio et?</p>
              </div>

              <div class="col-md-3" style="background-color:aquamarine;">
                <img src="img/html.png" alt="" class="img-fluid rounded-circle my-5">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ullam magni vel tempora mollitia pariatur ipsam eaque numquam, quidem suscipit expedita rem veniam sed molestiae consectetur provident temporibus optio et?</p>
              </div>

              <div class="col-md-3" style="background-color:aquamarine;">
                <img src="img/java.png" alt="" class="img-fluid rounded-circle" style="padding: 2rem;">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ullam magni vel tempora mollitia pariatur ipsam eaque numquam, quidem suscipit expedita rem veniam sed molestiae consectetur provident temporibus optio et?</p>
              </div>

              <div class="col-md-3" style="background-color:aquamarine;">
                <img src="img/sql.png" alt="" class="img-fluid rounded-circle" style="padding: 2rem;">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ullam magni vel tempora mollitia pariatur ipsam eaque numquam, quidem suscipit expedita rem veniam sed molestiae consectetur provident temporibus optio et?</p>
              </div>


            </div>
        </div>
      </div>
    </div>
  </div>

@endsection
