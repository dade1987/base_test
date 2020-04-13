<!-- place item-->
<div data-marker-id="59c0c8e33b1527bfe2abaf92" class="col-xl-3 col-md-4 col-sm-6 mb-5">
    <div class="card-img-top overflow-hidden">
        <a href="{{ $restaurant->url }}">
            <img src="{{ $restaurant_panel->imgSrc(['width'=>255,'height'=>170]) }}" alt="{{ $restaurant->title }}" class="img-fluid"/>
        </a>
    </div>
    <div class="card h-100 border-0 shadow">
        <div class="card-body d-flex align-items-center">
            <div class="w-100">
                <h6 class="card-title">
                    <a href="{{ $restaurant->url }}" class="text-decoration-none text-dark">{{ $restaurant->title }}</a>
                    <span class="text-right">
                        <a data-title="modifica Ristorante"
                            href="{{ $restaurant_panel->editUrl() }}" class="btn btn-secondary mb-2" >
                        <i class="fa fa-edit" data-toggle="tooltip" title="modifica Ristorante"></i>
                    </a>
                        
                    </span>
                </h6>
                <p class="subtitle font-weight-normal text-sm mb-2">{{ $restaurant->subtitle }}</p>
                <div class="d-flex card-subtitle mb-3">
                    <p class="flex-grow-1 mb-0 text-muted text-sm">{{ $restaurant->full_address }}</p>
                    <p class="flex-shrink-1 mb-0 card-stars text-xs text-right">
                        @include('pub_theme::layouts.widgets.rating',['avg'=>$restaurant->ratings_avg])
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>  
  

