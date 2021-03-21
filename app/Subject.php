<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['cover', 'level','name'];
    public function posts() {
        return $this->belongsToMany('App\Post');
    }
}
