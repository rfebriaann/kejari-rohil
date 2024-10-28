<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Spatie\Permission\Traits\HasRoles;


class Login extends Component
{
    #[Layout('layouts.auth')] 

    #[Rule('required', 'email', message: 'Masukkan email')]
    public string $email = '';
    
    #[Rule('required', message: 'Masukkan password')]
    public string $password = '';

    public function login(){
        
        $this->validate();
        if (Auth::attempt(['email' => $this->email, 'password'=> $this->password])) {
            $users = Auth::user();
            // dd($users->roles);
            if($users->hasRole('Super Admin')){
                return redirect()->route('app.dashboard.index');
            } else{
                return redirect()->route('homepage');
            }
        } else {
            session()->flash('error', 'Alamat Email atau Password Anda salah!.');
            return redirect()->route('login');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
