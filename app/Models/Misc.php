<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Misc extends Model implements TranslatableContract
{
    use Translatable;
    public $translatedAttributes =  ['sitename','about','site_word','vision','appointment_date'];
    protected $fillable = ['address','google_map','links','video','phone'];
    public $timestamps = false;
}
