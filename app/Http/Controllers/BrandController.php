<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Requests\NewBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.brands')->with(['brands'=>$brands]);
    }
    public function new()
    {
        return view('admin.brand.newbrand');
    }
    public function add(NewBrandRequest $request, Brand $brand)
    {
        $imgname    = $request->brandlogo->getClientOriginalName();
        $div 		= explode('.', $imgname);
		$file_ext 	= strtolower(end($div));
        $logoname   = str_replace(" ", "_", $request->brandname);
        $logoname   = $logoname.'.'.$file_ext;
        $request->brandlogo->storeAs('BrandLogos', $logoname, 'public');
        $data = [
            'brandname' => $request->brandname,
            'brandlogo' => 'storage/BrandLogos/'.$logoname,
        ];
        $brand->create($data);
        return redirect()->back()->with('message', 'Brand created successfully');
    }
    public function edit(Brand $brand)
    {
        return view('admin.brand.editbrand', compact('brand'));
    }
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $data = [
            'brandname' => $request->brandname
        ];
        if($request->brandlogo){
            if ($brand->brandlogo) {
                $image = ltrim($brand->brandlogo, 'storage');
                $image = '/public'.$image;
                Storage::delete($image);
            }
            $imgname    = $request->brandlogo->getClientOriginalName();
            $div 		= explode('.', $imgname);
			$file_ext 	= strtolower(end($div));
            $logoname   = str_replace(" ", "_", $request->brandname);
            $logoname   = $logoname.'.'.$file_ext;
            $request->brandlogo->storeAs('BrandLogos', $logoname, 'public');
            $imglink = ['brandlogo'=>'storage/BrandLogos/'.$logoname];
            $data = array_merge($data,$imglink);
        }
        $brand->update($data);
        return redirect(route('admin.brands'))->with('message', 'Brand Updated successfully');
    }
    public function delete(Brand $brand)
    {
        if ($brand->brandlogo) {
            $image = ltrim($brand->brandlogo, 'storage');
            $image = '/public'.$image;
            Storage::delete($image);
        }
        $brand->delete();
        return redirect()->back()->with('message', 'Brand is deleted successfully.');
    }
}
