<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Panel\Auth;
use App\Livewire\Panel\Dashboard;
use App\Livewire\Panel\Posts;


Route::prefix('painel')->group(function () {
    Route::get('/', Auth::class);
    Route::get('/dashboard', Dashboard::class);
    Route::get('/materias', Posts::class);
});