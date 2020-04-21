<?php

namespace Modules\Cart\Models;

use Illuminate\Database\Eloquent\Model;
/*
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\Image\Manipulations as ImageManipulations;
use Spatie\MediaLibrary\File;
*/
//---------- traits
use Modules\Xot\Traits\Updater;

abstract class BaseModel extends Model /*implements HasMedia*/
{
    use Updater;
    /*
    use HasMediaTrait; //spatie
    //use ImageManipulations; //spatie per usare sepia ed altri
    */
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'post_id', 'post_type', 'note'];
    protected $dates = ['created_at', 'updated_at'];
    public $incrementing = true;

    /*
    public function registerMediaConversions(Media $media = null)
    { //spatie

        $this->addMediaConversion('thumb')
              ->width(368)
              ->height(232)
              ->sharpen(10);

        $this->addMediaConversion('old-picture')
              ->sepia()
              ->border(10, 'black', Manipulations::BORDER_OVERLAY);
    }
    */
}
