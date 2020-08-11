<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class LetterSubmission extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
    public function official()
    {
        return $this->belongsTo('App\Official');
    }
}
