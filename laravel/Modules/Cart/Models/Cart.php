<?php

namespace Modules\Cart\Models;

//--------- models --------
use Modules\LU\Models\User;

//--- services

//------ traits

class Cart extends BaseModel
{
    //protected $primaryKey = 'post_id';
    public $incrementing = true;
    //protected $fillable = ['post_id'];

    //-------- relationship ------

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }


    public function user()
    {
        return $this->hasOne(User::class, 'auth_user_id', 'auth_user_id');
    }
    public function profile()
    {
        $profile_class=config('xra.model.profile');
        return $this->hasOne($profile_class, 'auth_user_id', 'auth_user_id');
    }
    //------- mutators
    public function getTotAttribute($value)
    {
        $tot=0;
        foreach ($this->items as $item) {
            $tot+=$item->price*$item->qty;
        }
        return $tot;
    }
    
    public function getCustomerFullnameAttribute($value)
    {
        if (strlen($value)>4) {
            return $value;
        }
        $user=$this->user;
        if (!is_object($user)) {
            return 'Sconosciuto';
        }
        $fullname=$user->last_name.' '.$user->first_name;
        if (strlen($fullname)<4) {
            $fullname.=$user->handle;
        }
        $this->customer_fullname=$fullname;
        $this->save();
        return $fullname;
    }
    /*
        public function getCustomerAvatarAttribute($value){

        }
        */
    
    //---- funzione tampone ---
    /*
    public function ingredientCats() {
    return $this->morphRelated(IngredientCat::class);
    }
    */
}
