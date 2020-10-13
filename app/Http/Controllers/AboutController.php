<?php

namespace App\Http\Controllers;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.about.index', compact('about'));
    }
    public function edit(About $about)
    {
        return view('admin.about.editabout', compact('about'));
    }
    public function update(Request $request, About $about)
    {
        $about->update([
            'companyProfile'    => $request->companyProfile,
            'mission'           => $request->mission,
            'vision'            => $request->vision,
        ]);
        return redirect()->back()->with('message', 'Website Informations updated successfully!');
    }
}
