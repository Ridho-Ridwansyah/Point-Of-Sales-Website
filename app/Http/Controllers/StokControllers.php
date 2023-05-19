<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

use Illuminate\Http\Request;
use App\Models\report;

class StokControllers extends Controller
{
    public function index(){

        $report = report::orderBy('created_at', 'desc')->paginate(10);
        if(Auth::check()){
            return view('stok',['reports' => $report]);

        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
        

    }
}
