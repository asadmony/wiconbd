<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebInfo extends Model
{
    protected $fillable = ['maintenance', 'footerDesc', 'contactDesc', 'address', 'gmapiframe', 'email', 'mobile', 'facebook', 'twitter', 'instagram', 'whatsapp'];
}
