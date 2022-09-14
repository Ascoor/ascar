<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
  use SoftDeletes;
   protected $fillable = ['gnump','gnumh','gnumw','gnump1','gnump2','gnump3','gnump12'];
   protected $dates = ['deleted_at'];

public function user()
{
  return $this->belongsTo('App\User','gnump12');
}
}