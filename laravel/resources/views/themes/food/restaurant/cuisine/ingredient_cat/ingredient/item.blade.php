<div class="col-sm-6 col-lg-4 mb-5 hover-animate">
	<div class="card h-60 border-0 shadow">
		<div class="card-body">
			<h5 class="card-title">{{ $row->title }}</h5>
			<p class="text-sm text-muted mb-3"> {{ $row->subtitle }}</p>
			<p class="flex-shrink-1 mb-0 card-stars text-xs text-right">
				<span class="h4 text-primary">€ {{ number_format($row->pivot->price,2) }}</span>
			    <div class="custom-control custom-switch text-right">
				    <input type="checkbox" class="custom-control-input" id="{{ $row->post_type }}-{{ $row->post_id }}" />
				    <label class="custom-control-label" for="{{ $row->post_type }}-{{ $row->post_id }}"></label>
			    </div>
			</p>
		</div>
	</div>
</div>
