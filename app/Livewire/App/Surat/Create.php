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
    public $nomor_putusan, $tanggal_putusan, $pasal_didakwakan, $keputusan;
    public $nama_terdakwa = [];
    public $barang_bukti = [];
    public $keterangan_barang_bukti = [];
    public $nomor_register_barang_bukti;

    protected $rules = [
        'nomor_putusan' => 'required|string',
        'tanggal_putusan' => 'required|date',
        'pasal_didakwakan' => 'required|string',
        'keputusan' => 'required|string',
        'nama_terdakwa.*' => 'required|string',
        'barang_bukti.*' => 'required|string',
        'keterangan_barang_bukti.*' => 'nullable|string',
        'nomor_register_barang_bukti' => 'required|string',
    ];

    public function submit()
    {
        // dd($this->nama_terdakwa);
        $this->validate();

        DB::beginTransaction();

        try {
            // Simpan ke tabel dakwaan
            $dakwaan = Dakwaan::create([
                'nomor_putusan' => $this->nomor_putusan,
                'tanggal_putusan' => $this->tanggal_putusan,
                'pasal_didakwakan' => $this->pasal_didakwakan,
                'keputusan' => $this->keputusan,
            ]);

            // Simpan terdakwa
            foreach ($this->nama_terdakwa as $nama) {
                Terdakwa::create([
                    'nama' => $nama,
                    'nomor_putusan' => $dakwaan->nomor_putusan,
                ]);
            }

            // Simpan barang bukti
            foreach ($this->barang_bukti as $index => $barang) {
                BarangBukti::create([
                    'barang_bukti' => $barang,
                    'keterangan_barang_bukti' => $this->keterangan_barang_bukti[$index] ?? null,
                    'nomor_register_barang_bukti' => $this->nomor_register_barang_bukti,
                    'nomor_putusan' => $dakwaan->nomor_putusan,
                ]);
            }

            DB::commit();

            // Reset form setelah berhasil
            $this->resetForm();

            session()->flash('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    private function resetForm()
    {
        $this->nomor_putusan = '';
        $this->tanggal_putusan = '';
        $this->pasal_didakwakan = '';
        $this->keputusan = '';
        $this->nama_terdakwa = [];
        $this->barang_bukti = [];
        $this->keterangan_barang_bukti = [];
        $this->nomor_register_barang_bukti = '';
    }

    public function addTerdakwa()
    {
        $this->nama_terdakwa[] = '';
    }

    public function removeTerdakwa($index)
    {
        unset($this->nama_terdakwa[$index]);
        $this->nama_terdakwa = array_values($this->nama_terdakwa); // Reindex array
    }

    public function addBarangBukti()
    {
        $this->barang_bukti[] = '';
        $this->keterangan_barang_bukti[] = '';
    }

    public function removeBarangBukti($index)
    {
        unset($this->barang_bukti[$index]);
        unset($this->keterangan_barang_bukti[$index]);
        $this->barang_bukti = array_values($this->barang_bukti); // Reindex array
        $this->keterangan_barang_bukti = array_values($this->keterangan_barang_bukti);
    }

    public function render()
    {
        return view('livewire.app.surat.create');
    }
}
