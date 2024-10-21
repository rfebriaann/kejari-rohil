<?php

use Illuminate\Support\Facades\Route;

// guest
Route::get('/', App\Livewire\Guest\Homepage::class)->name('homepage');

// auth
Route::get('/entry', App\Livewire\Auth\Login::class)->name('entry');
Route::get('/logout', [App\Livewire\Auth\Logout::class, 'logout'])->name('logout');

// superadmin
Route::middleware('auth', 'role:Super Admin')->group(function() {
    Route::get('/dashboard', App\Livewire\App\Dashboard\Index::class)->name('app.dashboard.index');

    // surat
    Route::get('/surat', App\Livewire\App\Surat\Index::class)->name('app.surat.index');
    Route::get('/surat/tambahsurat', App\Livewire\App\Surat\Create::class)->name('app.surat.create');
});