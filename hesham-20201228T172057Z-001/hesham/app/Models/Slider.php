<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
class Slider extends Model
{
    use Translatable;
    protected $guarded = ['image'];
    public $translatedAttributes = ['title','description'];
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}
