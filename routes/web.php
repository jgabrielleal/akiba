<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Panel\Login;


Route::prefix('painel')->group(function () {
    Route::get('/', Login::class);
});