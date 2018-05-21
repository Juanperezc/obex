<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Activity extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function teams()
    {
        return $this->belongsTo('App\Team');
    }
}