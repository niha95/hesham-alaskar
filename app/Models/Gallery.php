<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded=[];
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
