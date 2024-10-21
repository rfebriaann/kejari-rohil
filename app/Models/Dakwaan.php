<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dakwaan extends Model
{
    protected $table = 'dakwaan';
    protected $primaryKey = 'nomor_putusan';
    public $incrementing = false;
    protected $keyType = 'string';

    public function terdakwa()
    {
        return $this->belongsToMany(Terdakwa::class, 'dakwaan_terdakwa', 'nomor_putusan', 'terdakwa_id');
    }

    public function barangBukti()
    {
        return $this->hasMany(BarangBukti::class, 'nomor_putusan', 'nomor_putusan');
    }
}
