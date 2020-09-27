<?php

namespace App\Http\Controllers;

use App\Autocode;
use Illuminate\Http\Request;

class AutocodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $autos = Autocode::all();
        return view('admin.autocode.autocodes', compact('autos'));
    }
    public function edit(Autocode $code)
    {
        return view('admin.autocode.editautocode', compact('code'));
    }
    public function update(Request $request, Autocode $code)
    {
        $code->update($request->all());
        return redirect()->back()->with('message','Auto Code Generator is updated');
    }
}
