<?php

namespace App\Livewire\Guest\Perkara;

use App\Models\Dakwaan;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;


class Index extends Component 
{
    use WithPagination;

    #[Layout('layouts.app')]
    public $month = null;
    public $year = null;  
    public $search = ''; 
    public $perPage = 10;


    public function export()
    {
        // Terapkan filter yang sama seperti di `render`
        $dakwaans = Dakwaan::with(['barangBuktis', 'terdakwaks'])
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
                $query->whereMonth('tanggal_putusan', $this->month);
            })
            ->when($this->year, function ($query) {
                $query->whereYear('tanggal_putusan', $this->year);
            })
            ->get();
    
        $exportData = [];
    
        foreach ($dakwaans as $i => $dakwaan) {
            
            $commonData = [
                'No.' => $i + 1,
                'nama_terdakwa' => $dakwaan->terdakwaks->pluck('nama')->implode(', '), 
                'barang_bukti' => '', 
                'jumlah_barang_bukti' => '', 
                'nomor_putusan' => $dakwaan->nomor_putusan,
                'tanggal_putusan' => $dakwaan->tanggal_putusan,
                'pasal_didakwakan' => $dakwaan->pasal_didakwakan,
                'amar_barang_bukti' => $dakwaan->amar_barang_bukti,
                'nomor_register_barang_bukti' => $dakwaan->nomor_register_barang_bukti,
                'p48' => $dakwaan->p48,
                'status' => $dakwaan->status,
            ];
    
            foreach ($dakwaan->barangBuktis as $index => $barangBukti) {
                $data = $commonData;
                $data['barang_bukti'] = $barangBukti->barang_bukti;
                $data['jumlah_barang_bukti'] = $barangBukti->jumlah;
    
                if ($index > 0) {
                    $data['No.'] = null;
                    $data['nama_terdakwa'] = null;
                    $data['nomor_putusan'] = null;
                    $data['tanggal_putusan'] = null;
                    $data['pasal_didakwakan'] = null;
                    $data['amar_barang_bukti'] = null;
                    $data['nomor_register_barang_bukti'] = null;
                    $data['p48'] = null;
                    $data['status'] = null;
                }
    
                $exportData[] = $data;
            }
        }
    
        return Excel::download(new class($exportData) implements FromArray, WithHeadings, WithStyles {
            private $exportData;
    
            public function __construct(array $exportData)
            {
                $this->exportData = $exportData;
            }
    
            public function styles($sheet)
            {
                $sheet->getStyle('A1:J1')->getFont()->setBold(true);
                $sheet->getStyle('A1:J1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    
                foreach (range('A', 'J') as $column) {
                    $sheet->getColumnDimension($column)->setAutoSize(true);
                }
            }
    
            public function array(): array
            {
                return $this->exportData;
            }
    
            public function headings(): array
            {
                return [
                    'No.',
                    'Nama Terdakwa',
                    'Barang Bukti',
                    'Jumlah Barang Bukti',
                    'Nomor Putusan',
                    'Tanggal Putusan',
                    'Pasal Didakwakan',
                    'Amar Barang Bukti',
                    'Nomor Register Barang Bukti',
                    'P48',
                    'Status',
                ];
            }
        }, 'Daftar BB Kembali.xlsx');
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
                $query->whereMonth('tanggal_putusan', $this->month);
            })
            ->when($this->year, function ($query) {
                $query->whereYear('tanggal_putusan', $this->year);
            })
            ->paginate($this->perPage);

        return view('livewire.guest.perkara.index', [
            'dakwaans' => $dakwaans,
        ]);
    }
}
