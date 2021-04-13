<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table="barangs";
    protected $primaryKey = 'id_barang';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori_barang',
        'harga',
        'qty'
    ];
}