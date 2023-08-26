<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tools extends Model
{
    protected $fillable = [
        'language_id',
        'skill',
    ];
    public function usableTool()
    {
        return $this->belongsTo('App\UsableTools');
    }
}
