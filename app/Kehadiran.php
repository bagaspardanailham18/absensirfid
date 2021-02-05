<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    protected $table = "Kehadiran";
    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
