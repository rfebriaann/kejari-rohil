<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangBukti extends Model
{
    protected $fillable = ['dakwaan_id', 
    'barang_bukti', 
    'jumlah', 
    'lokasi'
];

    public function dakwaan()
    {
        return $this->belongsTo(Dakwaan::class);
    }
}
