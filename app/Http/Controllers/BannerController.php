<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Illuminate\Http\Request;
use App\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner.banners')->with(['banners' => $banners]);
    }
    public function new()
    {
        return view('admin.banner.newbanner');
    }
    public function add(NewBannerRequest $request)
    {
        $imgname    = $request->image->getClientOriginalName();
        $div        = explode('.', $imgname);
        $file_ext   = strtolower(end($div));
        $logoname   = md5($imgname).rand(1000,9999);
        $logoname   = $logoname . '.' . $file_ext;
        $request->image->storeAs('BannerImages', $logoname, 'public');
        $data = [
            'link'          => $request->link,
            'image'         => 'storage/BannerImages/'.$logoname,
        ];
        Banner::create($data);
        return redirect()->back()->with('message', 'Banner created successfully');
    }
    public function edit(Banner $banner)
    {
        return view('admin.banner.editbanner', compact('banner'));
    }
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $data = [
            'link'    => $request->link,
        ];
        if ($request->image) {
            if ($banner->image) {
                $image = ltrim($banner->image, 'storage');
                $image = '/public' . $image;
                Storage::delete($image);
            }
            $imgname        = $request->image->getClientOriginalName();
            $div            = explode('.', $imgname);
            $file_ext       = strtolower(end($div));
            $logoname       = md5($imgname) . rand(1000, 9999);
            $logoname       = $logoname . '.' . $file_ext;
            $request->image->storeAs('BannerImages', $logoname, 'public');
            $imglink = ['image' => 'storage/BannerImages/' . $logoname];
            $data = array_merge($data, $imglink);
        }
        $banner->update($data);
        return redirect(route('admin.banners'))->with('message', 'Banner Updated successfully');
    }
    public function delete(Banner $banner)
    {
        if ($banner->image) {
            $image = ltrim($banner->image, 'storage');
            $image = '/public' . $image;
            Storage::delete($image);
        }
        $banner->delete();
        return redirect()->back()->with('message', 'Banner is deleted successfully.');
    }
}
