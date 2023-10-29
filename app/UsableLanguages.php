<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsableLanguages extends Model
{
    protected $table = 'usableLanguages';

    protected $fillable = [
        'language',
    ];

    public function skills()
    {
        return $this->hasMany('App\Skills');
    }
    public function languages()
    {
        return $this->hasMany('App\Language');
    }
    public function lang_frames()
    {
        return $this->hasMany('App\Lang_Frame', 'language_id', 'id');
    }
    public function posts()
    {
        return $this->belongsToMany('App\Posts')
                        ->withPivot('languages')
                        ->withTimestamps();
    }
    public function usableFrameworks()
    {
        return $this->belongsToMany('App\UsableFrameworks', 'lang_frame', 'language_id', 'framework_id')
                        ->withTimestamps();
    }
}
