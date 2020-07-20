<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Information extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
