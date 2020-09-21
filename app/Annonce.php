<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');//une ad appartient a un seul user
    }
}
