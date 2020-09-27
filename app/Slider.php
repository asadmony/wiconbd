<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['title', 'details', 'image', 'button', 'buttonname', 'buttonlink'];
}
