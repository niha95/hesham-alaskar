<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MiscTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['sitename','about','site_word','vision','appointment_date'];
}
