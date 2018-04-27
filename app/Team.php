<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable = [
        'description'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}