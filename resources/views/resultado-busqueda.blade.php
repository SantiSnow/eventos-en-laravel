<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la busqueda - Eventos y organizacion MI</title>

    <style>

        .img-consj{
            width: 15%;
            margin: 5px;
            border-radius: 3px;
        }

        .consejo-media{
            margin: 10px;
        }
    </style>
    
</head>
<body>

    @extends("layouts.template")
    @section("contenido")

        @foreach($consejos as $i)
        <div class="col-md-12 consejo-media">
            <div class="media">
                <img src="../{{ $i->imagen }}" class="img-consj" alt="imagen invitaciones">
                <div class="media-body">
                    <h4>{{ $i->nombre }}</h4>
                    <p>{{ $i->descripcion }}</p>
                </div>
            </div>
        </div>
        <br />

        @endforeach

    @endsection

    
</body>
</html>