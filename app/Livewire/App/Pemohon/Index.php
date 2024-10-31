<?php

namespace App\Livewire\App\Pemohon;

use App\Models\DataPemohon;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    #[Layout('layouts.dashboard')]

    public function render()
    {
        $pemohon = DataPemohon::with(['terdakwa'])->get();
        return view('livewire.app.pemohon.index', [
            'pemohons' => $pemohon
        ]);
    }
}
