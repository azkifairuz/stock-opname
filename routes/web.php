<?php

use App\Http\Controllers\DasboardController;
use App\Http\Controllers\DevisiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MesinController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/ceklogin', [LoginController::class, 'cekLogin'])->name('ceklogin');

Route::middleware(['web', 'authentication'])->group(function () {
  // Route::get('/dasboard',[DasboardController::class,'index']);
  Route::get('/', [DasboardController::class, 'index'])->name('dasboard');
  Route::get('/produksi', [ProduksiController::class, 'index']);

  //devisi
  Route::get('/devisi', [DevisiController::class, 'index'])->name('devisi'); // tampil data
  Route::get('/add-devisi', [DevisiController::class, 'create'])->name('add-devisi'); //form untuk add
  Route::post('/add-devisi-action', [DevisiController::class, 'store'])->name('add-devisi-action'); //simpan add
  Route::get('/edit-devisi/{id}', [DevisiController::class, 'edit'])->name('edit-devisi'); //form untuk add
  Route::post('/edit-devisi-action/{id}', [DevisiController::class, 'update'])->name('edit-devisi-action'); //simpan edit
  Route::get('/del-devisi-action/{id}', [DevisiController::class, 'destroy'])->name('del-devisi-action'); // hapus

  //rak
  Route::get('/rak', [RakController::class, 'index'])->name('rak'); // tampil data
  Route::get('/add-rak', [RakController::class, 'create'])->name('add-rak'); //form untuk add
  Route::post('/add-rak-action', [RakController::class, 'store'])->name('add-rak-action'); //simpan add
  Route::get('/edit-rak/{id}', [RakController::class, 'edit'])->name('edit-rak'); //form untuk add
  Route::post('/edit-rak-action/{id}', [RakController::class, 'update'])->name('edit-rak-action'); //simpan edit
  Route::get('/del-rak-action/{id}', [RakController::class, 'destroy'])->name('del-rak-action'); // hapus

  //vendor
  Route::get('/vendor', [VendorController::class, 'index'])->name('vendor'); // tampil data
  Route::get('/add-vendor', [VendorController::class, 'create'])->name('add-vendor'); //form untuk add
  Route::post('/add-vendor-action', [VendorController::class, 'store'])->name('add-vendor-action'); //simpan add
  Route::get('/edit-vendor/{id}', [VendorController::class, 'edit'])->name('edit-vendor'); //form untuk add
  Route::post('/edit-vendor-action/{id}', [VendorController::class, 'update'])->name('edit-vendor-action'); //simpan edit
  Route::get('/del-vendor-action/{id}', [VendorController::class, 'destroy'])->name('del-vendor-action'); // hapus

  //mesin
  Route::get('/mesin', [MesinController::class, 'index'])->name('mesin'); // tampil data
  Route::get('/add-mesin', [MesinController::class, 'create'])->name('add-mesin'); //form untuk add
  Route::post('/add-mesin-action', [MesinController::class, 'store'])->name('add-mesin-action'); //simpan add
  Route::get('/edit-mesin/{id}', [MesinController::class, 'edit'])->name('edit-mesin'); //form untuk add
  Route::post('/edit-mesin-action/{id}', [MesinController::class, 'update'])->name('edit-mesin-action'); //simpan edit
  Route::get('/del-mesin-action/{id}', [MesinController::class, 'destroy'])->name('del-mesin-action'); // hapus

  //sparepart
  Route::get('/sparepart', [SparepartController::class, 'index'])->name('sparepart'); // tampil data
  Route::get('/add-sparepart', [SparepartController::class, 'create'])->name('add-sparepart'); //form untuk add
  Route::post('/add-sparepart-action', [SparepartController::class, 'store'])->name('add-sparepart-action'); //simpan add
  Route::get('/edit-sparepart/{id}', [SparepartController::class, 'edit'])->name('edit-sparepart'); //form untuk add
  Route::post('/edit-sparepart-action/{id}', [SparepartController::class, 'update'])->name('edit-sparepart-action'); //simpan edit
  Route::get('/del-sparepart-action/{id}', [SparepartController::class, 'destroy'])->name('del-sparepart-action'); // hapus
});