<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PubController;

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
Route::get("/drinks",[PubController::class, "getDrinks"]);
Route::get("/name",[PubController::class, "getName"]);
Route::get("/insert",[PubController::class, "insertDrink"]);
Route::get("/modify",[PubController::class, "modifyDrink"]);
Route::get("/remove", [PubController::class, "removeDrink"]);