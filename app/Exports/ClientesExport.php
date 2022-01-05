<?php

namespace App\Exports;

use App\Models\Cliente;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ClientesExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $cliente = Cliente::with('departamento_id', 'ciudad_id')->get();
        $cl = json_encode($cliente);
        $clientes = json_decode($cl);
        return view('excel.clientes', [
            'clientes' => $clientes
        ]);
    }

    public function title(): string
    {
        return 'clientes registrados';
    }
}
