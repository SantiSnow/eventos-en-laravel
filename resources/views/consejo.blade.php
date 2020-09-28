<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $consejo->nombre }}</title>
</head>
<body>

    @extends("layouts.template")
    @section("contenido")

    <div class="row">
        <div class="col-md-12">

            <h3>{{ $consejo->nombre }}</h3>

            <br />
            <div>

                {!! $consejo->contenido !!}

            </div>

        </div>
    </div>

    @endsection
    
</body>
</html>