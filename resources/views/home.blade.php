<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Eventos y Protocolo MI</title>
</head>
<body>
    @extends("layouts.template")
    @section("contenido")

    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="consejos/invitaciones-1.png" class="card-img-top" alt="Invitaciones, imagen descriptiva">
                <div class="card-body">
                    <h5 class="card-title">Invitaciones</h5>
                    <p class="card-text">Protocolarmente hay dos tipos de invitaciones: las “personalizadas” (o notas) y las “masivas” (o tarjetas). Entra para aprender sobre ellas.</p>
                    <a href="consejos/invitaciones.html" class="btn btn-light">Leer más...</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="consejos/invitaciones-2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Información en las invitaciones</h5>
                    <p class="card-text">¿Cuál es la información que no puede faltar en una invitación? Si queres saber los datos relevantes para una invitación entra aquí.</p>
                    <a href="consejos/invitaciones-2.html" class="btn btn-light">Leer más...</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="consejos/tips-cliente-thumb.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tips para conocer al cliente</h5>
                    <p class="card-text">"La relación entre cliente/organizador debe ser directa y estrecha". Hace click aquí ara conocer información valiosa sobre los clientes.</p>
                    <a href="consejos/conocer-al-cliente.html" class="btn btn-light">Leer más...</a>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Más tips para conocer al cliente:</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Más consejos y secretos</h6>
                  <p class="card-text">La primera impresión es la que cuenta, la primer entrevista es primordial, y más consejos para organizadores.</p>
                  <a href="consejos/mas-tips-clientes.html" class="card-link">Leer más...</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Las Mesas</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Consejos y Secretos</h6>
                  <p class="card-text">Tanto la forma en la que disponemos los distintos elementos en la mesa, como la forma en la que utilizamos los cubiertos es muy importante.</p>
                  <a href="consejos/las-mesas.html" class="card-link">Leer más...</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">La precedencia</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Fundamental para organizadores: La Precedencia</h6>
                  <p class="card-text">Este tema será la base de nuestro trabajo como ceremonialistas. "La precedencia es reconocer la preeminencia de una jerarquía sobre otra."</p>
                  <a href="consejos/la-precedencia.html" class="card-link">Leer más...</a>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>
</html>