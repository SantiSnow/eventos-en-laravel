<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Contactanos! - Eventos y organizacion MI</title>

    <style>
        .card{
            padding: 15px;
        }
    </style>
</head>
<body>
    @extends("layouts.template")
    @section("contenido")
    <h4>Contactanos:</h4>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <h5 class="card-title">Vía correo electronico</h5>

                <p class="card-text">Envianos un correo electronico y te responderemos a la brevedad</p>
                <a href="mailto:eventosyprotocolo.mi@gmail.com?Subject=Contacto%20Desde%20El%20Sitio%20Web-Consulta" class="btn btn-light">Enviar Correo</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <h5 class="card-title">Instagram</h5>

                <p class="card-text">Por mensaje privado de Instagram, para obtener una respuesta rápida</p>
                <a href="https://www.instagram.com/eventosyprotocolo_mi/" class="btn btn-light">Instagram</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <h5 class="card-title">Facebook</h5>

                <p class="card-text">O por Facebook para enviarnos un mensaje o comentario.</p>
                <a href="https://www.facebook.com/Eventos-y-Protocolo-MI-107526524382764" class="btn btn-light">Facebook</a>
            </div>
        </div>
    </div>

    @endsection
</body>
</html>