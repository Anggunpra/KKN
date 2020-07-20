<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function information()
    {
        return $this->hasMany('App\Information', 'information_id', 'id');
    }
}
