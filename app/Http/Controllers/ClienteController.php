<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Ganador;
use Illuminate\Http\Request;
use App\Exports\ClientesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    public function registrarCliente(ClienteRequest $request){
        $input = $request->except(['_token', 'habeas_data']);

        $request->input('habeas_data') === 'on' ? $habeas_data = 1 : $habeas_data = 0;

        $input['habeas_data'] = $habeas_data;

        $cliente = new Cliente();
        $cliente->fill($input);

        if($cliente->save()){
            return redirect('/')->with('success', '¡Felicidades! Te has registrado con exito.');
        }else{
            return redirect('/')->with('error', 'No te has registrado, revisa bien la información ingresada.');
        }
    }

    public function obtenerGanador(){
        $cant = Cliente::count();
        $clientes = Cliente::where('ganador', '!=', 1)->inRandomOrder()->limit(1)->first();//all()->random();

        if($cant > 5){
            $clientes->ganador = 1;
            $clientes->update();

            $ganador = new Ganador();
            $ganador->cliente_id = $clientes->id;
            $ganador->save();

            return redirect('/dashboard')->with('success', 'El ganador del premio es:'.' '.$clientes->nombre.' '.$clientes->apellido);
        }

        return redirect('/dashboard')->with('error', 'No se ha podido elegir un ganador');
    }

    public function exportClientes()
    {
       return Excel::download(new ClientesExport, 'clientes_registrados.xlsx');
    }
}
