<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag'];


    public function place()
    {
        return $this->belongsToMany('App\Place');
    }
}
