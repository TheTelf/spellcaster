<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fighter extends Model
{
    public function battle()
    {
        $this->belongsTo('App\Battle');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
