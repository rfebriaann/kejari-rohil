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
    // Load the data with the selected fields and relations
    $dakwaans = Dakwaan::with(['barangBuktis', 'terdakwaks'])->get();

    // Prepare data for export
    $exportData = [];
    // $i = 1;
    // Loop through each record and gather related data
    foreach ($dakwaans as $i => $dakwaan) {
        // Get the common data for dakwaan (this will stay the same for all barang bukti)
        $commonData = [
            'No.' => $i+=1,
            'nama_terdakwa' => $dakwaan->terdakwaks->pluck('nama')->implode(', '), // Nama Terdakwa
            'barang_bukti' => '', // Tempat untuk barang bukti
            'jumlah_barang_bukti' => '', // Tempat untuk jumlah barang bukti
            'nomor_putusan' => $dakwaan->nomor_putusan,
            'tanggal_putusan' => $dakwaan->tanggal_putusan,
            'pasal_didakwakan' => $dakwaan->pasal_didakwakan,
            'amar_barang_bukti' => $dakwaan->amar_barang_bukti,
            'nomor_register_barang_bukti' => $dakwaan->nomor_register_barang_bukti,
            'p48' => $dakwaan->p48,
            'status' => $dakwaan->status,
        ];

        // Loop through each barang bukti and add it as a new row with dakwaan data
        foreach ($dakwaan->barangBuktis as $index => $barangBukti) {
            // Copy the common data for dakwaan, but add barang bukti details
            $data = $commonData; // Copy the common data for dakwaan
            $data['barang_bukti'] = $barangBukti->barang_bukti;
            $data['jumlah_barang_bukti'] = $barangBukti->jumlah;

            // If this is not the first barang bukti, set dakwaan's data for the next row to null
            // so it doesn't repeat in every row.
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

            // Add the row to the export array
            $exportData[] = $data;
        }
    }

    // Create a new Excel export on the fly with custom headers
    return Excel::download(new class($exportData) implements FromArray, WithHeadings, WithStyles {
        private $exportData;

        public function __construct(array $exportData)
        {
            $this->exportData = $exportData;
        }

        public function styles($sheet)
        {
            // Bold the first row (headings)
            $sheet->getStyle('A1:J1')->getFont()->setBold(true);

            // Set horizontal alignment to center for the headings
            $sheet->getStyle('A1:J1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            // Adjust column width (set minimum width for each column)
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
