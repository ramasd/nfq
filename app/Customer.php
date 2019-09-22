<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function specialist(){
        return $this->belongsTo('App\Specialist');
    }
}
