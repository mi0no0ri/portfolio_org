<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'photo',
        'title',
        'description',
    ];
    public function postdetails()
    {
        return $this->hasMany('App\Postdetails');
    }
    public function language()
    {
        return $this->hasMany('App\Language');
    }
    public function functions()
    {
        return $this->hasMany('App\Functions');
    }
}
