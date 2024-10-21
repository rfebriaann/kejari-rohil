<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasal extends Model
{
    protected $table = 'pasal';
    
    protected $fillable = ['pasal_didakwakan', 'nomor_putusan'];

    // Relasi dengan Dakwaan (Many-to-One)
    public function dakwaan()
    {
        return $this->belongsTo(Dakwaan::class, 'nomor_putusan', 'nomor_putusan');
    }
}
