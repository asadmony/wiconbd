<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\ProductFeature;

class ProductFeatureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function new(Product $product)
    {
        return view('admin.product.newfeature')->with(['product'=>$product]);
    }
    public function add(Request $request, Product $product)
    {
        $p = 0;
        for ($i=1; $i < $request->totinput+1 ; $i++) {
            $name = 'featurename-'.$i;
            $value = 'featurevalue-'.$i;
            $data =[
                'featurename' => $request[$name],
                'featurevalue' => $request[$value],
            ];
            if ($data['featurename'] != '' && $data['featurevalue'] != '') {
                $product->features()->create($data);
                $p++;
            }
        }
        return redirect()->back()->with('message',$p.' Features Added successfully.');
    }
    public function delete(ProductFeature $feature)
    {
        $feature->delete();
        return redirect()->back()->with('message', 'Feature is deleted successfully');
    }
}
