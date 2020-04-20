<?php

namespace Modules\Cart\Models;

//--------- models --------
//--- services

//------ traits

class CartItem extends BaseModel {
    //protected $primaryKey = 'post_id';
    public $incrementing = true;
    //protected $fillable = ['post_id'];

    //-------- relationship ------
    /*
public function recipes() {
return $this->morphRelated(Recipe::class);
}

public function ingredientCats() {
return $this->morphRelated(IngredientCat::class);
}
 */
}
