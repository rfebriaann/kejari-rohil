<?php

namespace App\Livewire\App\Surat;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Dakwaan;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Create extends Component
{
    use LivewireAlert;
    #[Layout('layouts.dashboard')]

    // Properti untuk form input
    public $nomor_putusan;
    public $tanggal_putusan;
    public $pasal_didakwakan;
    
    public $terdakwaks;
    // public $terdakwaks = [];
    public $barang_buktis = [];
    
    public $nama_terdakwa;
    public $amar_barang_bukti;
    public $nomor_register_barang_bukti;
    public $p48;
    public $status;

    public $barang_bukti;
    public $jumlah;
    public $lokasi;
    public $editingIndex = null;

    public function addTerdakwa()
    {
        $this->terdakwaks[] = ['nama' => $this->nama_terdakwa];
        $this->nama_terdakwa = '';
    }

    public function addBarangBukti()
    {
        if ($this->editingIndex === null) {
            $this->barang_buktis[] = [
                'barang_bukti' => $this->barang_bukti,
                'jumlah' => $this->jumlah,
                'lokasi' => $this->lokasi,
            ];
        } else {
            $this->updateBarangBukti($this->editingIndex);
        }

        $this->resetInput();
    }

    public function editBarangBukti($index)
    {
        $this->editingIndex = $index;
        $this->barang_bukti = $this->barang_buktis[$index]['barang_bukti'];
        $this->jumlah = $this->barang_buktis[$index]['jumlah'];
        $this->lokasi = $this->barang_buktis[$index]['lokasi'];
    }

    public function updateBarangBukti($index)
    {
        $this->barang_buktis[$index] = [
            'barang_bukti' => $this->barang_bukti,
            'jumlah' => $this->jumlah,
            'lokasi' => $this->lokasi,
        ];

        $this->editingIndex = null;
        $this->resetInput();
    }

    public function deleteBarangBukti($index)
    {
        unset($this->barang_buktis[$index]);
        $this->barang_buktis = array_values($this->barang_buktis); // Re-index array
    }

    private function resetInput()
    {
        $this->barang_bukti = '';
        $this->jumlah = '';
        $this->lokasi = '';
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

        // Simpan data barang bukti
        foreach ($this->barang_buktis as $barang_bukti) {
            $dakwaan->barangBuktis()->create($barang_bukti);
        }
        $this->alert('success', 'Data berhasil di submit', [
            'position' => 'center',
            'timer' => 1000,
            'toast' => true,
            'timerProgressBar' => true,
        ]); 
        // Reset form
        $this->reset();
    }

    public function render()
    {
        return view('livewire.app.surat.create');
    }
}
