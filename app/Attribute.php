<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Attribute extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function medicals()
    {
        return $this->hasMany('App\MedicalCheckAttribute', 'medical_check_attribute_id', 'id');
    }

    public function surveys()
    {
        return $this->hasMany('App\Survey');
    }
}
