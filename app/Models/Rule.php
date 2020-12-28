<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Rule extends Model implements TranslatableContract
{
    use Translatable;
    protected $guarded = ['image'];
    public $translatedAttributes = ['name', 'description'];
    protected $fillable = [''];
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}

