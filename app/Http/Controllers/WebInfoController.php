<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\WebInfo;
use Illuminate\Http\Request;

class WebInfoController extends Controller
{
    public function maintenanceMode(WebInfo $webinfo)
    {
        $info = $webinfo->first();
        if ($info->maintenance == 1) {
            $info->update([
                'maintenance' => 0,
            ]);
            return redirect()->back()->with('message', 'Your website is now Live.');
        } else {
            $info->update([
                'maintenance' => 1,
            ]);
            return redirect()->back()->with('message', 'Your website is on maintenance mode.');
        }
    }
    public function index()
    {
        $webinfo = WebInfo::first();
        return view('admin.webinfo.index', compact('webinfo'));
    }
    public function edit(WebInfo $webinfo)
    {
        return view('admin.webinfo.editwebinfo', compact('webinfo'));
    }
    public function update(Request $request, WebInfo $webinfo)
    {
        $webinfo->update([
            'footerDesc'    => $request->footerDesc,
            'contactDesc'   => $request->contactDesc,
            'address'       => $request->address,
            'gmapiframe'    => $request->gmapiframe,
            'email'         => $request->email,
            'mobile'        => $request->mobile,
            'facebook'      => $request->facebook,
            'twitter'       => $request->twitter,
            'instagram'     => $request->instagram,
            'whatsapp'      => $request->whatsapp,
        ]);
        return redirect()->back()->with('message', 'Website Informations updated successfully!');
    }
}
