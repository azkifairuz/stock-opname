<?php

use App\Http\Controllers\DasboardController;
use App\Http\Controllers\DetPembelianSparepartController;
use App\Http\Controllers\DevisiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MesinController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PembelianSparepartController;
use App\Http\Controllers\PeminjamanController;
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

  //pegawai
  Route::get('/pegawai',[PegawaiController::class,'index'])->name('pegawai'); // tampil data
  Route::get('/add-pegawai',[PegawaiController::class,'create'])->name('add-pegawai'); //form untuk add
  Route::post('/add-pegawai-action',[PegawaiController::class,'store'])->name('add-pegawai-action'); //simpan add
  Route::get('/edit-pegawai/{id}',[PegawaiController::class,'edit'])->name('edit-pegawai'); //form untuk add
  Route::post('/edit-pegawai-action/{id}',[PegawaiController::class,'update'])->name('edit-pegawai-action'); //simpan edit
  Route::get('/del-pegawai-action/{id}',[PegawaiController::class,'destroy'])->name('del-pegawai-action'); // hapus

  //mesin
  Route::get('/mesin', [MesinController::class, 'index'])->name('mesin'); // tampil data
  Route::get('/add-mesin', [MesinController::class, 'create'])->name('add-mesin'); //form untuk add
  Route::post('/add-mesin-action', [MesinController::class, 'store'])->name('add-mesin-action'); //simpan add
  Route::get('/edit-mesin/{id}', [MesinController::class, 'edit'])->name('edit-mesin'); //form untuk add
  Route::get('/show-mesin/{id}', [MesinController::class, 'show'])->name('show-mesin'); //form untuk add
  Route::post('/edit-mesin-action/{id}', [MesinController::class, 'update'])->name('edit-mesin-action'); //simpan edit
  Route::get('/del-mesin-action/{id}', [MesinController::class, 'destroy'])->name('del-mesin-action'); // hapus

  //sparepartMesin
  Route::post('/add-spmesin-action', [MesinController::class, 'addSpMesin'])->name('add-spmesin-action'); //simpan add

  //sparepart
  Route::get('/sparepart', [SparepartController::class, 'index'])->name('sparepart'); // tampil data
  Route::get('/add-sparepart', [SparepartController::class, 'create'])->name('add-sparepart'); //form untuk add
  Route::post('/add-sparepart-action', [SparepartController::class, 'store'])->name('add-sparepart-action'); //simpan add
  Route::get('/edit-sparepart/{id}', [SparepartController::class, 'edit'])->name('edit-sparepart'); //form untuk add
  Route::post('/edit-sparepart-action/{id}', [SparepartController::class, 'update'])->name('edit-sparepart-action'); //simpan edit
  Route::get('/del-sparepart-action/{id}', [SparepartController::class, 'destroy'])->name('del-sparepart-action'); // hapus
  
  //peminjaman
  Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman'); // tampil data
  Route::get('/add-peminjaman', [PeminjamanController::class, 'create'])->name('add-peminjaman'); //form untuk add
  Route::post('/add-peminjaman-action', [PeminjamanController::class, 'store'])->name('add-peminjaman-action'); //simpan add
  Route::get('/edit-peminjaman/{id}', [PeminjamanController::class, 'edit'])->name('edit-sparepart'); //form untuk add
  Route::post('/edit-peminjaman-action/{id}', [PeminjamanController::class, 'update'])->name('edit-peminjaman-action'); //simpan edit
  Route::get('/del-peminjaman-action/{id}', [PeminjamanController::class, 'destroy'])->name('del-peminjaman-action'); // hapus

  //pembelian
  Route::get('/pembeliansparepart', [PembelianSparepartController::class, 'index'])->name('pembeliansparepart'); // tampil data
  Route::get('/add-pembeliansparepart', [PembelianSparepartController::class, 'create'])->name('add-pembeliansparepart'); //form untuk add
  Route::post('/add-pembeliansparepart-action', [PembelianSparepartController::class, 'store'])->name('add-pembeliansparepart-action'); //simpan add
  Route::get('/edit-pembeliansparepart/{id}', [PembelianSparepartController::class, 'edit'])->name('edit-pembeliansparepart'); //form untuk add
  Route::post('/edit-pembeliansparepart-action/{id}', [PembelianSparepartController::class, 'update'])->name('edit-pembeliansparepart-action'); //simpan edit
  Route::get('/del-pembeliansparepart-action/{id}', [PembelianSparepartController::class, 'destroy'])->name('del-pembeliansparepart-action'); // hapus

  //pembelian
  Route::get('/detpembeliansparepart', [DetPembelianSparepartController::class, 'index'])->name('detpembeliansparepart'); // tampil data
  Route::get('/add-detpembeliansparepart', [DetPembelianSparepartController::class, 'create'])->name('add-detpembeliansparepart'); //form untuk add
  Route::post('/add-detpembeliansparepart-action', [DetPembelianSparepartController::class, 'store'])->name('add-detpembeliansparepart-action'); //simpan add
  Route::get('/edit-detpembeliansparepart/{id}', [DetPembelianSparepartController::class, 'edit'])->name('edit-detpembeliansparepart'); //form untuk add
  Route::post('/edit-detpembeliansparepart-action/{id}', [DetPembelianSparepartController::class, 'update'])->name('edit-detpembeliansparepart-action'); //simpan edit
  Route::get('/del-detpembeliansparepart-action/{id}', [DetPembelianSparepartController::class, 'destroy'])->name('del-detpembeliansparepart-action'); // hapus


});
