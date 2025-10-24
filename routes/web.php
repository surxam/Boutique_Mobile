<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoutiqueController;

Route::get('/', [BoutiqueController::class, 'index'])->name('boutique.index');
Route::get('/details/{id}', [BoutiqueController::class, 'show'])->name('boutique.show');
