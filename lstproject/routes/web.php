<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\InventoryDashboardsController;
Route::get('/dashboard', function () {
    return view('frontend.inventoryManagement.dashboards.index');
});



use App\Http\Controllers\WebsiteRegistrationsController;
Route::get('/registration', function () {
    return view('frontend.website.registrations.create');
});

Route::get('/registrations', function () {
    return view('frontend.website.registrations.index');
});


use App\Http\Controllers\WebsiteLoginsController;
Route::get('/login', function () {
    return view('frontend.website.login.create');
});


use App\Http\Controllers\WebsiteHomesController;
Route::get('/home', function () {
    return view('frontend.website.home.index');
});



use App\Http\Controllers\InventoryManagementProjectsController;
Route::get('/project', function () {
    return view('frontend.inventoryManagement.projects.index');
});


Route::get('/project', function () {
    return view('frontend.inventoryManagement.projects.create');
});