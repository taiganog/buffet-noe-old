<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\{
                          PrincipalController,
                          FotosController,
                          ContatoController,
                          SobreNosController,
                          LoginController,
                          DashboardController
                         };
use Illuminate\Foundation\Application;
use \App\Http\Middleware\HandleInertiaRequests;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Route::middleware([\App\Http\Middleware\HandleInertiaRequests::class])->group(function () {
    Route::get('/', [PrincipalController::class, 'principal'])->name('principal');
    Route::get('/fotos', [FotosController::class, 'fotos'])->name('fotos');
    Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');
    Route::post('/contato', [ContatoController::class, 'salvar'])->name('contato.salvar');
//});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

