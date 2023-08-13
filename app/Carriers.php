<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carriers extends Model
{
    protected $table = 'carrier';

    protected $fillable = [
        'carrier',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
