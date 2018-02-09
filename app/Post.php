<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
    	'title',
    	'abstract',
    ];

    public function sections()
    {
    	return $this->hasMany('App\Section');
    }
    public function files()
    {
    	return $this->hasMany('App\File');
    }
    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }
}
