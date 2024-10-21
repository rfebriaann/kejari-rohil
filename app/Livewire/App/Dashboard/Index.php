<?php

namespace App\Livewire\App\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.dashboard')]
    
    public function render()
    {
        return view('livewire.app.dashboard.index');
    }
}
