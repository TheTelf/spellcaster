<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Battle extends Model
{
    public function fighters()
    {
        return $this->hasMany('App\Fighter');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
