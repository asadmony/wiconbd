<?php

namespace App\Http\Controllers;

use App\Banner;
use App\ContactMessage;
use App\Slider;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function productsByCategory($cat, Product $product, Banner $banner)
    {
        $products = $product->where('category', $cat)->latest()->paginate(24);
        $banners = $banner->latest()->get();
        return view('products', compact('products', 'banners'));
    }
    public function product(Product $product, $slug)
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
            'mobile' => $request->mobile,
            'message' => $request->message,
        ];
        ContactMessage::create($data);
        return redirect()->back()->with('success', 'Your message is submitted!');
    }
    public function aboutUs()
    {
        return view('aboutus');
    }

}
