<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function profile()
    {
        return $this->hasOne('App\Profiles');
    }
}
