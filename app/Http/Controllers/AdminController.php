<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function changepassword()
    {
        return view('admin.changepassword');
    }
    public function savepassword(Request $request)
    {
        $this->validate($request, [
            'password' => ['required', 'string', 'min:8'],
        ]);
        if ($request->password != $request->password_confirmation) {
            return redirect()->back()->with('error', 'Confirm password does not match.');
        }else {
            auth()->user()->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('message', 'Password is changed successfully.');
        }
    }
}
