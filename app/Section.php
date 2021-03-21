<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['cover','name'];

    public function posts() {
        return $this->belongsToMany('App\Post');
    }
}
