<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
   protected $table = 'profile_users';
   protected $fillable = [
      'nickname', 'user_id', 'place', 'postion'

   ];
   public function user()
   {
      return $this->beLongsTo('App\User', 'user_id');
   }
}