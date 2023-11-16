<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteRegistrationsController extends Controller
{
    //
    public function index(){
        return view("frontend.website.registrations.create");
    }
}
