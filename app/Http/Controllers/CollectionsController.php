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
        collect([1, 2, 3])->all();

        //Метод avg или average
        $average = collect ([
            ['foo' => 10],
            ['foo' => 10],
            ['foo' => 20],
            ['foo' => 40],
        ])->avg('foo');

        $average = collect([1, 1, 2, 4])->avg();

        //Метод chunk
        $collection = collect([1, 2, 3, 4, 5, 6, 7]);

        $chunks = $collection->chunk(4);

        $chunks->all();

        //Метод chunkWhile
        $collection = collect(str_split('AABBCCCD'));

        $chunks = $collection->chunkWhile(function ($value, $key, $chunk) {
            return $value === $chunk->last();
        });

        $chunks->all();

        //Метод collapse
        $collection = collect ([
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
        ]);

        $collapsed = $collection->collapse();

        $collapsed->all();

        //Метод collect
        $collectionA = collect([1, 2, 3]);

        $collectionB = $collectionA->collect();

        $collectionB->all();

        //Метод combine
        $collection = collect (['name', 'age']);

        $combined = $collection->combine(['George', 29]);

        $combined->all();

        //Метод concat
        $collection = collect(['John Doe']);

        $concatenated = $collection->concat(['Jane Doe'])->concat(['name'=>'Johnny Doe']);

        $concatenated->all();

        //Метод contains
        $collection = collect([1, 2, 3, 4, 5]);

        $collection->contains(function ($value, $key) {
            return $value > 5;
        });
    }
}
