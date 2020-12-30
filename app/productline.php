<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class productline extends Model
{
  /* protected $fillable =['Name','DescInHTML']; هذا لو كان عندك كبشة امور داخل الجدول وبدك تعمل جزاء منها اللي تعمل ادخال عليه وبتعمل في الخيار اللي تحت القوائم اللي بلدك تحميها وتمنع عنها التعديل
  */

    public function products(){
        return $this->belongsToMany('App\product');
    }
/*  use SoftDeletes;
   protected  $guarded =[];

   public function products(){
       return $this->hasMany('app\productline');
   }

    public function image(){
        return $this->morphOne('App\Image','imageable');
    }*/
}

