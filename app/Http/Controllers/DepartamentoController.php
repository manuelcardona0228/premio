<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getCiudades(Request $request, $id)
    {
        if($request->ajax())
        {
            $cities = Ciudad::ciudades($id);
            return response()->json($cities);
        }
    }

}
