@extends('layouts.layout')

@section('content')

    <div class="container-fluid my-4" id="container-nav">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12 col-md-6 col-sm-12 border justify-content-center" id="img-content">

                    <img src="img/image 31.png" alt="" class="img-fluid" id="img-event">
                </div>

                <div class="col-lg-12 col-md-6 col-12 d-flex flex-direction-row" id="navbar-content">
                    <a href="" class="overview">overview</a>
                    <a href="" class="overview">highlight</a>
                    <a href="" class="overview">packages</a>
                    <a href="" class="overview">location</a>
                    <a href="" class="overview">description</a>
                </div>

                <div class="col-lg-12 col-md-4 my-4" id="title-event"> 
                    
                    <h5 class="title-text text-capitalize" id="highlight"> highlight</h5>

                    <div class="col-lg-8 col-md-12 col-12" id="bullet-list">
                      
                        <ul class="unlist">
                            <li class="one">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat accusantium, sint eligendi libero praesentium similique dolorum et voluptates non iure ex, unde expedita quaerat! Odit provident illum voluptates quae dignissimos!</li>
                            <li class="two">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, mollitia adipisci! Porro itaque voluptates veritatis dignissimos amet commodi voluptatum tenetur nisi? Enim praesentium architecto perferendis. Quas illo distinctio velit blanditiis.</li>
                            <li class="three">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae facilis dolores veniam exercitationem saepe ipsa illo officia labore placeat ad blanditiis porro, rerum dignissimos quisquam impedit voluptas corrupti quas quos.</li>
                        </ul>
                        
                        <div class="row">

                            <div class="col-lg-12 col-md-8 col-12 position-relative">
                                
                                <ul class="dashed" id="important-card">
                                    
                                    <h5 class="message-header text-capitalize" id="message-header"> <i class="fa-solid fa-bullhorn "></i> important info</h5>

                                    <ul class="dashed">
                                        <li class="bullet-list-small"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, assumenda doloremque cum veniam beatae, maxime nam nostrum hic itaque recusandae molestias dicta at laudantium! Quod quia ex quos exercitationem quas!</li>
                                        <li class="bullet-list-small"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, assumenda doloremque cum veniam beatae, maxime nam nostrum hic itaque recusandae molestias dicta at laudantium! Quod quia ex quos exercitationem quas!</li>
                                        <li class="bullet-list-small"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, assumenda doloremque cum veniam beatae, maxime nam nostrum hic itaque recusandae molestias dicta at laudantium! Quod quia ex quos exercitationem quas!</li>
                                    </ul>
    
                                </ul>

                            </div>
    
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-lg-12 col-12 position-relative" id="ticket-select">
                    
                    <h5 class="title-text text-capitalize">events</h5>

                    <h1 class="big-event-title text-uppercase col-md-4 w-100" id="biggest-event-title">gmmtv musicon in jakarta</h1>

                    <div class="col-lg-12 col-md-5 my-3" id="content-box">

                        <h5 class="event-launch"><i class="fa-solid fa-calendar-check"></i> 16 dec 2006</h5>
                        <h5 class="location"><i class="fa-solid fa-location-dot"></i> jl anggrek, binus anggrek</h5>
                        
                        <h3 class="price-tag" id="price-tag"><span class="price">idr</span> 390.000</h3>
                        <button class="btn btn-success position-absolute" id="btn-events"> buy ticket now</button>

                    </div>

                </div>

                <div class="col-lg-12 col-md-6 col-12 pt-4">
                    
                    <div class="header">
                        <h4 class="text-capitalize">product</h4>
                        
                        <h5 class="text-capitalize">check product availability</h5>
                        
                        <div class="content" id="content-calendar">
                            <button class="btn btn-success rounded-pill">16 dec</button>

                            <button class="btn btn-success rounded-pill">other</button>

                        </div>
                        
                    </div>

                    <div class="container col-lg-12 my-4 border position-relative" id="container-product">
                        <div class="col-md-8 " id="container-inside">
                            <h4 class="text-title-product text-uppercase">seat a</h4>
                            <h5 class="sub-title-prd text-uppercase">standing with queue number</h5>
                            <div class="content col-md-6 w-100 d-flex" id="top-icon">
                                <a href="" class="details" id="details-card">details</a>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-money-bill-wave"></i> no refund allowed | </p>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-hourglass-end"></i> valid on selected date only |</p>
                                <p class="text-capitalize" id="icon-fa"> <i class="fa-solid fa-hourglass-end"></i> valid on selected date only |</p>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-bolt"></i>instant conformartion</p>
                            </div>   

                            <div class="content col-md-6 w-100 d-flex" id="botm-icon">
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-circle"></i> all tickets are for standing area</p>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-people-group"></i> standing</p>
                            </div>

                            <div class="col-lg-12 col-md-6 pt-2 d-flex w-100" id="checkhout">
                                <h4 class="price-list text-uppercase"> <i class="fa-solid fa-money-bill"></i><span class="color">idr</span> 895.000</h4>
                                <button class="btn btn-primary text-capitalize p-3" id="btn-checkout">check out</button>
                            </div>
                        </div>

                        <div class="col-md-8 my-4" id="container-inside">
                            <h4 class="text-title-product text-uppercase">seat a</h4>
                            <h5 class="sub-title-prd text-uppercase">standing with queue number</h5>
                            <div class="content col-md-6 w-100 d-flex" id="top-icon">
                                <a href="" class="details" id="details-card">details</a>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-money-bill-wave"></i> no refund allowed | </p>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-hourglass-end"></i> valid on selected date only |</p>
                                <p class="text-capitalize" id="icon-fa"> <i class="fa-solid fa-hourglass-end"></i> valid on selected date only |</p>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-bolt"></i>instant conformartion</p>
                            </div>   

                            <div class="content col-md-6 w-100 d-flex" id="botm-icon">
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-circle"></i> all tickets are for standing area</p>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-people-group"></i> standing</p>
                            </div>

                            <div class="col-lg-12 col-md-6 pt-2 d-flex w-100" id="checkhout">
                                <h4 class="price-list text-uppercase"> <i class="fa-solid fa-money-bill"></i><span class="color">idr</span> 895.000</h4>
                                <button class="btn btn-primary text-capitalize p-3" id="btn-checkout">check out</button>
                            </div>
                        </div>

                        <div class="col-md-8 my-4" id="container-inside">
                            <h4 class="text-title-product text-uppercase">seat a</h4>
                            <h5 class="sub-title-prd text-uppercase">standing with queue number</h5>
                            <div class="content col-md-6 w-100 d-flex" id="top-icon">
                                <a href="" class="details" id="details-card">details</a>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-money-bill-wave"></i> no refund allowed | </p>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-hourglass-end"></i> valid on selected date only |</p>
                                <p class="text-capitalize" id="icon-fa"> <i class="fa-solid fa-hourglass-end"></i> valid on selected date only |</p>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-bolt"></i>instant conformartion</p>
                            </div>   

                            <div class="content col-md-6 w-100 d-flex" id="botm-icon">
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-circle"></i> all tickets are for standing area</p>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-people-group"></i> standing</p>
                            </div>

                            <div class="col-lg-12 col-md-6 pt-2 d-flex w-100" id="checkhout">
                                <h4 class="price-list text-uppercase"> <i class="fa-solid fa-money-bill"></i><span class="color">idr</span> 895.000</h4>
                                <button class="btn btn-primary text-capitalize p-3" id="btn-checkout">check out</button>
                            </div>
                        </div>

                        <div class="col-md-8 my-4" id="container-inside">
                            <h4 class="text-title-product text-uppercase">seat a</h4>
                            <h5 class="sub-title-prd text-uppercase">standing with queue number</h5>
                            <div class="content col-md-6 w-100 d-flex" id="top-icon">
                                <a href="" class="details" id="details-card">details</a>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-money-bill-wave"></i> no refund allowed | </p>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-hourglass-end"></i> valid on selected date only |</p>
                                <p class="text-capitalize" id="icon-fa"> <i class="fa-solid fa-hourglass-end"></i> valid on selected date only |</p>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-bolt"></i>instant conformartion</p>
                            </div>   

                            <div class="content col-md-6 w-100 d-flex" id="botm-icon">
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-circle"></i> all tickets are for standing area</p>
                                <p class="text-capitalize" id="icon-fa"><i class="fa-solid fa-people-group"></i> standing</p>
                            </div>

                            <div class="col-lg-12 col-md-6 pt-2 d-flex w-100" id="checkhout">
                                <h4 class="price-list text-uppercase"> <i class="fa-solid fa-money-bill"></i><span class="color">idr</span> 895.000</h4>
                                <button class="btn btn-primary text-capitalize p-3" id="btn-checkout">check out</button>
                            </div>
                        </div>

                    </div>
            
                </div>

                <div class="col-lg-12 col-md-8 col-12">
                    
                </div>

            </div>
            


        </div>
    </div>
    
@endsection