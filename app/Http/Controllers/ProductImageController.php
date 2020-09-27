<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductImageRequest;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Product $product, ProductImage $image)
    {
        $data = $product->images;
        return view('admin.product.images')->with(['images'=>$data, 'product'=>$product]);
    }
    public function upload(ProductImageRequest $request, Product $product)
    {
        $imgname    = $request->image->getClientOriginalName();
        $div 		= explode('.', $imgname);
		$file_ext 	= strtolower(end($div));
        $name   = md5(date('Y-m-d m:h:s'));
        $imagename   = $product->productcode.'_'.$name.'.'.$file_ext;
        $request->image->storeAs('ProductImages', $imagename, 'public');
        $data=[
            'image' => 'storage/ProductImages/'.$imagename,
        ];
        $product->images()->create($data);
        return redirect()->back()->with('message','Image has been uploaded successfully');
    }
    public function delete(ProductImage $image)
    {
        $img = ltrim($image->image, 'storage');
        $img = '/public'.$img;
        Storage::delete($img);
        $image->delete();
        return redirect()->back()->with('message', 'Image is deleted successfully.');
    }
}
