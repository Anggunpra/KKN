<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MedicalCheckAttribute extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function attribute()
    {
        return $this->belongsTo('App\Attribute');
    }
}
