<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactMessage;

class MessageController extends Controller
{
    public function index(ContactMessage $msg)
    {
        $messages = $msg->latest()->get();
        return view('admin.message.messages', compact('messages'));
    }
    public function delete(ContactMessage $msg)
    {
        $msg->delete();
        return redirect()->back()->with('success', 'Message is deleted successfully!');
    }
}
