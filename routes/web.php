<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato',[\App\Http\Controllers\ContatoController::class, 'Contato'])->name('site.contato');
Route::post('/contato',[\App\Http\Controllers\ContatoController::class, 'Contato'])->name('site.contato');
Route::get('/login',[\App\Http\Controllers\ContatoController::class, 'Login'])->name('site.login');


Route::prefix('/app')->group( function(){
    Route::get('/clientes',[\App\Http\Controllers\ContatoController::class, 'Clientes'])->name('app.clientes');
    Route::get('/fornecedores',[\App\Http\Controllers\FornecedorController::class, 'Fornecedores'])->name('app.fornecedores');
    Route::get('/produtos',[\App\Http\Controllers\ContatoController::class, 'produtos'])->name('site.produtos');
});


Route::get('/teste/{p1}/{p2}',[\App\Http\Controllers\TesteController::class, 'Teste'])->name('site.teste');

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a>';
});