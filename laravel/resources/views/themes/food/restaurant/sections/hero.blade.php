<!-- Hero Section-->
<section style="background-image: url('{{ $row->image_src }}');" class="pt-3 pb-5 d-flex align-items-end dark-overlay bg-cover">
    <div class="container overlay-content">
        <div class="d-flex justify-content-between align-items-start flex-column flex-lg-row align-items-lg-end">
            <div class="text-white mb-4 mb-lg-0">
                @foreach($row->cuisineCats as $cuisine_cat)
                <div class="badge badge-pill badge-transparent px-3 py-2 mb-4">{{ $cuisine_cat->title }}</div>
                @endforeach
                <h1 class="text-shadow verified">{{ $row->title }}</h1>
                <p><i class="fa-map-marker-alt fas mr-2"></i> {{ $row->full_address }}</p>
                <p class="mb-0 d-flex align-items-center">
                    @include('pub_theme::layouts.widgets.rating',['avg'=>$row->ratings_avg])
                    {{--
                        <i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-gray-200 mr-4"></i>
                    --}}
                    &nbsp;&nbsp;&nbsp;{{ $row->ratings_count }} Reviews
                </p>
            </div>
            <div class="calltoactions"><a href="#leaveReview" onclick="$('#leaveReview').collapse('show')" data-smooth-scroll class="btn btn-primary">Leave a Review</a></div>
        </div>
    </div>
</section>
