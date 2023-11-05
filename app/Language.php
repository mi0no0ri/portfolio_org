<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'post_id',
        'language_id',
    ];
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
    public function usableLanguage()
    {
        return $this->belongsTo('App\UsableLanguages', 'language_id');
    }
}
