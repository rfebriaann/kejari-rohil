<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemohon extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pengambilan',
        'terdakwa_id',
        'nama_pemohon',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'agama',
        'status_perkawinan',
        'pekerjaan',
        'nomor_hp',
        'ktp_pemohon_path',
        'ktp_pemberi_kuasa_path',
        'dokumen_pendukung_path',
    ];

    public function terdakwa()
    {
        return $this->belongsTo(Terdakwa::class, 'terdakwa_id');
    }
}
