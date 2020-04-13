<div id="accordion{{ $row->post_type }}" role="tablist">
    <div class="card border-0 shadow mb-3">
        <div id="headingOne" role="tab" class="card-header bg-primary-100 border-0 py-0">
            <a data-toggle="collapse" href="#{{ $row->post_type }}-{{ $row->post_id }}" aria-expanded="true" aria-controls="collapseOne" class="accordion-link collapsed">
                {{ $row->title }}
            </a>
        </div>
        <div id="{{ $row->post_type }}-{{ $row->post_id }}" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion{{ $row->post_type }}" class="collapse show">
            <div class="card-body py-5">
                <div class="row">

                        @foreach($row->ingredients as $ingredient)

                        @include('pub_theme::restaurant.cuisine.ingredient_cat.ingredient.item',
                        [
                            'row'=>$ingredient,
                            ]
                            )

                            @endforeach

                </div>
            </div>
        </div>
    </div>
</div>


