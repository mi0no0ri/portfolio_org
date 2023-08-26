<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsableTools extends Model
{
    protected $table = 'usableTools';

    protected $fillable = [
        'tool',
    ];
    public function tools()
    {
        return $this->hasMany('App\Tools');
    }
}
