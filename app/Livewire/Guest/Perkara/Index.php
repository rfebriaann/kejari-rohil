<?php

namespace App\Livewire\Guest\Perkara;

use App\Exports\DakwaanExport;
use App\Models\Dakwaan;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;


class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public $month = null;
    public $year = null;  
    public $search = ''; 
    public $perPage = 10;

    public $selectedFields = [
        'nomor_putusan', 
        'tanggal_putusan', 
        'pasal_didakwakan', 
        'amar_barang_bukti', 
        'nomor_register_barang_bukti', 
        'p48', 
        'status'
    ];

    public function export()
    {
        // Load the data with the selected fields and relations
        $dakwaans = Dakwaan::with(['terdakwaks', 'barangBuktis'])
            ->get($this->selectedFields);

        // Generate the custom Excel file
        $exportData = [];
        foreach ($dakwaans as $dakwaan) {
            $row = [];
            foreach ($this->selectedFields as $field) {
                $row[Str::title(str_replace('_', ' ', $field))] = $dakwaan->$field;
            }

            // Include related data for terdakwaks and barangBuktis
            $row['Nama Terdakwa'] = $dakwaan->terdakwaks->pluck('nama')->join(', ');
            $row['Barang Bukti'] = $dakwaan->barangBuktis->pluck('barang_bukti')->join(', ');
            $row['Jumlah Barang Bukti'] = $dakwaan->barangBuktis->pluck('jumlah')->join(', ');

            $exportData[] = $row;

            dd($exportData);
        }

        // Create a new Excel export on the fly
        return Excel::download(new class($exportData) implements \Maatwebsite\Excel\Concerns\FromArray {
            private $exportData;

            public function __construct(array $exportData)
            {
                $this->exportData = $exportData;
            }

            public function array(): array
            {
                return $this->exportData;
            }
        }, 'dakwaans.xlsx');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingMonth()
    {
        $this->resetPage();
    }

    public function updatingYear()
    {
        $this->resetPage();
    }

    public function render()
    {
        $dakwaans = Dakwaan::with(['terdakwaks', 'barangBuktis'])
            ->where(function ($query) {
                $query->where('nomor_putusan', 'like', '%' . $this->search . '%')
                    ->orWhereHas('terdakwaks', function ($q) {
                        $q->where('nama', 'like', '%' . $this->search . '%');
                    })
                    ->orWhereHas('barangBuktis', function ($q) {
                        $q->where('barang_bukti', 'like', '%' . $this->search . '%');
                    });
            })
            ->when($this->month, function ($query) {
                $query->whereMonth('created_at', $this->month);
            })
            ->when($this->year, function ($query) {
                $query->whereYear('created_at', $this->year);
            })
            ->paginate($this->perPage);

        return view('livewire.guest.perkara.index', [
            'dakwaans' => $dakwaans,
        ]);
    }
}
