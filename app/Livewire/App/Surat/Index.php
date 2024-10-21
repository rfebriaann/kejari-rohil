<?php

namespace App\Livewire\App\Surat;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.dashboard')]
    public function render()
    {
        return view('livewire.app.surat.index');
    }
}
