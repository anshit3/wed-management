<?php

namespace wedman;


use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    public function orders()
    {
        return $this->hasMany('wedman\Orders');
    }
}
