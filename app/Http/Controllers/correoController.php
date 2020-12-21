<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class correoController extends Controller
{

    public function correoEnviado(){

        return view('correo');
    }
}
