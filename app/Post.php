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
    public function functions()
    {
        return $this->hasMany('App\Functions');
    }
    public function language()
    {
        return $this->hasMany('App\Language');
    }
    public function framework()
    {
        return $this->hasMany('App\Frameworks');
    }
    public function usableLanguages()
    {
        return $this->belongsToMany('App\UsableLanguages', 'languages', 'post_id', 'language_id')
                        ->withTimestamps();
    }
    public function usableFrameworks()
    {
        return $this->belongsToMany('App\UsableFrameworks', 'frameworks', 'post_id', 'framework_id')
                        ->withTimestamps();
    }
}
