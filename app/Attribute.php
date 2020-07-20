<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $guarded = ['id'];
    public function medicalCheck()
    {
        return $this->hasMany('App\Comment');
    }
}
