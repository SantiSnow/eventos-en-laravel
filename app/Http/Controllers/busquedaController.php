<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class busquedaController extends Controller
{
    //

    function buscarConsejo(Request $req){

        $contenido = $req->get('buscar');

        $consejos = DB::table('consejos')
            ->where('contenido', 'LIKE', '%'.$contenido.'%')
            ->orderBy('id', 'desc')
            ->get();

        return view('resultado-busqueda', compact('consejos'));
    }
}
