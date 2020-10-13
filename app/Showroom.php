<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    protected $fillable = ['title', 'name', 'address', 'phone'];
}
