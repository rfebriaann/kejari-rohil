<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dakwaan extends Model
{
    use HasFactory;

    // Izinkan atribut untuk mass assignment
    protected $fillable = [
        'nomor_putusan',
        'tanggal_putusan',
        'pasal_didakwakan',
        'keputusan',
    ];
    public function terdakwa()
    {
        return $this->belongsToMany(Terdakwa::class, 'dakwaan_terdakwa', 'nomor_putusan', 'terdakwa_id');
    }

    public function barangBukti()
    {
        return $this->hasMany(BarangBukti::class, 'nomor_putusan', 'nomor_putusan');
    }
}
