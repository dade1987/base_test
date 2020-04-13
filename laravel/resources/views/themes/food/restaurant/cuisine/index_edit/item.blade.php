<div id="accordion" role="tablist">
    <div class="card border-0 shadow mb-3">
        <div id="headingOne" role="tab" class="card-header bg-primary-100 border-0 py-0">
            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="accordion-link collapsed">
                {{ $cuisine->title }}
            </a>
            <button type="button" data-title="modifica {{ $cuisine->title }}"
                data-href="{{ $cuisine_panel->editUrl() }}" data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalIframe">
				<i class="fa fa-edit" data-toggle="tooltip" title="modifica {{ $cuisine->title }}"></i>
            </button>


            <button type="button" data-title="aggiungi piatto a {{ $cuisine->title }}"
                data-href="{{ $cuisine_panel->relatedUrl(['related_name'=>'recipe','act'=>'create']) }}" data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalAjax">
                <i class="fa fa-plus"></i>
            </button>
            {{--
                <button type="button" data-title="aggiungi piatto a {{ $cuisine->title }}"
                    data-href="{{ $cuisine_panel->relatedUrl(['related_name'=>'recipe','act'=>'create']) }}" data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalIframe">
                    <i class="fa fa-plus"></i>Iframe
                </button>
            --}}

        </div>

        <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" class="collapse show">
            <div class="card-body py-5">
                <div class="row">
                    @foreach($cuisine->recipes as $recipe)
                        @php
                            $recipe_panel=Panel::get($recipe);
                            $recipe_panel->setParent($cuisine_panel);
                        @endphp

                        @include('pub_theme::restaurant.cuisine.recipe.index_edit.item',
                        [
                            'recipe'=>$recipe,
                            'recipe_panel'=>$recipe_panel
                            ]
                            )

                    @endforeach
                </div>
            </div>
            @include('pub_theme::restaurant.cuisine.ingredient_cat.index_edit')
        </div>
    </div>
</div>



