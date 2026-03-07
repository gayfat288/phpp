<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Lang;



class CollectionsController extends Controller
{
    public function collections() {
        Collection::macro('toUpper', function(){
            return $this->map(function ($value) {
                return Str::upper($value);
            });
        });

        //Метод all
        $all = collect([1, 2, 3])->all();
        dd($all);
    }
}