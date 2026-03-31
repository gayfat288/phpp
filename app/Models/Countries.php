<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table = 'posts';

    public $timestamps = false;

    public function cities()
    {
        return $this->hasMany('App/Cities');
    }
}
