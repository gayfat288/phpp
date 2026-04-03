<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $touches = ['post'];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
