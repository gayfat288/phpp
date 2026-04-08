<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    public function categories() {
        $cats = ['Авто', 'Работа', 'Недвижимость'];
        return view('ads.categories', compact('cats'));
    }
    public function show($cat) {
        $ads = Ad::where('category', $cat)->latest()->get();
        return view('ads.show', compact('ads', 'cat'));
    }

    public function store(Request $request) {
        Ad::create($request->all());
        return back();
    }
}