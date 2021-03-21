<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'price', 'description', 'cover','user_id',
    ];
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function sections() {
        return $this->belongsToMany('App\Section');
    }
    public function subjects() {
        return $this->belongsToMany('App\Subject');
    }
}
