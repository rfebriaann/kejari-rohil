<?php

namespace App\Exports;

use App\Models\Dakwaan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DakwaanExport implements FromView, WithHeadings
{
    protected $fields;

    public function __construct(array $fields)
    {
        $this->fields = $fields;
    }

    public function view(): View
    {
        dd($this->query()->get());
        return view('exports.dakwaans', [
            'dakwaans' => $this->query()->get(),
            'fields' => $this->fields,
        ]);
    }

    public function headings(): array
    {
        return array_merge($this->fields, ['Nama Terdakwa', 'Barang Bukti', 'Jumlah Barang Bukti']);
    }

    protected function query()
    {
        return Dakwaan::with(['terdakwaks', 'barangBuktis']);
    }
}

