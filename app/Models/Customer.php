<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Customer extends Model implements TranslatableContract
{
    use Translatable;
    protected $guarded = ['image'];
    public $translatedAttributes = ['name', 'feedback'];
    protected $fillable = ['top'];
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

}
