<div id="accordion" role="tablist">
    <div class="card border-0 shadow mb-3">
        <div id="headingOne" role="tab" class="card-header bg-primary-100 border-0 py-0">
            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="accordion-link collapsed">
                {{ $cuisine->title }}
            </a>
        </div>
        <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" class="collapse show">
            <div class="card-body py-5">
                <div class="row">
                    @foreach($cuisine->recipes as $recipe)
                        @php
                            $recipe_panel=Panel::get($recipe);
                            $recipe_panel->setParent($cuisine_panel);
                        @endphp

                        @include('pub_theme::restaurant.cuisine.recipe.item',
                        [
                            'recipe'=>$recipe,
                            'recipe_panel'=>$recipe_panel
                            ]
                            )

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

