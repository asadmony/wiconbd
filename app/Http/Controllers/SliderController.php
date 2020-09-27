<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Http\Requests\NewSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.sliders')->with(['sliders' => $sliders]);
    }
    public function new()
    {
        return view('admin.slider.newslider');
    }
    public function add(NewSliderRequest $request)
    {
        $imgname    = $request->image->getClientOriginalName();
        $div        = explode('.', $imgname);
        $file_ext   = strtolower(end($div));
        $logoname   = str_replace(" ", "_", $request->title);
        $logoname   = $logoname . '.' . $file_ext;
        $request->image->storeAs('SliderImages', $logoname, 'public');
        $data = [
            'title'         => $request->title,
            'details'       => $request->details,
            'button'        => $request->button,
            'buttonname'    => $request->buttonname,
            'buttonlink'    => $request->buttonlink,
            'image'         => 'storage/SliderImages/' . $logoname,
        ];
        Slider::create($data);
        return redirect()->back()->with('message', 'Slider created successfully');
    }
    public function edit(Slider $slider)
    {
        return view('admin.slider.editslider', compact('slider'));
    }
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $data = [
            'title'         => $request->title,
            'details'       => $request->details,
            'button'        => $request->button,
            'buttonname'    => $request->buttonname,
            'buttonlink'    => $request->buttonlink
        ];
        if ($request->image) {
            if ($slider->image) {
                $image = ltrim($slider->image, 'storage');
                $image = '/public' . $image;
                Storage::delete($image);
            }
            $imgname        = $request->image->getClientOriginalName();
            $div            = explode('.', $imgname);
            $file_ext       = strtolower(end($div));
            $logoname       = str_replace(" ", "_", $request->catname);
            $logoname       = $logoname . '.' . $file_ext;
            $request->image->storeAs('SliderImages', $logoname, 'public');
            $imglink = ['image' => 'storage/SliderImages/' . $logoname];
            $data = array_merge($data, $imglink);
        }
        $slider->update($data);
        return redirect(route('admin.sliders'))->with('message', 'Slider Updated successfully');
    }
    public function buttonhide(Slider $slider)
    {
        $data = [
            'button' => 0,
        ];
        $slider->update($data);
        return 'hidden';
    }
    public function buttonshow(Slider $slider)
    {
        $data = [
            'button' => 1,
        ];
        $slider->update($data);
        return 'shown';
    }
    public function delete(Slider $slider)
    {
        if ($slider->image) {
            $image = ltrim($slider->image, 'storage');
            $image = '/public' . $image;
            Storage::delete($image);
        }
        $slider->delete();
        return redirect()->back()->with('message', 'Slider is deleted successfully.');
    }
}
