<div id="accordion">
  <div class="card">
    <div class="card-header" id="heading-1">
      <h5 class="mb-0">
        <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
          Variazioni Possibili
        </a>
        <button type="button" data-title="Aggiungi tipologia variazione"
            data-href="{{ $cuisine_panel->relatedUrl(['related_name'=>'ingredient_cat','act'=>'create']) }}"
            data-toggle="modal" class="btn btn-secondary mb-2"
            data-target="#myModalIframe">
            <i class="fa fa-plus" data-toggle="tooltip" title="Aggiungi tipologia variazione"></i>
        </button>

      </h5>
    </div>
    @foreach($cuisine->ingredientCats as $ingredient_cat)
    @php
        $ingredient_cat_panel=Panel::get($ingredient_cat)->setParent($cuisine_panel);
    @endphp
    <div id="accordion" role="tablist">
    <div class="card border-0 shadow mb-3">
        <div id="headingOne" role="tab" class="card-header bg-primary-100 border-0 py-0">
            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="accordion-link collapsed">
                {{ $ingredient_cat->title }}
            </a>
            <button type="button" data-title="modifica {{ $ingredient_cat->title }}"
                data-href="{{ $ingredient_cat_panel->editUrl() }}"
                data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalIframe">
				<i class="fa fa-edit" data-toggle="tooltip" title="modifica {{ $ingredient_cat->title }}"></i>
            </button>
            <button type="button" data-title="aggiungi variazione a  {{ $ingredient_cat->title }}"
                data-href="{{ $ingredient_cat_panel->relatedUrl(['related_name'=>'ingredient','act'=>'create']) }}"
                data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalIframe">
				<i class="fa fa-plus" data-toggle="tooltip" title="aggiungi variazione a {{ $ingredient_cat->title }}"></i>
            </button>

        </div>

        <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" class="collapse show">
            <div class="card-body py-5">


                <div class="row">
                    @foreach($ingredient_cat->ingredients as $ingredient)
                        @php
                            $ingredient_panel=Panel::get($ingredient)->setParent($ingredient_cat_panel);
                        @endphp

                        @include('pub_theme::restaurant.cuisine.ingredient_cat.ingredient.index_edit.item',
                        [
                            'ingredient'=>$ingredient,
                            'ingredient_panel'=>$ingredient_panel
                            ]
                            )

                    @endforeach
                </div>

            </div>

        </div>
    </div>
</div>




    @endforeach
  </div>
</div>
