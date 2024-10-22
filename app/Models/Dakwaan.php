<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dakwaan extends Model
{
    protected $fillable = ['nomor_putusan', 'tanggal_putusan', 'pasal_didakwakan', 'keputusan'];

    public function terdakwaks()
    {
        return $this->hasMany(Terdakwa::class);
    }

    public function barangBuktis()
    {
        return $this->hasMany(BarangBukti::class);
    }
}
