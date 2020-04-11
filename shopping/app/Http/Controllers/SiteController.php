<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function shoe(){
        return view('pages.home',['data1'=>'images/shoes/item (1).jpg','data2'=>'images/shoes/item (2).jpg','data3'=>'images/shoes/item (3).jpg']);
    }

    public function cloth(){
        return view('pages.home',['data1'=>'images/shoes/item (6).jpg','data2'=>'images/shoes/item (7).jpg','data3'=>'images/shoes/item (8).jpg']);
    }

    public function spwear(){
        return view('pages.home',['data1'=>'images/shoes/item (3).jpg','data2'=>'images/shoes/item (4).jpg','data3'=>'images/shoes/item (5).jpg']);
    }
}
