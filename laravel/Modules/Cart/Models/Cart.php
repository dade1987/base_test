<?php

namespace Modules\Cart\Models;

//--------- models --------
//--- services

//------ traits

class Cart extends BaseModel {
    //protected $primaryKey = 'post_id';
    public $incrementing = true;
    //protected $fillable = ['post_id'];

    //-------- relationship ------

    public function items() {
        return $this->hasMany(CartItem::class);
    }


    //---- funzione tampone ---
    public function getTotAttribute($value){
        $tot=0;
        foreach($this->items as $item){
            $tot+=$item->price*$item->qty;
        }
        return $tot;
    }
    /*
    public function ingredientCats() {
    return $this->morphRelated(IngredientCat::class);
    }
    */
}
