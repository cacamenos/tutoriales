<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    protected $fillable = [
    	'text',
    	'pos',
    	'post_id'
    ];

    public function posts()
    {
    	return $this->belongsTo('App\Post');
    }
}
