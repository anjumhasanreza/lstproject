<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteLoginsController extends Controller
{
    //
    public function index(){
        return view("frontend.website.login.create");
    }
}
