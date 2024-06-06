<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\{
                          PrincipalController,
                          FotosController,
                          ContatoController,
                          SobreNosController,
                          LoginController,
                          DashboardController,
                          EquipeController,
                          EventosController,
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
    // Rotas Administrativas
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/eventos', [EventosController::class, 'index'])->name('eventos');
    Route::get('/equipe', [EquipeController::class, 'index'])->name('equipe');
    Route::post('/equipe', [EquipeController::class, 'create'])->name('equipe');


    // Rotas de Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
