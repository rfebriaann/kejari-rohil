<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangBukti extends Model
{
    protected $fillable = ['dakwaan_id', 'barang_bukti', 'keterangan_barang_bukti', 'nomor_register_barang_bukti', 'keputusan_barang_bukti'];

    public function dakwaan()
    {
        return $this->belongsTo(Dakwaan::class);
    }
}
