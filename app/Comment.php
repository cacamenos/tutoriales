<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
    	'text',
    	'parent',
    	'post_id',
    	'user_id',
    ];

    public function posts()
    {
    	return $this->belongsTo('App\Post');
    }

    public function users()
    {
    	return $this->belongsTo('App\User');
    }
}
