<?php

namespace App\Livewire\App\Surat;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Dakwaan;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Edit extends Component
{
    use LivewireAlert;
    #[Layout('layouts.dashboard')]

    public $id;
    public $nomor_putusan;
    public $tanggal_putusan;
    public $pasal_didakwakan;
    public $terdakwaks = [];
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

    public function mount($id)
    {
        $this->id = $id;
        $this->loadDakwaan();
    }

    public function loadDakwaan()
    {
        $dakwaan = Dakwaan::with(['terdakwaks', 'barangBuktis'])->findOrFail($this->id);

        $this->nomor_putusan = $dakwaan->nomor_putusan;
        $this->tanggal_putusan = $dakwaan->tanggal_putusan;
        $this->pasal_didakwakan = $dakwaan->pasal_didakwakan;
        $this->amar_barang_bukti = $dakwaan->amar_barang_bukti;
        $this->nomor_register_barang_bukti = $dakwaan->nomor_register_barang_bukti;
        $this->p48 = $dakwaan->p48;
        $this->status = $dakwaan->status;

        $this->terdakwaks = $dakwaan->terdakwaks->toArray();
        $this->barang_buktis = $dakwaan->barangBuktis->toArray();
    }

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
        $this->barang_buktis = array_values($this->barang_buktis);
    }

    private function resetInput()
    {
        $this->barang_bukti = '';
        $this->jumlah = '';
        $this->lokasi = '';
    }

    public function update()
    {
        $this->validate([
            'nomor_putusan' => 'required|string',
            'tanggal_putusan' => 'required|date',
            'pasal_didakwakan' => 'required|string',
            'amar_barang_bukti' => 'required',
            'p48' => 'required',
            'status' => 'required',
        ]);

        $dakwaan = Dakwaan::findOrFail($this->id);

        $dakwaan->update([
            'nomor_putusan' => $this->nomor_putusan,
            'tanggal_putusan' => $this->tanggal_putusan,
            'pasal_didakwakan' => $this->pasal_didakwakan,
            'amar_barang_bukti' => $this->amar_barang_bukti,
            'nomor_register_barang_bukti' => $this->nomor_register_barang_bukti,
            'p48' => $this->p48,
            'status' => $this->status,
        ]);

        $dakwaan->terdakwaks()->delete();
        foreach ($this->terdakwaks as $terdakwa) {
            $dakwaan->terdakwaks()->create($terdakwa);
        }

        $dakwaan->barangBuktis()->delete();
        foreach ($this->barang_buktis as $barang_bukti) {
            $dakwaan->barangBuktis()->create($barang_bukti);
        }

        $this->alert('success', 'Data berhasil diupdate', [
            'position' => 'center',
            'timer' => 1000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);
        return redirect()->route('app.surat.index');
    }

    public function render()
    {
        return view('livewire.app.surat.edit');
    }
}
