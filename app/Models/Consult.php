<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    protected $fillable = ['sender_name','phone','email','question'];
    public $timestamps = true;
}
