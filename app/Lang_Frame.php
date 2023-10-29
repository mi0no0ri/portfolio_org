<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lang_Frame extends Model
{
    protected $table = 'lang_frame';

    protected $fillable = [
        'language_id',
        'framework_id',
    ];

    public function usableLanguage()
    {
        return $this->belongsTo('App\UsableLanguages');
    }
    public function usableFramework()
    {
        return $this->belongsTo('App\UsableFrameworks', 'framework_id');
    }
}
