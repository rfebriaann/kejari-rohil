<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terdakwa extends Model
{
    protected $fillable = ['dakwaan_id', 'nama'];

    public function dakwaan()
    {
        return $this->belongsTo(Dakwaan::class);
    }
}
