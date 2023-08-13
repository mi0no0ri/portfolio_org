<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $fillable = [
        'language_id',
        'skill',
    ];
    public function usableLanguage()
    {
        return $this->belongsTo('App\UsableLanguages');
    }
}
