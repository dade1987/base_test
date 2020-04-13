@extends('pub_theme::layouts.app',['body_style'=>'padding-top:72px;'])
@section('content')
@php
    $restaurant=collect($items)->firstWhere('post_type','restaurant');
    $restaurant_panel=Panel::get($restaurant);
@endphp
    @include('pub_theme::restaurant.sections.hero',['row'=>$restaurant])
    @include('pub_theme::layouts.default.index.tabs',['panel'=>$restaurant_panel])
    <div class="container py-5">
        <div class="row">
          <div class="col-lg-8">
            @foreach($rows as $cuisine)
                @php
                    $cuisine_panel=Panel::get($cuisine);
                    $cuisine_panel->setParent($restaurant_panel);
                @endphp
                @include('pub_theme::restaurant.cuisine.index.item',['cuisine_panel'=>$cuisine_panel,'cuisine'=>$cuisine])
            @endforeach
          </div>
          <div class="col-lg-4">
            <div style="top: 100px;" class="p-4 shadow ml-lg-4 rounded sticky-top">
              <p class="text-muted"><span class="text-primary h2">$120</span> per night</p>
              <hr class="my-4">
              <form id="booking-form" method="get" action="#" autocomplete="off" class="form">
                <div class="form-group">
                  <label for="bookingDate" class="form-label">Your stay *</label>
                  <div class="datepicker-container datepicker-container-right">
                    <input type="text" name="bookingDate" id="bookingDate" placeholder="Choose your dates" required="required" class="form-control">
                  </div>
                </div>
                <div class="form-group mb-4">
                  <label for="guests" class="form-label">Guests *</label>
                  <select name="guests" id="guests" class="form-control">
                    <option value="1">1 Guest</option>
                    <option value="2">2 Guests</option>
                    <option value="3">3 Guests</option>
                    <option value="4">4 Guests</option>
                    <option value="5">5 Guests</option>
                  </select>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">Book your stay</button>
                </div>
              </form>
              <p class="text-muted text-sm text-center">Some additional text can be also placed here.</p>
              <hr class="my-4">
              <div class="text-center">
                <p> <a href="#" class="text-secondary text-sm"> <i class="fa fa-heart"></i> Bookmark This Listing</a></p>
                <p class="text-muted text-sm">79 people bookmarked this place </p>
              </div>
            </div>
          </div>
        </div>
      </div>




@endsection
