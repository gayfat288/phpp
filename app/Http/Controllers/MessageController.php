<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index() {
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view('messages.index', compact('messages'));
    }

    public function store(Request $request) {
        Message::create($request->all());
        return redirect()->back()->with('success', 'Сообщение добавлено');
    }

    public function delete($id) {
        Message::findOrFail($id)->delete();
        return back();
    }
}