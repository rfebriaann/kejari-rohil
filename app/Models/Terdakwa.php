<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Terdakwa extends Model
{
    protected $table = 'terdakwa';

    public function dakwaan()
    {
        return $this->belongsToMany(Dakwaan::class, 'dakwaan_terdakwa', 'terdakwa_id', 'nomor_putusan');
    }
}
