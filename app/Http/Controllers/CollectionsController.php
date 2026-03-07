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

        $average = collect([
            ['foo' => 10],
            ['foo' => 10],
            ['foo' => 20],
            ['foo' => 40]
        ])->avg('foo');

        $average = collect([1, 1, 2, 4])->avg();
        dd($average);
    }
}