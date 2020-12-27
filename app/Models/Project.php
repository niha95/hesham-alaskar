<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Project extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name', 'desc'];
    protected $fillable = ['url'];


    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function getUrlImageAttribute()
    {
        return asset('storage/'.$this->image->url);
    }
}
