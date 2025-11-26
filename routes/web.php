<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DashboardController;

// Rotas Públicas --- GITHUB
Route::get('/', [PrincipalController::class, 'home'])->name('index');
Route::get('/sobre-nos', [SobreNosController::class, 'aboutUs'])->name('about');
Route::get('/contato', [ContatoController::class, 'contact'])->name('contact');
Route::post('/contato', [ContatoController::class, 'salvar'])->name('contact.salvar');

// Grupo de Rotas do Admin --- GITHUB
Route::middleware('auth')->group(function () {
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
});
// BREEZE MODIFICOU     



require __DIR__.'/auth.php';


