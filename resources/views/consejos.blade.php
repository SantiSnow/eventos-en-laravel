<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consejos - Eventos y Protocolo MI, el mejor sitio con consejos para organizadores de eventos y amantes del protocolo.</title>

    <style>

        .img-consj{
            width: 20%;
            border-radius: 3px;
            margin-right: 20px;
            
        }

        .consejo-media{
            margin: 10px;
        }

        .titulo-link{
            text-decoration: none;
            color: black;
        }

        .titulo-link:hover{
            text-decoration: none;
            color: black;
        }


    </style>
</head>
<body>
    @extends("layouts.template")
    @section("contenido")

    <div class="row">
        @foreach($consejos as $i)
        <div class="col-md-12 consejo-media">
            <div class="media">
                <img src="../{{ $i->imagen }}" class="img-consj" alt="imagen invitaciones">
                <div class="media-body">
                    <a class="titulo-link" href="consejo/{{ $i->id }}"><h4>{{ $i->nombre }}</h4></a>
                    <p>{{ $i->descripcion }}</p>
                    <a class="btn btn-outline-danger" href="consejo/{{ $i->id }}">Leer más...</a>
                </div>
            </div>
        </div>
        <br />
        @endforeach
    </div>

    @endsection
</body>
</html>
