<?php

use App\Http\Controllers\DatosCuriososController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Datos Curiosos
    Route::get('/datos-curiosos', [DatosCuriososController::class, 'index'])->name('dashboard');
    Route::get('/datos-curiosos/{id}', [DatosCuriososController::class, 'show'])->name('datos-curiosos.show');

    // PDF
    Route::get('/datos-curiosos/{id}/pdf', [PDFController::class, 'downloadPdf'])->name('datos-curiosos.pdf');
});

require __DIR__.'/auth.php';
