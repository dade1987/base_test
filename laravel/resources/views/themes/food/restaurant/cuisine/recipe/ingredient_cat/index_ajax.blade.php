@extends('pub_theme::layouts.app_ajax')
@section('content')
<div class="container py-5">
    <div class="row">
      <div class="col-lg-12">
        {{-- dd(get_defined_vars()) --}}
        <div class="col-lg-4">
            <label class="form-label">Qty</label>
            <div class="d-flex align-items-center">
              <div class="btn btn-items btn-items-decrease">-</div>
              <input type="text" value="1" disabled="" class="form-control input-items">
              <div class="btn btn-items btn-items-increase">+</div>
            </div>
          </div>
        <hr/><hr/>
        @foreach($rows as $ingcat)
            @include('pub_theme::restaurant.cuisine.ingredient_cat.item',['row'=>$ingcat])
        @endforeach
      </div>
    </div>
</div>
@endsection
