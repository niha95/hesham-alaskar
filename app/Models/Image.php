<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded=[];
    /**
     * Get the owning imageable model.
     */
    public function imageable()
    {
        return $this->morphTo();
    }
    public function getPathAttribute()
    {
        return asset('storage/'.$this->url);
    }

//    public function getFullNameAttribute()
//    {
//        return "{$this->first_name} {$this->last_name}";
//    }




}
