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
use App\Models\transaksi;
use App\Models\riwayat;

class TransaksiControllers extends Controller
{
    public function index(){
        
        $transaksis = transaksi::orderBy('created_at', 'desc')->get();

        if(Auth::check()){
            return view('transaksi',['transaksis' => $transaksis]);

        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
       

    }

    public function bayar($id){
        
        $detail = transaksi::find($id);
        $kode = explode(",",$detail -> kode_produk);
        $gambar = explode(",",$detail -> gambar);
        $nama = explode(",",$detail -> nama_produk);
        $harga = explode(",",$detail -> harga);
        $jumlah = explode(",",$detail -> jumlah);
        $total = explode(",",$detail -> total);


        // return view('cek')->with(compact('newarray'));
        return view('bayar')->with(compact('detail', 'kode', 'gambar', 'nama', 'harga', 'jumlah', 'total'));

    }

    public function detail($id){

        $detail = transaksi::find($id);
        $kode = explode(",",$detail -> kode_produk);
        $nama = explode(",",$detail -> nama_produk);
        $harga = explode(",",$detail -> harga);
        $jumlah = explode(",",$detail -> jumlah);
        $total = explode(",",$detail -> total);


        // return view('cek')->with(compact('newarray'));
        return view('detailtrans')->with(compact('detail', 'kode', 'nama', 'harga', 'jumlah', 'total'));
    }

    public function proses(Request $request){

        $kode = implode(',', $request->kode);
        $nama = implode(',', $request->nama);
        $harga = implode(',', $request->harga);
        $jumlah = implode(',', $request->jumlah);
        $total = implode(',', $request->total);

		riwayat::create([
            'inv_number' => $request->inv_number,
            'kode_produk' => $kode,
            'nama_produk' => $nama,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'tjumlah' => collect($request->jumlah)->sum(),
            'total' => $total,
            'all' => $request->all,
            'bayar' => $request->bayar,
            'kembali' => $request->bayar - $request->all,
		]);

        transaksi::where('inv_number', $request->inv_number)
        ->update([
            'status' => $request->status,
            
        ]);

        $all = $request->all;
        $bayar = $request->bayar;
        $kembali = $request->bayar - $request->all;

        return view('konfirmasi')->with(compact('all', 'bayar', 'kembali'));;

    }

    public function hapus(Request $request){

        transaksi::where('inv_number',$request->inv_number)->delete();
        riwayat::where('inv_number',$request->inv_number)->delete();

        return redirect('/transaksi');

    }

}