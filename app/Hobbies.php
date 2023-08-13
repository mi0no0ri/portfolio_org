<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    protected $fillable = [
        'hobby',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
