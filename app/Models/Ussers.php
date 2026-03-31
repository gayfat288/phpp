<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ussers extends Model
{
    protected $table = 'posts';

    public $timestamps = false;

    public function city()
    {
        return $this->belongsTo('App\Cities', 'foreign_key');
    }
}
