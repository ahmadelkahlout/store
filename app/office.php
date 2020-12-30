<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class office extends Model
{
    public function employee(){
     //   return $this->hasOne('App\employee');  one to one
    }
}
