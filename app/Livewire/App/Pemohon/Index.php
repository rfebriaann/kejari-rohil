<?php

namespace App\Livewire\App\Pemohon;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    #[Layout('layouts.dashboard')]

    public function render()
    {
        return view('livewire.app.pemohon.index');
    }
}
