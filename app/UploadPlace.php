<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadPlace extends Model
{
    protected $fillable = ['place_id', 'filename'];


    public function place()
    {
        return $this->hasOne('App\place');
    }
}