<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryDashboardsController extends Controller
{
    //
    public function index(){
        return view("frontend.inventoryManagement.dashboards.index");
    }
}
