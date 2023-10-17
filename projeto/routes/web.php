<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AdocaoController,
    AnimalController,
    ClienteController,
    HistoricoAdocaoController,
    HistoricoAnimalController,
    HistoricoClienteController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/inicio', function () {
    return view('TelaInicial');
})->middleware(['auth', 'verified'])->name('inicio');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// CADASTRO
    Route::get('/cadastrar', function () {
        return view('indexCadastro');
    })->middleware(['auth', 'verified'])->name('cadastrar');

    Route::get('/cadastrar-pet', function () {
        return view('cadastroPet');
    })->middleware(['auth', 'verified'])->name('cadastrar-pet');

    Route::get('/cadastrar-pessoa', function () {
        return view('cadastroPessoa');
    })->middleware(['auth', 'verified'])->name('cadastrar-pessoa');
// CADASTRO

// EDITAR
    Route::get('/editar', function () {
        return view('indexEditar');
    })->middleware(['auth', 'verified'])->name('editar');

    Route::get('/editar-pet', function () {
        return view('editarPet');
    })->middleware(['auth', 'verified'])->name('editar-pet');

    Route::get('/editar-pessoa', function () {
        return view('editarPessoa');
    })->middleware(['auth', 'verified'])->name('editar-pessoa');
// EDITAR

// VISUALIZAR
    Route::get('/visualizar', function () {
        return view('indexVisualizar');
    })->middleware(['auth', 'verified'])->name('visualizar');

    Route::get('/visualizar-pet', function () {
        return view('visualizarPet');
    })->middleware(['auth', 'verified'])->name('visualizar-pet');

    Route::get('/visualizar-pessoa', function () {
        return view('visualizarPessoa');
    })->middleware(['auth', 'verified'])->name('visualizar-pessoa');
// VISUALIZAR

// EXCLUIR
    Route::get('/excluir', function () {
        return view('indexExcluir');
    })->middleware(['auth', 'verified'])->name('excluir');

    Route::get('/excluir-pet', function () {
        return view('excluirPet');
    })->middleware(['auth', 'verified'])->name('excluir-pet');

    Route::get('/excluir-pessoa', function () {
        return view('excluirPessoa');
    })->middleware(['auth', 'verified'])->name('excluir-pessoa');
// EXCLUIR

// SAIR
Route::get('/sair', function () {
    return view('auth/login');
})->middleware(['auth', 'verified'])->name('sair');
// SAIR



// PROFILE
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
// PROFILE

require __DIR__.'/auth.php';
