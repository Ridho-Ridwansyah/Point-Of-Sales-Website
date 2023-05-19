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
use App\Models\riwayat;
use App\Models\transaksi;
class RiwayatControllers extends Controller
{
    public function index(){

        $riwayats = riwayat::orderBy('created_at', 'desc')->get();

        if(Auth::check()){
            return view('riwayat',['riwayats' => $riwayats]);

        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
        

    }

    public function detail($id){

        $detail = riwayat::find($id);
        $kode = explode(",",$detail -> kode_produk);
        $nama = explode(",",$detail -> nama_produk);
        $harga = explode(",",$detail -> harga);
        $jumlah = explode(",",$detail -> jumlah);
        $total = explode(",",$detail -> total);


        // return view('cek')->with(compact('newarray'));
        return view('detailriwayat')->with(compact('detail', 'kode', 'nama', 'harga', 'jumlah', 'total'));

    }
}
