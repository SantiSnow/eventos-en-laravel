<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos - Eventos y organizacion MI</title>
</head>
<body>
    @extends("layouts.template")
    @section("contenido")
    <h3>Cursos pagos:</h3>
    <h6>En esta sección podrás encontrar información sobre los distintos cursos que ofrecemos</h6>
    <br />
    
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Curso de Organización de Eventos Integral</h5>
                    <p class="card-text">¡Aprende a organizar todo tipo de eventos paso a paso!</p>
                    <a href="{{ url('/info-cursos') }}" class="card-link">Enterate como...</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Curso de Ceremonial y Protocolo</h5>
                    <p class="card-text">Sumergite en esta hermosa profesión y capacitate para ejercer como ceremonialista</p>
                    <a href="{{ url('/info-cursos') }}" class="card-link">Enterate como...</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Curso de Wedding Planner</h5>
                    <p class="card-text">Cómo organizar bodas paso a paso, tendencias, costumbres y tipos de bodas</p>
                    <a href="{{ url('/info-cursos') }}" class="card-link">Enterate como...</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Curso de Organización de Eventos y Protocolo Empresarial</h5>
                    <p class="card-text">Aprende cómo llevar a cabo eventos empresariales y el protocolo aplicable al ámbito empresarial</p>
                    <a href="{{ url('/info-cursos') }}" class="card-link">Enterate como...</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Muy pronto...</h5>
                    <p class="card-text">¡Un nuevo curso por llegar!</p>
                </div>
            </div>
        </div>

    </div>

    <br />
    
    @endsection
</body>
</html>