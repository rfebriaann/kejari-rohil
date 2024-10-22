<?php

namespace App\Livewire\App\Surat;

use App\Models\Dakwaan;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.dashboard')]
    public $dakwaans;

    public function mount()
    {
        $this->dakwaans = Dakwaan::with(['terdakwaks', 'barangBuktis'])->get();
    }
    public function render()
    {
        return view('livewire.app.surat.index');
    }
}
