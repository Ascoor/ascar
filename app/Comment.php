<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id', 'place_id', 'parent_id', 'desc'];
    protected $dates = ['deleted_at'];
    public function user()

    {
        return $this->belongsTo('App\User');
    }
    /**
     * Get all of the comments for the comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies()
    {
        return $this->hasMany('App\Comment', 'parent_id');
    }
}