<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $table = "checkouts";
    protected $fillable = ['id_tumbal', 'kode_produk', 'nama_produk', 'jumlah', 'harga','total','sisa', 'gambar'];
}
