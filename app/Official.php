<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Official extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function letter_submissions()
    {
        return $this->hasMany('App\LetterSubmission');
    }
}
