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
use App\Models\Checkout;
use App\Models\Produk;
use App\Models\transaksi;
use App\Models\report;

use Haruncpi\LaravelIdGenerator\IdGenerator;

class CheckoutControllers extends Controller
{
    public function index(){

        $checkout = checkout::get();

        if(Auth::check()){
            return view('checkout',['checkouts' => $checkout]);

        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
        
    }

    public function tambah(Request $request){

        $jbaru = $request->jumlah + $request->tambah;

        checkout::where('kode_produk', $request->kode_produk)
        ->update([
            'jumlah' => $request->jumlah + $request->tambah,
            'total' => $jbaru * $request->harga,
            'sisa' => $request->sisa - $request->tambah,

        ]);

        Produk::where('kode_produk', $request->kode_produk)
        ->update([
            'stok' => $request->sisa - $request->tambah,
        ]);

        report::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'laporan' => 0 - $request->tambah,
            'sisa' => $request->sisa - $request->tambah,
            'ket' => $request->status,
            'desc' => "tambah Checkout",
		]);

        return redirect('pembelian/checkout');
    }

    public function kurang(Request $request){

        $kbaru = $request->jumlah - $request->kurang;

        checkout::where('kode_produk', $request->kode_produk)
        ->update([
            'jumlah' => $request->jumlah - $request->kurang,
            'total' => $kbaru * $request->harga,
            'sisa' => $request->sisa + $request->kurang,

        ]);

        Produk::where('kode_produk', $request->kode_produk)
        ->update([
            'stok' => $request->sisa + $request->kurang,
        ]);

        report::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'laporan' => $request->kurang,
            'sisa' => $request->sisa + $request->kurang,
            'ket' => $request->status,
            'desc' => "Kurang Checkout",
		]);

        return redirect('pembelian/checkout');
    }

    public function proses(Request $request){

        $number = IdGenerator::generate(['table' => 'transaksis', 'length' => 10, 'prefix' =>'INV-', 'field' => 'inv_number']);

        $kode = implode(',', $request->kode_produk);
        $gambar = implode(',', $request->gambar);
        $nama = implode(',', $request->nama_produk);
        $harga = implode(',', $request->harga);
        $jumlah = implode(',', $request->jumlah);
        $total = implode(',', $request->total);
        echo $kode;
        echo $nama;
        echo $gambar;
        echo $harga;
        echo $jumlah;
        echo $total;

		transaksi::create([
            'inv_number' => $number,
            'kode_produk' => $kode,
            'gambar' => $gambar,
            'nama_produk' => $nama,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'total' => $total,
            'all' => collect($request->total)->sum(),
            
            'status' => $request->status,
		]);

        checkout::truncate();

		return redirect('/transaksi');
	}

    public function hapus(Request $request){

        Produk::where('kode_produk', $request->kode_produk)
        ->update([
            'stok' => $request->jumlah + $request->sisa,
        ]);

        report::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'laporan' => $request->jumlah,
            'sisa' => $request->jumlah + $request->sisa,
            'ket' => 1,
            'desc' => "Checkout di batalkan",
		]);

        $checkouts = checkout::where('kode_produk',$request->kode_produk)->delete();

        return redirect('/barang');

    }
}
