<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteHomesController extends Controller
{
    //
    public function index(){
        return view("frontend.website.home.index");
    }
}
