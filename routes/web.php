<?php

use Illuminate\Support\Facades\Route;

// guest
Route::get('/', App\Livewire\Guest\Homepage::class)->name('homepage');
Route::get('/pemohon', App\Livewire\Guest\Pemohon\Index::class)->name('guest.pemohon.index');
Route::get('/dataperkara', App\Livewire\Guest\Perkara\Index::class)->name('guest.perkara.index');

// auth
Route::get('/entry', App\Livewire\Auth\Login::class)->name('login');
Route::get('/logout', [App\Livewire\Auth\Logout::class, 'logout'])->name('logout');

// superadmin
Route::middleware('auth', 'role:Super Admin')->group(function() {
    Route::get('/app/dashboard', App\Livewire\App\Dashboard\Index::class)->name('app.dashboard.index');

    // surat
    Route::get('/app/surat', App\Livewire\App\Surat\Index::class)->name('app.surat.index');
    Route::get('/app/surat/tambahsurat', App\Livewire\App\Surat\Create::class)->name('app.surat.create');

    // pemohon
    Route::get('/app/pemohon', App\Livewire\App\Pemohon\Index::class)->name('app.pemohon.index');

});