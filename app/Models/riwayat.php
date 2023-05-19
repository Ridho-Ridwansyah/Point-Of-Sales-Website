<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    protected $table = "riwayats";
    protected $fillable = ['inv_number','kode_produk','nama_produk','harga','jumlah','tjumlah','total', 'all', 'bayar', 'kembali'];

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
}
