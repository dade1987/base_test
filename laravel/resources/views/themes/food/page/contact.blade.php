@extends('pub_theme::layouts.app')
@section('content')
    
    @include('pub_theme::page.contact.hero')
    <section class="py-6">
      <div class="container">       
        <div class="row">
            @foreach($row->sons as $son)
                @include('pub_theme::page.contact.'.$son->blade)  
            @endforeach
          
        </div>
      </div>
    </section>
    <section class="py-6 bg-gray-100">
      <div class="container">
        <h2 class="h4 mb-5">Contact form</h2>
        <div class="row">
          <div class="col-md-7 mb-5 mb-md-0">
              @include('pub_theme::page.contact.form')
            
          </div>
          <div class="col-md-5">
            <div class="pl-lg-4">
              <p class="text-muted">{{ $row->subtitle }}</p>
              <div class="social">
                  <ul class="list-inline">
                      
                    @foreach(config('social.items') as $social)
                  <li class="list-inline-item">
                      <a href="{{ $social->url }}" target="_blank">
                        <i class="fab fa-{{ $social->name }}"></i>
                    </a>
                </li>
                      @endforeach
                  {{--  
                    <li class="list-inline-item">
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item">
                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item">
                                <a href="#" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item">
                                    <a href="#" target="_blank"><i class="fab fa-vimeo"></i></a></li>
                --}}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="map-wrapper-300">
      <div id="detailMap" class="h-100"></div>
    </div>
@endsection