<?php

use App\Http\Controllers\DasboardController;
use App\Http\Controllers\ProduksiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login',[DasboardController::class,'index']);
// Route::get('/dasboard',[DasboardController::class,'index']);
Route::get('/',[DasboardController::class,'index']);
Route::get('/produksi',[ProduksiController::class,'index']);