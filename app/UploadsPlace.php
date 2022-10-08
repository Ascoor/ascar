<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadsPlace extends Model
{
    protected $fillable = ['place_id', 'filename'];

    public function place()
    {
        return $this->belongsTo('App\place');
    }
}