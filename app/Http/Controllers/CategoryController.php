<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\NewCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $cats = Category::all();
        return view('admin.category.categories')->with(['cats'=>$cats]);
    }
    public function new()
    {
        return view('admin.category.newcategory');
    }
    public function add(NewCategoryRequest $request)
    {
        $imgname    = $request->catlogo->getClientOriginalName();
        $div 		= explode('.', $imgname);
		$file_ext 	= strtolower(end($div));
        $logoname   = str_replace(" ", "_", $request->catname);
        $logoname   = $logoname.'.'.$file_ext;
        $request->catlogo->storeAs('CategoryLogos', $logoname, 'public');
        $data = [
            'catname' => $request->catname,
            'catlogo' => 'storage/CategoryLogos/'.$logoname,
        ];
        Category::create($data);
        return redirect()->back()->with('message', 'Category created successfully');
    }
    public function edit(Category $cat)
    {
        return view('admin.category.editcategory', compact('cat'));
    }
    public function update(UpdateCategoryRequest $request, Category $cat)
    {
        $data = [
            'catname' => $request->catname
        ];
        if($request->catlogo){
            if ($cat->catlogo) {
                $image = ltrim($cat->catlogo, 'storage');
                $image = '/public'.$image;
                Storage::delete($image);
            }
            $imgname    = $request->catlogo->getClientOriginalName();
            $div 		= explode('.', $imgname);
			$file_ext 	= strtolower(end($div));
            $logoname   = str_replace(" ", "_", $request->catname);
            $logoname   = $logoname.'.'.$file_ext;
            $request->catlogo->storeAs('CategoryLogos', $logoname, 'public');
            $imglink = ['catlogo'=>'storage/CategoryLogos/'.$logoname];
            $data = array_merge($data,$imglink);
        }
        $cat->update($data);
        return redirect(route('admin.categories'))->with('message', 'Category Updated successfully');
    }
    public function delete(Category $cat)
    {
        if ($cat->catlogo) {
            $image = ltrim($cat->catlogo, 'storage');
            $image = '/public'.$image;
            Storage::delete($image);
        }
        $cat->delete();
        return redirect()->back()->with('message', 'Category is deleted successfully.');
    }
}
