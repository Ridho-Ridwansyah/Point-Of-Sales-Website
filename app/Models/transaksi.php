<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = "transaksis";
    protected $fillable = ['inv_number','gambar','kode_produk','nama_produk','harga','jumlah','total', 'all', 'status'];

    public function setCategoryAttribute($value)
    {
        $this->attributes['kode_produk'] = json_encode($value);
        $this->attributes['nama_produk'] = json_encode($value);
        $this->attributes['gambar'] = json_encode($value);
        $this->attributes['harga'] = json_encode($value);
        $this->attributes['jumlah'] = json_encode($value);
        $this->attributes['total'] = json_encode($value);

    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['kode_produk'] = json_decode($value);
        return $this->attributes['nama_produk'] = json_decode($value);
        return $this->attributes['gambar'] = json_decode($value);
        return $this->attributes['harga'] = json_decode($value);
        return $this->attributes['jumlah'] = json_decode($value);
        return $this->attributes['total'] = json_decode($value);

    }

    use HasFactory;
}
