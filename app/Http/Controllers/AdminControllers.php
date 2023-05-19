<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Produk;
use App\Models\riwayat;
use App\Models\transaksi;


class AdminControllers extends Controller
{
        
        public function home()
        {
            $produks = Produk::get();
            $riw = riwayat::get();

            if(Auth::check()){
                return view('home',['produks' => $produks, 'riw' => $riw]);
            }
      
            return redirect("login")->withSuccess('Opps! You do not have access');
        }
        

        

    }
