<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keputusan extends Model
{
    protected $table = 'keputusan';

    public function barangBukti()
    {
        return $this->belongsToMany(BarangBukti::class, 'barang_bukti_keputusan', 'keputusan_id', 'barang_bukti_id');
    }
}
