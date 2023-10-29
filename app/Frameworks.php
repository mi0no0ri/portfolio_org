<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frameworks extends Model
{
    protected $fillable = [
        'post_id',
        'framework_id',
    ];
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
    public function usableFramework()
    {
        return $this->belongsTo('App\UsableFrameworks', 'framework_id');
    }
}
