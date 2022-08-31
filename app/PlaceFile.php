<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PlaceFile extends Model
{
    protected $fillable = ['place_id', 'filename1'];
    public function place()
    {
    return $this->belongsTo('App\Place');
    }
    protected $dates = ['deleted_at'];
    }
    ?>