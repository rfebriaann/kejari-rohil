<?php

namespace App\Livewire\Guest\Perkara;

use App\Models\Dakwaan;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    #[Layout('layouts.app')]

    public $search = ''; // Properti untuk pencarian
    public $perPage = 10; // Properti untuk mengatur jumlah data per halaman
    public $dateRange; // Rentang tanggal dalam format 'start_date - end_date'

    // public function updatingSearch()
    // {
    //     $this->resetPage(); // Reset halaman ke 1 setiap kali pencarian berubah
    // }

    // public function updatingPerPage()
    // {
    //     $this->resetPage(); // Reset halaman ke 1 setiap kali perPage berubah
    // }

    // public function updatingDateRange()
    // {
    //     $this->resetPage(); // Reset halaman saat dateRange berubah
    // }

    public function render()
    {
        $query = Dakwaan::with(['terdakwaks', 'barangBuktis'])
            ->whereHas('terdakwaks', function ($query) {
                $query->where('nama', 'LIKE', '%' . $this->search . '%');
            });
        // Filter berdasarkan rentang tanggal
        if ($this->dateRange) {
            [$startDate, $endDate] = explode(' - ', $this->dateRange);
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }
        $dakwaans = $query->paginate($this->perPage);
        return view('livewire.guest.perkara.index', [
            'dakwaans' => $dakwaans,
        ]);
    }
}
