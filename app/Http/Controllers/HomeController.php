<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //HUGO->Index
    public function index(){
        return view("home.index");
    }//index
}//HomeController
