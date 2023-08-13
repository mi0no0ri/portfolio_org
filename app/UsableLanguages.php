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
}
