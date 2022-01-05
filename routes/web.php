<?php

use App\Models\Ciudad;
use App\Models\Cliente;
use App\Models\Departamento;
use App\Exports\ClientesExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepartamentoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $departamentos = Departamento::select(['id', 'nombre'])->get();

    return view('welcome', compact('departamentos'));
});

Route::get('/departamento/{id}', [DepartamentoController::class, 'getCiudades']);

Route::get('/dashboard', function () {
    $cliente = Cliente::with('departamento_id', 'ciudad_id')->get();
    $cl = json_encode($cliente);
    $clientes = json_decode($cl);
    return view('dashboard', compact('clientes'));
})->middleware(['auth'])->name('dashboard');

Route::get('/excel', [ClienteController::class, 'exportClientes'])->middleware(['auth'])->name('excel.clientes');
Route::get('/ganador', [ClienteController::class, 'obtenerGanador'])->middleware(['auth'])->name('cliente.ganador');

Route::post('/registrar/cliente', [ClienteController::class, 'registrarCliente']);

require __DIR__.'/auth.php';
