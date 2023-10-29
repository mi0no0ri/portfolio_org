<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsableFrameworks extends Model
{
    protected $table = 'usableFrameworks';

    protected $fillable = [
        'framework',
    ];
    public function lang_frames()
    {
        return $this->hasMany('App\Lang_Frame');
    }
    public function usableLanguages()
    {
        return $this->belongsToMany('App\UsableLanguages', 'lang_frame', 'framework_id', 'language_id')
                        ->withTimestamps();
    }
    public function posts()
    {
        return $this->belongsToMany('App\Posts', 'frameworks', 'framework_id', 'post_id')
                        ->withTimestamps();
    }
}
