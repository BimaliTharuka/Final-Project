<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::all();
        return view('admin.notice', compact('notices'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'to' => 'required',
            'from' => 'required',
            'through' => 'required',
            'subject' => 'required',
            'content' => 'required',
        ]);

        Notice::create([
            'title' => $request->title,
            'to' => $request->to,
            'from' => $request->from,
            'through' => $request->through,
            'subject' => $request->subject,
            'content' => $request->content,
            'date' => now(),
        ]);

        return redirect()->route('admin.notice');
    }

    
}
