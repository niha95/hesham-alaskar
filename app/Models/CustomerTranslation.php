<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'feedback'];
}
