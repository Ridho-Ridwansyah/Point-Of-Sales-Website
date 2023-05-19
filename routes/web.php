<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\BarangControllers;
use App\Http\Controllers\PembelianControllers;
use App\Http\Controllers\CheckoutControllers;
use App\Http\Controllers\TransaksiControllers;
use App\Http\Controllers\RiwayatControllers;
use App\Http\Controllers\StokControllers;

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
    return redirect('/home');
});

// Login Controller
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//admin Controller
Route::get('/home', [AdminControllers::class, 'home']);

//Barang Controller
Route::get('/barang', [BarangControllers::class, 'index']);
Route::get('/barang/cari', [BarangControllers::class, 'cari']);
Route::post('/barang/tambah', [BarangControllers::class, 'tambah']);
Route::get('/barang/detail/{id}', [BarangControllers::class, 'detail']);
Route::post('/barang/edit/{id}', [BarangControllers::class, 'edit']);
Route::post('/barang/hapus/{id}', [BarangControllers::class, 'hapus']);
Route::post('/barang/stok/{kode_produk}', [BarangControllers::class, 'stok']);

//Pembelian controller
Route::get('/pembelian', [PembelianControllers::class, 'index']);
Route::get('/pembelian/cari', [PembelianControllers::class, 'cari']);
Route::post('/pembelian/proses/{id}', [PembelianControllers::class, 'proses']);

//checkout controller
Route::get('/pembelian/checkout', [CheckoutControllers::class, 'index']);
Route::post('/pembelian/checkout/tambah/{kode_produk}', [CheckoutControllers::class, 'tambah']);
Route::post('/pembelian/checkout/kurang/{kode_produk}', [CheckoutControllers::class, 'kurang']);
Route::post('/pembelian/checkout/hapus/{kode_produk}', [CheckoutControllers::class, 'hapus']);
Route::post('/pembelian/checkout/proses', [CheckoutControllers::class, 'proses']);

//Transaksi Controller
Route::get('/transaksi', [TransaksiControllers::class, 'index']);
Route::get('/transaksi/bayar/{id}', [TransaksiControllers::class, 'bayar']);
Route::get('/transaksi/detail/{id}', [TransaksiControllers::class, 'detail']);
Route::post('/transaksi/hapus/{inv_number}', [TransaksiControllers::class, 'hapus']);
Route::post('/transaksi/sukses', [TransaksiControllers::class, 'proses']);


//Riwayat Controller
Route::get('/riwayat', [RiwayatControllers::class, 'index']);
Route::get('/riwayat/detail/{id}', [RiwayatControllers::class, 'detail']);
Route::post('/riwayat/hapus/{inv_number}', [RiwayatControllers::class, 'hapus']);

//Stok Controller
Route::get('/stok', [StokControllers::class, 'index']);




