<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function productline(){
        return $this->belongsTo('App\productline');
    }
}
