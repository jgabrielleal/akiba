<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Panel\Login;
use App\Livewire\Panel\Dashboard;


Route::prefix('painel')->group(function () {
    Route::get('/', Login::class);
    Route::get('/dashboard', Dashboard::class);
});