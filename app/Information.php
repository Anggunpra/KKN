<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Information extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
    protected $append = ['summary'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function getSummaryAttribute()
    {
        $string = strip_tags($this->deskripsi);
        if (strlen($string) > 250) {

            // truncate string
            $stringCut = substr($string, 0, 250);
            $endPoint = strrpos($stringCut, ' ');

            //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $string .= '...';
        }
        return $string;
    }
}
