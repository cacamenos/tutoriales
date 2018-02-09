<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $fillable = [
    	'name',
    	'extension',
    	'size',
    	'post_id',
    ];

    public function posts()
    {
    	return $this->belongsTo('App\Post');
    }
}
