<?php

use Illuminate\Support\Facades\Route;
use App\Models\Consejo;

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

    $consejos = DB::table('consejos')
        ->orderBy('id','desc')
        ->get();

    return view('home', compact('consejos'));
});

Route::get('/consejos', function () {

    $consejos = DB::table('consejos')
        ->orderBy('id','desc')
        ->get();

    return view('consejos', compact('consejos'));
});

Route::get('/sobre-nosotros', function () {
    return view('sobre-nosotros');
});

Route::get('/cursos', function () {
    return view('cursos');
});


//cada consejo
Route::get('/consejo/{id}', function ($id) {

    $consejo = Consejo::find($id);

    return view('consejo', compact('consejo'));
});
