<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
class ApiController extends Controller
{
    public function allproducts(Product $product, ProductImage $images)
    {
        $products = $product->where('visibility', true)
                                ->addSelect(['image' => ProductImage::select('image')
                                ->whereColumn('product_id', 'products.id')
                                ->limit(1)])
                                ->orderBy('created_at', 'desc')
                                ->limit(10)
                                ->get();
        return $products;
    }
}
