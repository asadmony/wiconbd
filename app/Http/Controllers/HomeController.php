<?php

namespace App\Http\Controllers;

use App\Banner;
use App\ContactMessage;
use App\Slider;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Slider $slider, Banner $banner)
    {
        $sliders = $slider->latest()->get();
        $banners = $banner->latest()->get();
        return view('index', compact('sliders','banners'));
    }
    public function products(Product $product, Banner $banner)
    {
        $products = $product->latest()->paginate(24);
        $banners = $banner->latest()->get();
        return view('products', compact('products', 'banners'));
    }
    public function product(Product $product)
    {
        $relproducts = Product::where('category', $product->category)->latest()->limit(4)->get();
        return view('product-details', compact('product', 'relproducts'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function contactmsg(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        ContactMessage::create($data);
        return redirect()->back()->with('sucess', 'Your message is submitted!');
    }
    public function aboutUs()
    {
        return view('aboutus');
    }

}
