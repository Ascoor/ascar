<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    protected $fillable = ['tag'];


    public function places()
    {
        return $this->belongsToMany('App\Place');
    }
}
