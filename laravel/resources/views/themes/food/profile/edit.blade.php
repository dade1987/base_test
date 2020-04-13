@php
     $profile_panel=Panel::get($row);
@endphp

@extends('pub_theme::layouts.app',['body_style' => 'padding-top:72px;'])
@section('content')
    <section class="py-5">
      <div class="container">
        @include('pub_theme::layouts.partials.breadcrumb')
        <h1 class="hero-heading mb-4">I miei dati</h1>


{{--        <p class="text-muted mb-5">You have no upcoming trips. Start exploring ideas for your next trip.</p>
        <p class="mb-6"> <img src="img/illustration/undraw_trip_dv9f.svg" alt="" style="width: 400px;" class="img-fluid"></p> --}}
        @include('theme::includes.flash')
        {!! $profile_panel->formEdit(
          [
            'submit_btn'=>'<button type="submit" class="btn btn-lg btn-block btn-primary">Save</button>'
          ]) !!}

{{--        <section class="py-5">
      <div class="container bg-gray-100 py-5 px-3 px-lg-5 rounded-lg shadow-sm">
        <div class="row">
          <div class="col-lg-5">
            <div class="p-5"><img src="img/avatar/avatar-0.jpg" alt="" class="img-fluid rounded-circle shadow-sm"></div>
          </div>
          <div class="col-lg-6 d-flex align-items-center">
            <div>
              <blockquote class="blockquote-icon">
                <p class="text-lg text-gray-700 mb-4">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.   </p>
                <h6 class="text-lg text-uppercase text-primary">— Meredith Goodwin, Founder</h6>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </section>.
--}}
        
        <h2 class="mb-5">I ristoranti suggeriti da me 
            <span class="text-right">
            <button type="button" data-title="create"
				data-href="{{ $_panel->relatedUrl(['related_name'=>'restaurant','act'=>'create']) }}" data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalIframe">
            <i class="fa fa-plus" data-toggle="tooltip" title="Aggiungi Ristorante"></i>
            
			</button>
            </span>
        </h2>
        <div class="row">
        @foreach($row->restaurants as $restaurant)
            @php
               
                $restaurant_panel=Panel::get($restaurant);//->setParent($profile_panel);
            @endphp
            @include('pub_theme::restaurant.index_edit.swiper_item', 
                [
                    'restaurant' => $restaurant,
                    'restaurant_panel' => $restaurant_panel,
                ]
            )
          
        @endforeach
        </div>


        {{--  
        <div class="row">
          <!-- place item-->
          <div data-marker-id="59c0c8e33b1527bfe2abaf92" class="col-xl-3 col-md-4 col-sm-6 mb-5">
            <div class="card h-100 border-0 shadow">
              <div class="card-img-top overflow-hidden"><a href="user-booking-detail.html"><img src="img/photo/photo-1484154218962-a197022b5858.jpg" alt="Modern, Well-Appointed Room" class="img-fluid"/></a></div>
              <div class="card-body d-flex align-items-center">
                <div class="w-100">
                  <p class="subtitle font-weight-normal text-sm mb-2">March 2019</p>
                  <h6 class="card-title"><a href="user-booking-detail.html" class="text-decoration-none text-dark">Modern, Well-Appointed Room</a></h6>
                  <div class="d-flex card-subtitle mb-3">
                    <p class="flex-grow-1 mb-0 text-muted text-sm">Private room</p>
                    <p class="flex-shrink-1 mb-0 card-stars text-xs text-right"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- place item-->
          <div data-marker-id="59c0c8e322f3375db4d89128" class="col-xl-3 col-md-4 col-sm-6 mb-5">
            <div class="card h-100 border-0 shadow">
              <div class="card-img-top overflow-hidden"><a href="user-booking-detail.html"><img src="img/photo/photo-1426122402199-be02db90eb90.jpg" alt="Cute Quirky Garden apt, NYC adjacent" class="img-fluid"/></a></div>
              <div class="card-body d-flex align-items-center">
                <div class="w-100">
                  <p class="subtitle font-weight-normal text-sm mb-2">March 2019</p>
                  <h6 class="card-title"><a href="user-booking-detail.html" class="text-decoration-none text-dark">Cute Quirky Garden apt, NYC adjacent</a></h6>
                  <div class="d-flex card-subtitle mb-3">
                    <p class="flex-grow-1 mb-0 text-muted text-sm">Entire apartment</p>
                    <p class="flex-shrink-1 mb-0 card-stars text-xs text-right"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                                  </i>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- place item-->
          <div data-marker-id="59c0c8e3a31e62979bf147c9" class="col-xl-3 col-md-4 col-sm-6 mb-5">
            <div class="card h-100 border-0 shadow">
              <div class="card-img-top overflow-hidden"><a href="user-booking-detail.html"><img src="img/photo/photo-1512917774080-9991f1c4c750.jpg" alt="Modern Apt - Vibrant Neighborhood!" class="img-fluid"/></a></div>
              <div class="card-body d-flex align-items-center">
                <div class="w-100">
                  <p class="subtitle font-weight-normal text-sm mb-2">March 2019</p>
                  <h6 class="card-title"><a href="user-booking-detail.html" class="text-decoration-none text-dark">Modern Apt - Vibrant Neighborhood!</a></h6>
                  <div class="d-flex card-subtitle mb-3">
                    <p class="flex-grow-1 mb-0 text-muted text-sm">Entire apartment</p>
                    <p class="flex-shrink-1 mb-0 card-stars text-xs text-right"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                                  </i><i class="fa fa-star text-gray-300">                                  </i>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- place item-->
          <div data-marker-id="59c0c8e3503eb77d487e8082" class="col-xl-3 col-md-4 col-sm-6 mb-5">
            <div class="card h-100 border-0 shadow">
              <div class="card-img-top overflow-hidden"><a href="user-booking-detail.html"><img src="img/photo/photo-1494526585095-c41746248156.jpg" alt="Sunny Private Studio-Apartment" class="img-fluid"/></a></div>
              <div class="card-body d-flex align-items-center">
                <div class="w-100">
                  <p class="subtitle font-weight-normal text-sm mb-2">March 2019</p>
                  <h6 class="card-title"><a href="user-booking-detail.html" class="text-decoration-none text-dark">Sunny Private Studio-Apartment</a></h6>
                  <div class="d-flex card-subtitle mb-3">
                    <p class="flex-grow-1 mb-0 text-muted text-sm">Shared room</p>
                    <p class="flex-shrink-1 mb-0 card-stars text-xs text-right"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                                  </i>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        --}}
      </div>
    </section>
@endsection