@extends('layouts.layout')

@section('content')
    <div class="container-fluid my-4" id="container-nav">
        <div class="container">
            <div class="row d-flex justify-content-center">
                @foreach ($details as $detail)
                    <img src="img/{{ $detail->EventPict }}" alt="" >
                    @if ($event_detail->id == $detail->EventDetailID)
                        {{-- <div class="col-lg-12 col-md-6 col-sm-12 justify-content-center" id="img-content">
                            <img src="img/{{ $detail->EventPict }}" alt="" class="img-fluid" id="img-event" style="height: 18rem;">
                        </div> --}}

                        <div class="col-lg-12 col-12 position-relative my-4 border-bottom" id="ticket-select">
                            <h1 class="big-event-title col-md-4 w-100" id="biggest-event-title">{{ $detail->EventName }}</h1>
                            <div class="col-lg-12 col-md-5 my-3" id="content-box">
                                <div class="wrapper d-flex justify-content-between">
                                    <h5 class="event-launch"><i class="fa-solid fa-calendar-check"></i> {{ $detail->EventDate }}</h5>
                                    <h3 class="price-tag" id="price-tag"><span class="price">Rp. </span> {{ $detail->EventPrice }}</h3>
                                </div>

                                <div class="wrapper d-flex w-100 justify-content-between">
                                    <h5 class="location"><i class="fa-solid fa-location-dot"></i> {{ $detail->EventPlace }}, {{ $detail->EventCity }}</h5>
                                    <a href="/checkout/{{ $detail->EventDetailID }}" class="btn btn-success text-capitalize" style="font-weight: bold;">buy ticket</a>   
                                </div>

                                <div class="wrapper" id="quota">
                                    <h5 class="text-capitalize"><i class="fa-solid fa-people-group"></i> {{ $detail->Quota }} people</h5>
                                </div>                      
                            </div>
                        </div>               

                        <div class="row border-bottom py-4">
                            <div class="col-lg-12">
                                <div class="wrapper content">
                                    <h2 class="text-capitalize mb-4">description</h2>
                                    <p class="text w-50">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem ducimus exercitationem laborum nulla! Dolore perspiciatis possimus error velit ipsum quis iure? A molestias, mollitia itaque quibusdam laborum velit dignissimos soluta?</p>
                                    <p class="text w-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam quo, quos eum blanditiis quod libero vitae at natus ab! Explicabo impedit voluptatibus debitis iste autem repudiandae dignissimos! Neque, ullam recusandae?</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-4 my-4" id="title-event">                    
                            <h5 class="title-text text-capitalize mb-4" id="highlight"> highlight</h5>
                            <div class="col-lg-8 col-md-12 col-12" id="bullet-list">
                                <ul class="unlist">
                                    <li class="one">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat accusantium, sint eligendi libero praesentium similique dolorum et voluptates non iure ex, unde expedita quaerat! Odit provident illum voluptates quae dignissimos!</li>
                                    <li class="two">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, mollitia adipisci! Porro itaque voluptates veritatis dignissimos amet commodi voluptatum tenetur nisi? Enim praesentium architecto perferendis. Quas illo distinctio velit blanditiis.</li>
                                    <li class="three">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae facilis dolores veniam exercitationem saepe ipsa illo officia labore placeat ad blanditiis porro, rerum dignissimos quisquam impedit voluptas corrupti quas quos.</li>
                                </ul>
                                
                                <div class="row mt-5">
                                    <div class="col-lg-12 col-md-8 col-12 position-relative">                               
                                        <ul class="dashed" id="important-card">                                   
                                            <h5 class="message-header text-capitalize mb-4" id="message-header"> <i class="fa-solid fa-bullhorn "></i> important info</h5>
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
                    @endif           
                @endforeach
            </div>
        </div>
    </div>
@endsection
