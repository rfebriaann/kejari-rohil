<?php

namespace App\Livewire\App\Setting;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    use LivewireAlert;
    #[Layout('layouts.dashboard')]
    
    public $userId;
    public $name = '';
    public $email = '';
    public $old_password = '';
    public $new_password = '';
    public $new_password_confirmation = '';

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $this->userId,
            'old_password' => 'nullable|string',
            'new_password' => 'nullable|string|min:3|confirmed',
        ];
    }

    public function mount()
    {

        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        // $this->password = $user->password;
    }
    
    public function update()
    {
        $this->validate();

        $user = User::findOrFail($this->userId);
        // dd($this->old_password && Hash::check($this->old_password, $user->password));
        if (Hash::check($this->old_password, $user->password) == true) {
            $user->password = bcrypt($this->new_password);
            // return;
        } else {
            $this->addError('old_password', 'Password lama tidak sesuai.');
            // return;
        }

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->alert('success', 'Data berhasil di update', [
            'position' => 'center',
            'timer' => 1000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);

        return redirect()->route('app.surat.index');
    }


    public function render()
    {
        $tes = Auth::user()->id;
        return view('livewire.app.setting.edit', [
            'tes' => $tes
        ]);
    }
}
