<?php

namespace App\Http\Controllers;

use App\Autocode;
use Illuminate\Http\Request;
use Bitfumes\Multiauth\Model\Role;
use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Permission;
use App\product;
use App\category;
use App\Brand;
use App\Http\Requests\DiscountRequest;
use App\Http\Requests\NewProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Product $product)
    {
        $pros = $product->get();
        return view('admin.product.products')->with(['products'=>$pros]);
    }
    public function new()
    {
        $cats = Category::get('catname');
        $brands = Brand::get('brandname');
        return view('admin.product.newproduct')->with(['cats'=>$cats, 'brands'=>$brands]);
    }
    public function add(NewProductRequest $request, Product $product, Autocode $code)
    {
        $acode = $code->select('autocodekey', 'prefix', 'inc', 'suffix')->where('autocodekey','productcode')->get()->toArray();
        $procode = $acode[0]['prefix'].date("Y").$acode[0]['suffix'];
        $data = array_merge($request->all(), ['productcode' => $procode]);
        $product->create($data);
        $code->where('autocodekey', $acode[0]['autocodekey'])->update([
            'suffix' => $acode[0]['suffix']+$acode[0]['inc'],
        ]);
        return redirect()->back()->with('message', 'Product is added successfully');
    }
    public function edit(Product $product)
    {
        $cats = Category::get('catname');
        $brands = Brand::get('brandname');
        return view('admin.product.editproduct', compact('product','cats','brands'));
    }
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->all();
        if ($product->discount > 0) {
            $dis = $product->discount * $request->price / 100;
            $discountprice = $request->price - $dis;
            $data = array_merge($request->all(), ['discountprice' => $discountprice]);
        }
        $product->update($data);
        return redirect(route('admin.products'))->with('message', 'Product is Updated successfully');
    }
    public function available(Product $product)
    {
        if ($product->available) {
            $data =[
                'available' => 0
            ];
        }else {
            $data = [
                'available' => 1
            ];
        }
        $product->update($data);
        return $data['available'];
    }
    public function visibility(Product $product)
    {
        if ($product->visibility) {
            $data =[
                'visibility' => 0
            ];
        }else {
            $data = [
                'visibility' => 1
            ];
        }
        $product->update($data);
        return $data['visibility'];
    }
    public function delete(Product $product)
    {
        $images = $product->images;
        foreach ($images as $image) {
            $img = ltrim($image->image, 'storage');
            $img = '/public'.$img;
            Storage::delete($img);
        }
        $product->images()->delete();
        $product->features()->delete();
        $product->delete();
        return redirect()->back()->with('message', 'Product is deleted successfully.');
    }
    public function setdiscount(DiscountRequest $request, Product $product)
    {
        $data=[
            'discount' => $request->discount,
            'discountprice' => $request->discountprice,
        ];
        $product->update($data);
        return redirect()->back()->with('message', 'Product Discount is Set successfully.');
    }
    public function removediscount(Request $request, Product $product)
    {
        $data=[
            'discount' => 0,
            'discountprice' => null,
        ];
        $product->update($data);
        return redirect()->back()->with('message', 'Product Discount is Removed successfully.');
    }
}
