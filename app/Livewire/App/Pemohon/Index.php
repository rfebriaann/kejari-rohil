<?php

namespace App\Livewire\App\Pemohon;

use App\Models\DataPemohon;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    public $search = ''; 
    public $month = null;
    public $year = null;
    public $perPage = 10;
    #[Layout('layouts.dashboard')]

    public function render()
    {
        $pemohon = DataPemohon::with(['terdakwa'])
        ->where(function ($query) {
            $query->where('nama_pemohon', 'like', '%' . $this->search . '%')
                ->orWhereHas('terdakwa', function ($q) {
                    $q->where('nama', 'like', '%' . $this->search . '%');
                });
        })
        ->when($this->month, function ($query) {
            $query->whereMonth('tanggal_putusan', $this->month);
        })
        ->when($this->year, function ($query) {
            $query->whereYear('tanggal_putusan', $this->year);
        })
        ->orderBy('created_at', 'desc')
        ->paginate($this->perPage);

        return view('livewire.app.pemohon.index', [
            'pemohons' => $pemohon
        ]);
    }
}
