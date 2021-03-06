<?php

use Illuminate\Support\Facades\Route;
use App\Models\Consejo;
use App\Http\Controllers\busquedaController;
use App\Http\Controllers\correoController;

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

//rutas de la navegacion
Route::get('/', function () {

    $consejos = Consejo::all()->take(6);

    return view('home', compact('consejos'));
});

Route::get('/consejos', function () {

    $consejos = Consejo::all();

    return view('consejos', compact('consejos'));
});

Route::get('/sobre-nosotros', function () {
    return view('sobre-nosotros');
});

Route::get('/cursos', function () {
    return view('cursos');
});

Route::get('/info-cursos', function () {
    return view('informacion');
});

//contacto
Route::get('/contacto', function () {
    return view('contacto');
});

//envio de correo
Route::get('/mail-enviado', [correoController::class, 'correoEnviado']);


//cada consejo
Route::get('/consejo/{id}', function ($id) {

    $consejo = Consejo::find($id);

    return view('consejo', compact('consejo'));
});

//busqueda de consejos
Route::post('/busqueda', [busquedaController::Class, 'buscarConsejo']);
