<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'posts';

    public $timestamps = false;
    
    public function profile()
    {
        return $this->hasOne('App\Profiles');
    }
}
