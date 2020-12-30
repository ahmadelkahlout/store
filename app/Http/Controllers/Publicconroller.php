<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Publicconroller extends Controller
{
    public function showindex(){
        return view('front.index');
    }

    public function showabout(){
        return view('front.about');
    }

    public function showcart(){
        return view('front.cart');
    }
    public function showcheckout(){
        return view('front.checkout');
    }
    public function showcontact(){
        return view('front.contact');
    }
    public function showshop(){
        return view('front.shop');
    }
    public function showsingle(){
        return view('front.single');
    }
}
