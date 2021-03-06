<div class="col-sm-6 col-lg-4 mb-5 hover-animate">
    <div class="card h-60 border-0 shadow">
        <div class="card-body">
            <h5 class="card-title">{{ $recipe->title }}</h5>
            <p class="text-sm text-muted mb-3"> {{ $recipe->subtitle }}</p>
            {{-- $recipe_panel->relatedUrl(['related_name'=>'ingredient_cat','act'=>'index']) --}}
            <p class="flex-shrink-1 mb-0 card-stars text-xs text-right">
                <span class="h4 text-primary">€ {{ number_format($recipe->pivot->price,2) }}</span>
                {{-- per variazioni 
                    <button type="button" data-title="{{ $recipe->title }}" data-href="{{ $recipe_panel->relatedUrl(['related_name'=>'ingredient_cat','act'=>'index']) }}" data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalAjax">
                        <i class="fa fa-plus"></i>
                    </button>
                --}}
                    

                    <button type="button" data-title="modifica {{ $recipe->title }}" 
                        data-href="{{ $recipe_panel->editUrl() }}" data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalAjax">
                        <i class="fa fa-edit"></i>
                    </button>
                </p>
        </div>
    </div>
</div>
