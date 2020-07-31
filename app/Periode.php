<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Periode extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function surveys()
    {
        return $this->hasMany('App\Survey');
    }
}
