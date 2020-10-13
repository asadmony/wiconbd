<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Showroom;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $showrooms = Showroom::all();
        return view('admin.showroom.index', compact('showrooms'));
    }
    public function new()
    {
        return view('admin.showroom.newshowroom');
    }
    public function add(Request $request)
    {
        $data = [
            'title'         => $request->title,
            'name'          => $request->name,
            'address'       => $request->address,
            'phone'         => $request->phone,
        ];
        Showroom::create($data);
        return redirect()->back()->with('message', 'Showroom created successfully');
    }
    public function edit(Showroom $showroom)
    {
        return view('admin.showroom.editshowroom', compact('showroom'));
    }
    public function update(Request $request, Showroom $showroom)
    {
        $data = [
            'title'         => $request->title,
            'name'          => $request->name,
            'address'       => $request->address,
            'phone'         => $request->phone,
        ];
        $showroom->update($data);
        return redirect(route('admin.showrooms'))->with('message', 'Showroom Updated successfully');
    }
    public function delete(Showroom $showroom)
    {
        $showroom->delete();
        return redirect()->back()->with('message', 'Showroom is deleted successfully.');
    }
}
