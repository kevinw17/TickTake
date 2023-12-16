@extends('layouts.layout')

@section('content')
  <div class="jumbotron text-center py-5" style="background-color: #4ECDC4">
    <p class="display-1 text-capitalize" style="font-weight: 400;">About Us</p>
  </div>

  
  <div class="row " style="padding:10rem;">
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
        
  <div class="row mt-3 mb-5 py-2">
    <div class="col-md-8 mx-auto">
      <div class="card-body pt-2">
        <h2 class="text-center mb-5">Our Team</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4" style="background-color: aquamarine">

              <div class="wrapper" style="padding: 2.5rem; height: 20rem;" >
                <img src="img/kevin.jpg" alt="Kevin" class="card-img-top rounded-circle w-100 img-thumbnail">
              </div>
              <div class="card-body">
                <h3 class="card-title">Kevin Winata</h3>
                <p class="card-text title">Computer Science</p>
                <p class="card-text">lorem ipsum ipsum lorem lorem ipsum ipsum lorem.</p>
                <p class="card-text">kevin.winata003@binus.ac.id</p>
              </div>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="card mb-4" style="background-color: aquamarine">
              <div class="wrapper"  style="padding: 2.5rem;">
                <img src="img/aqil.jpg" alt="Aqil" class="card-img-top rounded-circle w-100 img-thumbnail">
              </div>
             
              <div class="card-body"> 
                <h3 class="card-title">Aqil Nauffan M</h3>
                <p class="card-text title">Computer Science</p>
                <p class="card-text">lorem ipsum ipsum lorem lorem ipsum ipsum lorem.</p>
                <p class="card-text">aqil.marjana@binus.ac.id</p>
              </div>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="card mb-4" style="background-color: aquamarine">
              <div class="wrapper"  style="padding: 2.5rem; height: 20rem;">
                <img src="img/walid.png" alt="walid" class="card-img-top rounded-circle w-100 img-thumbnail">
              </div>
              <div class="card-body">
                <h3 class="card-title">Walid Fernando S</h3>
                <p class="card-text title">Computer Science</p>
                <p class="card-text">lorem ipsum ipsum lorem lorem ipsum ipsum lorem.</p>
                <p class="card-text">walid.sastriana@binus.ac.id</p>
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
              <p class="text my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ullam magni vel tempora mollitia pariatur ipsam eaque numquam, quidem suscipit expedita rem veniam sed molestiae consectetur provident temporibus optio et?</p>
            </div>
            
            
              <div class="col-md-3" style="background-color:aquamarine;">
                <img src="img/laravel.jpg" alt="" class="img-fluid rounded-circle my-3" style="padding: 2rem;">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ullam magni vel tempora mollitia pariatur ipsam eaque numquam, quidem suscipit expedita rem veniam sed molestiae consectetur provident temporibus optio et?</p>
              </div>

              <div class="col-md-3" style="background-color:aquamarine;">
                <img src="img/html.png" alt="" class="img-fluid rounded-circle my-5" style="padding: 0.5rem;">
                <p class="text my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ullam magni vel tempora mollitia pariatur ipsam eaque numquam, quidem suscipit expedita rem veniam sed molestiae consectetur provident temporibus optio et?</p>
              </div>

              <div class="col-md-3" style="background-color:aquamarine;">
                <img src="img/PHP.png" alt="" class="img-fluid rounded-circle my-5" style="padding: 3.5rem;">
                <p class="text my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ullam magni vel tempora mollitia pariatur ipsam eaque numquam, quidem suscipit expedita rem veniam sed molestiae consectetur provident temporibus optio et?</p>
              </div>

              <div class="col-md-3" style="background-color:aquamarine;">
                <img src="img/sql.png" alt="" class="img-fluid rounded-circle my-4 " style="padding: 0.5rem;">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ullam magni vel tempora mollitia pariatur ipsam eaque numquam, quidem suscipit expedita rem veniam sed molestiae consectetur provident temporibus optio et?</p>
              </div>


            </div>
        </div>
      </div>
    </div>
    
    
  </div>

  <div class="jumbotron img-container" style="position: relative; margin-bottom: 8rem;">
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-11 col-md-8 col-sm-4">
              <img src="img/binus.jpg" alt="" class="img-fluid w-100" style="height: 24rem;">
            </div>

            <div class="col-lg-1 col-md-4 col-sm-2" style="display: flex; flex-direction: column; padding: 2rem;">
              <a href="https://www.instagram.com/binus_kemanggisan/"><i class="fa-brands fa-instagram w-100 fa-3x my-4" style="color: rgb(216, 20, 190)"></i></a>
              <a href="https://www.tiktok.com/@binusuniversityofficial"><i class="fa-brands fa-tiktok w-100 fa-3x my-4" style="color: rgb(33, 32, 32)"></i></a>
              <a href="https://www.facebook.com/universitasbinanusantara/"><i class="fa-brands fa-facebook w-100 fa-3x my-4"></i></a>

              <div class="row d-flex">
                <div class="col-lg-3 col-sm-2" style="position: absolute; left:42rem; ">
                    <div class="wrapper-box" style="border; background-color:silver; width:22rem;">
                        <h1 class="text-uppercase" style="font-family:'Times New Roman', Times, serif">incolaboration</h1>
                        <div class="body d-flex col-md-12" style="height: 10rem;">

                          <div class="col-sm-6">
                            <p class="text-capitalize ms-3" style="font-size: 10px; text-align: start;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                              Debitis aliquid rem, aliquam molestiae cupiditate explicabo beatae doloremque veniam reprehenderit veritatis distinctio quos 
                              ipsum ipsa, maxime modi dicta, id sapiente commodi.</p>
                          </div>

                          <div class="col-sm-6">
                            <p class="text-capitalize me-3 py-2" style="font-size: 10px; text-align: end;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                              Debitis aliquid rem, aliquam molestiae cupiditate explicabo beatae doloremque veniam reprehenderit veritatis distinctio quos 
                              ipsum ipsa, maxime modi dicta, id sapiente commodi.</p>
                          </div>
                          
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
@endsection
