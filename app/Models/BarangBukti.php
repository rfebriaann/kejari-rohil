<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangBukti extends Model
{
    public function dakwaan()
    {
        return $this->belongsTo(Dakwaan::class, 'nomor_putusan', 'nomor_putusan');
    }

    public function keputusan()
    {
        return $this->belongsToMany(Keputusan::class, 'barang_bukti_keputusan', 'barang_bukti_id', 'keputusan_id');
    }
}
