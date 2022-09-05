<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
  use SoftDeletes;
   protected $fillable = ['gnump','gnumh','gnumw','gnump1','gnump2','gnump3','gnump4','gnump5','gnump6','gnump7','gnump8','gnump9','gnump10','gnump11','photo1'];
   protected $dates = ['deleted_at'];

public function user()
{
  return $this->belongsTo('App\User','user_id');
}
}