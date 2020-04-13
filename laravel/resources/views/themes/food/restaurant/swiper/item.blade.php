<!-- venue item-->
<div data-marker-id="59c0c8e33b1527bfe2abaf92" class="col-sm-6 mb-5 hover-animate">
    <div class="card h-100 border-0 shadow">
      <div style="background-image: url({{ Panel::get($row)->imgSrc(['width'=>450,'height'=>200]) }}); min-height: 200px;" class="card-img-top overflow-hidden dark-overlay bg-cover">
        <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a href="detail.html" class="tile-link"></a>
        <div class="card-img-overlay-bottom z-index-20">
        <h4 class="text-white text-shadow">{{ $row->title }}</h4>
            @include('pub_theme::layouts.widgets.rating',['row'=>$row])
        </div>
        <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
          <div class="badge badge-secondary badge-pill px-3 py-2">{{ number_format($row->distance,2) }} Km</div>
          <a href="javascript: void();" class="card-fav-icon position-relative z-index-40">
            <svg class="svg-icon text-white">
              <use xlink:href="#heart-1"> </use>
            </svg></a>
        </div>
      </div>
      <div class="card-body">
      <p class="text-sm text-muted mb-3"> {{ $row->subtitle }}</p>
        {{--
            <p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt Damon</a></p>
            <p class="text-sm mb-0"><a href="#" class="mr-1">Restaurant,</a><a href="#" class="mr-1">Contemporary</a>
            </p>
            --}}
      </div>
    </div>
  </div>
