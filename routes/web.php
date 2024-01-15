<?php

use App\Http\Controllers\MainController;
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


//Route::get("saludo", [MainController::class, "index"]);

/*
Route::get("empezar", function (){
    return view("comienzo");
});
Route::view("empezar", "comienzo");
*/


Route::view("about", "about");

Route::view("alumnos", "alumnos");
Route::view("contacta", "contacta");
Route::view("proyectos", "proyectos");

Route::get('/', function () {
    return view('welcome');
});

