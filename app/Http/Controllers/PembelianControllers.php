<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Models\Produk;
use App\Models\Checkout;
use App\Models\report;

use Haruncpi\LaravelIdGenerator\IdGenerator;

class PembelianControllers extends Controller
{
    public function index(){

        $produks = Produk::get();
        $checkout = checkout::get();

        if(Auth::check()){
            return view('pembelian')->with(compact('produks', 'checkout'));;

        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
        

    }

    public function proses(Request $request){

        Checkout::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total' => $request->harga * $request->jumlah,
            'sisa' => $request->stok - $request->jumlah,
            'gambar' => $request->gambar,
        ]);

        Produk::where('id', $request->id)
        ->update([
            'stok' => $request->stok - $request->jumlah,
        ]);

        report::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'laporan' => 0 - $request->jumlah,
            'sisa' => $request->stok - $request->jumlah,
            'ket' => $request->status,
            'desc' => "Masuk Checkout",
		]);

        return redirect('/pembelian');

    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
            
		$produks = produk::where('nama_produk', 'LIKE', '%'.$cari.'%')->get();
        $checkout = checkout::get();
 
    		// mengirim data pegawai ke view index
            return view('pembelian')->with(compact('produks', 'checkout'));;
	}
}
