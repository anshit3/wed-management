<?php

namespace wedman;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function user()
    {
        return $this->belongsTo('wedman\User');
    }
}
