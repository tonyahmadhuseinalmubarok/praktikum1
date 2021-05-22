<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class praktikum extends Controller
{
    public function home (){
        return view ("home0132");
    }
    public function artikel(){
        return view("artikel0132");
    }
    public function cp(){
        return view("cpus0132");
    }
    
}
