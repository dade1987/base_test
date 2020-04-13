@extends('pub_theme::layouts.app',['body_style'=>'padding-top: 72px;'])
@section('content')
{{--
<div style="height: 8px; top: 71px;" class="progress rounded-0 sticky-top">
	<div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div>
</div>
--}}
<section class="py-5">
	<div class="container">
        <p class="subtitle text-primary">Crea Ristorante</p>
        @include('theme::includes.flash')
		<h1 class="h2 mb-5"> Informazioni base
            {{--
                <span class="text-muted float-right">Step 1</span>
            --}}
        </h1>
		{!! Form::bsOpen($row,'store') !!}
		<div class="row form-block">
			<div class="col-lg-4">
				<h4>Basic</h4>
				<p class="text-muted text-sm">
					{{-- Traduzione da mettere --}}
				</p>
			</div>
			<div class="col-lg-7 ml-auto">
				{{ Form::bsText('post[title]'/*,null,['id'=>'mioid','class'=>"miaclasse"] */) }}
				{{ Form::bsTextarea('post[subtitle]') }}
				{{ Form::bsSelectRelationshipMulti('cuisineCats') }}
			</div>
		</div>
		<div class="row form-block">
			<div class="col-lg-4">
				<h4>Location</h4>
				<p class="text-muted text-sm">
					{{-- Traduzione da mettere --}}
				</p>
			</div>
			<div class="col-lg-7 ml-auto">
				{{ Form::bsAddressGoogle('restaurant[address]') }}
			</div>
		</div>
		<div class="row form-block">
			<div class="col-lg-4">
				<h4>Description</h4>
				<p class="text-muted text-sm">
					{{-- Traduzione da mettere --}}
				</p>
			</div>
			<div class="col-lg-7 ml-auto">
				{{ Form::bsTextarea('post[txt]') }}
			</div>
		</div>
		<div class="row form-block">
			<div class="col-lg-4">
				<h4>Photos</h4>
				<p class="text-muted text-sm">
					{{-- Traduzione da mettere --}}
				</p>
			</div>
			<div class="col-lg-7 ml-auto">
				{{ Form::bsImage('image_src') }}
			</div>
		</div>
		<div class="row form-block flex-column flex-sm-row">
			<div class="col text-center text-sm-left">
			</div>
			<div class="col text-center text-sm-right">
                {{--
                    <a href="user-add-2.html" class="btn btn-primary px-3">
                        Next step<i class="fa-chevron-right fa ml-2"></i>
                    </a>
                --}}
                <button type="submit" class="btn btn-primary px-3">
                    Save <i class="far fa-save ml-2"></i>
                </button>
			</div>
		</div>
		</form>
	</div>
</section>
@endsection
