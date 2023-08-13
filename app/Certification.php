<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $dates = [
        'date',
        'created_at',
        'update_at,'
    ];

    protected $guarded = ['id'];
}
