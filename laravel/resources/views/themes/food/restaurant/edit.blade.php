@extends('pub_theme::layouts.app',['body_style'=>"padding-top: 72px;"])
@section('content')
    @include('pub_theme::restaurant.edit.hero')
        {{--
            @include('pub_theme::layouts.partials.breadcrumb')
            --}}
            <br/>
    @include('pub_theme::layouts.default.index_edit.tabs',['panel'=>$_panel])

{{--
	<ul>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }} 
            </a>
        </li>
        @endforeach
    </ul>
    --}}


		<section class="py-6">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
                        @include('pub_theme::restaurant.edit.about')
                        @include('pub_theme::restaurant.edit.map')
                        @include('pub_theme::restaurant.edit.gallery',['restaurant_panel'=>$_panel])
                        @include('pub_theme::restaurant.sections.amenities')
                        @include('pub_theme::restaurant.sections.listing_reviews')
					</div>
					<div class="col-lg-4">
						<div class="pl-xl-4">
                            @include('pub_theme::restaurant.edit.opening_hours')
                            @include('pub_theme::layouts.widgets.contact')
                            @include('pub_theme::layouts.widgets.bookmark')
						</div>
					</div>
				</div>
			</div>
		</section>
        @include('pub_theme::restaurant.sections.similar_places')
@endsection