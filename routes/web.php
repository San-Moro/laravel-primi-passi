<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $pageTitle = "Home";
    $description = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, illum optio cumque saepe officia quasi laboriosam nostrum pariatur deserunt ullam!";
    return view('home', compact("pageTitle", "description"));
})->name("home");

Route::get('/about', function () {
    $pageTitle = "About";
    $description = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, illum optio cumque saepe officia quasi laboriosam nostrum pariatur deserunt ullam!";
    return view('about', compact("pageTitle", "description"));
})->name("about");

Route::get('/services', function () {
    $pageTitle = "Services";
    $description = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, illum optio cumque saepe officia quasi laboriosam nostrum pariatur deserunt ullam!";
    return view('services', compact("pageTitle", "description"));
})->name("services");

Route::get('/contacts', function () {
    $pageTitle = "Contacts";
    $description = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, illum optio cumque saepe officia quasi laboriosam nostrum pariatur deserunt ullam!";
    return view('contacts', compact("pageTitle", "description"));
})->name("contacts");