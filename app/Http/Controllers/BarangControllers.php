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

class BarangControllers extends Controller
{
    public function index(){

        $produks = Produk::get();

        if(Auth::check()){
            return view('barang',['produks' => $produks]);
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
        

    }

    public function detail($id){

        $produks = Produk::find($id);

        if(Auth::check()){
            return view('detail',compact('produks'));
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
        

    }

    public function tambah(Request $request){


		$this->validate($request, [
			'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'desc' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('gambar');

		$nama_gambar = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'gambar_produk';
		$file->move($tujuan_upload,$nama_gambar);

        //Random generate kode Produk

		Produk::create([
            'kode_produk' => $request->kode,
            'nama_produk' => $request->nama_barang,
            'harga' => $request->harga,
            'desc' => $request->desc,
            'stok' => $request->stok,
			'gambar' => $nama_gambar,
			'merk' => $request->merk,
            'warna' => $request->warna,
            'ukuran' => $request->ukuran,
            'seri' => $request->seri,
            'jenis' => $request->jenis,
		]);

        report::create([
            'kode_produk' => $request->kode,
            'nama_produk' => $request->nama_barang,
            'laporan' => $request->stok,
            'sisa' => $request->stok,
            'ket' => 1,
            'desc' => "Stok awal",
		]);

		return redirect('/barang');
	}

    public function edit(Request $request){

        Produk::where('id', $request->id)
        ->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'desc' => $request->desc,
			'merk' => $request->merk,
            'warna' => $request->warna,
            'ukuran' => $request->ukuran,
            'seri' => $request->seri,
            'jenis' => $request->jenis,
        ]);

        return redirect('/barang');
    }

    public function hapus(Request $request){

        report::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'laporan' => 0 - $request->stok,
            'sisa' => 0,
            'ket' => 0,
            'desc' => "Barang di Hapus",
		]);


        $produks = Produk::where('id',$request->id)->delete();

        return redirect('/barang');

    }

    public function stok(Request $request){

        $rsisa = $request->stok + $request->stok_baru;

        Produk::where('kode_produk', $request->kode_produk)
        ->update([
            'stok' => $request->stok + $request->stok_baru,
        ]);

        Checkout::where('kode_produk', $request->kode_produk)
        ->update([
            'sisa' => $rsisa,
        ]);

        report::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'laporan' => $request->stok_baru,
            'sisa' => $rsisa,
            'ket' => $request->status,
            'desc' => "Penambahan Stok",
		]);


        return redirect('/barang');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
            
		$produks = produk::where('nama_produk', 'LIKE', '%'.$cari.'%')->get();
 
    		// mengirim data pegawai ke view index
		return view('barang',['produks' => $produks]);
 
	}

}
