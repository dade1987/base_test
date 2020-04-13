@extends('pub_theme::layouts.app',['body_style'=>'padding-top: 72px;'])
@section('content')
<div class="container py-5">
    @php
    $restaurant=collect($items)->where('post_type','restaurant')->last();
    $restaurant_panel=Panel::get($restaurant);

    @endphp
    {{-- $restaurant_panel-> --}}
    <div class="row">
      <div class="col-lg-12">
        @foreach($rows as $ingcat)

            @include('pub_theme::restaurant.cuisine.ingredient_cat.item',['row'=>$ingcat])

        @endforeach
      </div>
    </div>
</div>
@endsection


