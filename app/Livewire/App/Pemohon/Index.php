<?php

namespace App\Livewire\App\Pemohon;

use App\Models\Dakwaan;
use App\Models\DataPemohon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use LivewireAlert;
    use WithPagination;
    public $id;
    public $search = ''; 
    public $month = null;
    public $year = null;
    public $perPage = 10;
    #[Layout('layouts.dashboard')]


    public function confirm($id){
        // update dakwaan get data ke terdakwa
        dd($id);
        $dakwaan = Dakwaan::find($id);
        $dakwaan->update([
            'status_bb' => 1
        ]);

        $this->alert('success', 'Barang bukti berhasil di konfirmasi', [
            'position' => 'center',
            'timer' => 1000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);
        return redirect()->route('app.pemohon.index');
    }

    public function render()
    {
        $pemohon = DataPemohon::whereHas('terdakwa', function ($query) {
            $query->whereHas('dakwaan', function ($subQuery) {
                $subQuery->where('status_bb', 0);
            });
        })
        ->with(['terdakwa' => function ($query) {
            $query->whereHas('dakwaan', function ($subQuery) {
                $subQuery->where('status_bb', 0);
            });
        }])
        ->when($this->month, function ($query) {
            $query->whereMonth('tanggal_putusan', $this->month);
        })
        ->when($this->year, function ($query) {
            $query->whereYear('tanggal_putusan', $this->year);
        })
        ->orderBy('created_at', 'desc')
        ->paginate($this->perPage);
    
    

        return view('livewire.app.pemohon.index', [
            'pemohons' => $pemohon
        ]);
    }
}
