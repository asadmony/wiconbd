<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
    protected $fillable =['product_id', 'featurename', 'featurevalue'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
