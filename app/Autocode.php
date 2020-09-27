<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autocode extends Model
{
    protected $fillable = ['autocodekey', 'prefix', 'inc', 'suffix'];
}
