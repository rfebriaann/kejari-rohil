<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terdakwa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nomor_putusan',
    ];

    public function dakwaan()
    {
        return $this->belongsToMany(Dakwaan::class, 'dakwaan_terdakwa', 'terdakwa_id', 'nomor_putusan');
    }
}
