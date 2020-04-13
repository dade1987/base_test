<!-- Hero Section-->
<section style="background-image: url('{{ $row->image_src }}');" class="pt-3 pb-5 d-flex align-items-end dark-overlay bg-cover">
	<div class="container overlay-content">
		<div class="d-flex justify-content-between align-items-start flex-column flex-lg-row align-items-lg-end">
			<div class="text-white mb-4 mb-lg-0">
				@foreach($row->cuisineCats as $v)
				<div class="badge badge-pill badge-transparent px-3 py-2 mb-4">{{ $v->title }}</div>
				@endforeach
				<h1 class="text-shadow verified">{{ $row->title }}</h1>
				<p class="text-right">
					<button type="button" data-title="modifica" 
						data-href="{{ Panel::get($row)->urlItemAction('edit_restaurant_basic') }}" data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalIframe">
					<i class="fa fa-edit"></i>
					</button>
					<button type="button" data-title="modifica" 
						data-href="{{ Panel::get($row)->urlItemAction('edit_restaurant_photo') }}" data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalIframe">
					<i class="fa fa-camera"></i>
					</button>
				</p>
				<p><i class="fa-map-marker-alt fas mr-2"></i> {{ $row->full_address }}</p>
				{{--  solo in show
					<p class="mb-0 d-flex align-items-center"><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-gray-200 mr-4">                   </i>8 Reviews</p>
				--}}
			</div>
			{{-- solo in show  o forse lettura commenti .. 
				<div class="calltoactions"><a href="#leaveReview" onclick="$('#leaveReview').collapse('show')" data-smooth-scroll class="btn btn-primary">Leave a Review</a></div>
				--}}
		</div>
	</div>
</section>