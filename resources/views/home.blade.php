<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Eventos y Protocolo MI, el mejor sitio con consejos para organizadores de eventos y amantes del protocolo.</title>
    <style>

        

    </style>
</head>
<body>
    @extends("layouts.template")
    @section("contenido")

    <div class="row">

        @foreach($consejos as $i)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="../{{ $i->imagen }}" class="card-img-top" alt="imagen descriptiva del tip">
                <div class="card-body">
                    <h5 class="card-title">{{ $i->nombre }}</h5>
                    <p class="card-text">{{ $i->descripcion }}</p>
                    <a href="consejo/{{ $i->id }}" class="btn btn-outline-danger">Leer más...</a>
                </div>
            </div>
        </div>


        @endforeach

    </div>

    @endsection
</body>
</html>
