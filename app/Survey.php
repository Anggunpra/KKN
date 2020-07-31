<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $guarded = ['id'];

    public function periode()
    {
        return $this->belongsTo('App\Periode');
    }
    public function attribute()
    {
        return $this->belongsTo('App\Attribute');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
