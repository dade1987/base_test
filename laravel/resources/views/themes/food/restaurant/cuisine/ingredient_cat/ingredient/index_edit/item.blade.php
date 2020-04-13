<div class="col-sm-6 col-lg-4 mb-5 hover-animate">
	<div class="card h-60 border-0 shadow">
		<div class="card-body">
            <h5 class="card-title">{{ $ingredient->title }}</h5>
            <p class="text-sm text-muted mb-3"> {{ $ingredient->subtitle }}</p>
                <p class="flex-shrink-1 mb-0 card-stars text-xs text-right">
                    <span class="h4 text-primary">€ {{ number_format($ingredient->pivot->price,2) }}</span>
                    {{--
                    <div class="custom-control custom-switch text-right">
                        <input type="checkbox" class="custom-control-input" id="{{ $ingredient->post_type }}-{{ $ingredient->post_id }}" />
                        <label class="custom-control-label" for="{{ $ingredient->post_type }}-{{ $ingredient->post_id }}"></label>
                    </div>
                    --}}
                    <button type="button" data-title="modifica {{ $ingredient->title }}"
                        data-href="{{ $ingredient_panel->editUrl() }}"
                        data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalIframe">
                        <i class="fa fa-edit" data-toggle="tooltip" title="modifica {{ $ingredient->title }}"></i>
                    </button>
                </p>
		</div>
	</div>
</div>
