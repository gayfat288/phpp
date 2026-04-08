<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    public function countries() {
        return view('countries', ['countries' => Country::all()]);
    }

    public function cities($country_id) {
        return view('cities', [
            'cities' => City::where('country_id', $country_id)->get()
        ]);
    }

    public function places($city_id) {
        return view('places', [
            'places' => Place::where('city_id', $city_id)->get()
        ]);
    }

    public function show($id) {
        return view('place', [
            'place' => Place::findOrFail($id)
        ]);
    }
}