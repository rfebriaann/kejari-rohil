<?php

namespace App\Livewire\App\Surat;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Dakwaan;
use App\Models\Terdakwa;
use App\Models\BarangBukti;

class Create extends Component
{
    #[Layout('layouts.dashboard')]

    // Properti untuk form input
    public $nomor_putusan;
    public $tanggal_putusan;
    public $pasal_didakwakan;
    
    public $terdakwaks;
    // public $terdakwaks = [];
    public $barang_buktis = [];
    
    public $nama_terdakwa;
    public $barang_bukti;
    public $jumlah;
    public $amar_barang_bukti;
    public $nomor_register_barang_bukti;
    public $p48;
    public $status;

    public function addTerdakwa()
    {
        $this->terdakwaks[] = ['nama' => $this->nama_terdakwa];
        $this->nama_terdakwa = '';
    }

    public function addBarangBukti()
    {
        $this->barang_buktis[] = [
            'barang_bukti' => $this->barang_bukti,
            'jumlah' => $this->jumlah,
        ];

        $this->barang_bukti = '';
        $this->jumlah = '';
    }

    public function submit()
    {
        // Validasi
        $this->validate([
            'nomor_putusan' => 'required|string',
            'tanggal_putusan' => 'required|date',
            'pasal_didakwakan' => 'required|string',
            'nama_terdakwa' => 'required|string',
            'barang_buktis' => 'required|array|min:1',
            'amar_barang_bukti' => 'required',
            'p48' => 'required',
            'status' => 'required',
        ]);

        // Simpan data dakwaan
        $dakwaan = Dakwaan::create([
            'nomor_putusan' => $this->nomor_putusan,
            'tanggal_putusan' => $this->tanggal_putusan,
            'pasal_didakwakan' => $this->pasal_didakwakan,
            'amar_barang_bukti' => $this->amar_barang_bukti,
            'nomor_register_barang_bukti' => $this->nomor_register_barang_bukti,
            'p48' => $this->p48,
            'status' => $this->status,
        ]);

        // Simpan data terdakwak
        $dakwaan->terdakwaks()->create(['nama' => $this->nama_terdakwa]);
        // foreach ($this->terdakwaks as $terdakwa) {
        //     $dakwaan->terdakwaks()->create($terdakwa);
        // }

        // Simpan data barang bukti
        foreach ($this->barang_buktis as $barang_bukti) {
            $dakwaan->barangBuktis()->create($barang_bukti);
        }

        // Reset form
        $this->reset();

        session()->flash('message', 'Data dakwaan berhasil disimpan.');
    }

    public function render()
    {
        return view('livewire.app.surat.create');
    }
}
