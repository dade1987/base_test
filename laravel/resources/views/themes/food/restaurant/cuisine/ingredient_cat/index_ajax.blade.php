@extends('pub_theme::layouts.app_ajax')
@section('content')
<div class="container py-5">
    <div class="row">
      <div class="col-lg-12">
        @foreach($rows as $ingcat)
            @include('pub_theme::restaurant.cuisine.ingredient_cat.item',['row'=>$ingcat])
        @endforeach
      </div>
    </div>
</div>
@endsection



