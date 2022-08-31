<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PlaceFile extends Model
{
    
    protected $fillable = ['place_id', 'filename1'];
    public function item()
    {
    return $this->belongsTo('App\place');
    }
    }
    ?>