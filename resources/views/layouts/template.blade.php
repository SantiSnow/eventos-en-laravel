<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Eventos y organizacion MI</title>
    <style>
        body{
            background-color: #fffafa;
        }
        .titulo{
            margin: auto;
        }

        #titulo-principal{
            color: white;
            font-family: "Times New Roman", Times, serif;
        }

        #titulo-sec{
            color:tomato;
            font-family: "Times New Roman", Times, serif;
        }

        #barra-navegacion{
            background-color: #ecc6c6;
        }

        #iso-logo{
            width:10%;
        }

        .nav-link{
            padding: 25px;
        }

        .buscar{
            padding: 20px;
        }

        .nav-link{
            color: white;
        }

        .nav-link:hover{
            color: white;
        }

        .card-img-top{
            margin: auto;
            width: 80%;
        }

        .page-footer{
            background-color: white;
        }

        .rounded-circle{
            width: 100%;
        }
        
        #envioCorreo1{
            margin: 2px;
        }

        #iso-logo-footer{
            width: 40%;
        }

        .card-img-top{
            margin-top: 2px;
            border-radius: 5px;
        }

        .card{
            margin: 5px;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" id="barra-navegacion">
        <a class="navbar-brand" href="{{ url('/') }}"></a>
        <img src="../images/sin-fondo.png" alt="logo Eventos y Protocolo MilUno" id="iso-logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarText">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <h5><a class="nav-link active" href="{{ url('/') }}">Inicio</a></h5>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link active" href="{{ url('/consejos') }}">Consejos Y Tips</a></h5>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link active" href="#">Cursos</a></h5>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link active" href="{{ url('/sobre-nosotros') }}">Sobre Nosotros</a></h5>
                </li>
            </ul>
        </div>
    </nav>
<br />
<br />
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="justify-content">
                <h2 id="titulo-sec">Eventos y Protocolo MI</h2>
            </div>
        </div>
        <div id="form-buscar" class="col-md-4">
            <br />
            <form class="form-inline my-2 my-lg-0" id="mi-form-busqueda" method="post" action="{{ url('/busqueda') }}">
            @csrf
                <input name="buscar" class="form-control mr-sm-2 buscar" type="search" placeholder="Buscar tips..." aria-label="Search" required />
                <button class="btn btn-light" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</div>
        
<br />
<br />

<div class="container">
@yield("contenido")


    
</div>
<br />
<br />
<br />
<br />

<!-- Footer -->
<footer class="page-footer">
    <hr />
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 mb-md-0 mb-2 contenedorFooter">
                <img src="../images/logo-footer.png" alt="logo Eventos y Protocolo MilUno" id="iso-logo-footer" />
            <div>
                <strong>Suscribite a nuestro newsletter</strong><br /><br />
                <form class="form-inline">
                    <input id="envioCorreo1" class="form-control" type="email" placeholder="Correo Electronico" name="correo" id="correo" required />
                    <button type="submit" id="envioCorreo" class="btn btn-light">Suscribite</button>
                </form>
            </div>
            <br />
            <div id="redes" class="row">
                <div class="col-2"><a href="https://www.facebook.com/Eventos-y-Protocolo-MI-107526524382764"><img class="rounded-circle" src="../images/face.png" alt="logo facebook"></a></div>
                <div class="col-2"><a href="#"><img class="rounded-circle" src="images/gmail.png" alt="logo gmail"></a></div>
                <div class="col-2"><a href="https://www.instagram.com/eventosyprotocolo_mi/"><img class="rounded-circle" src="../images/instagram.png" alt="logo instagram"></a></div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 contenedorFooter">
                <h2 class="footerTitulos">Secciones</h2>
                    <a href="#"><p>Consejos y Tips</p></a>
                    <a href="#"><p>Cursos</p></a>
                    <a href="#"><p>¿Como me anoto?</p></a>
                    <a href="#"><p>Sobre Nosotros</p></a>
            </div>
            <div class="col-lg-4 col-12 contenedorFooter">
            <h2 class="footerTitulos">Contacto:</h2>
                <a href="#"><p>¿Cómo abonar los cursos?</p></a>
                <a href="#"><p>Información sobre los cursos</p></a>
                <a href="#"><p>Contactanos</p></a>
                <a href="#"><p>Ayuda</p></a>
            <h4 class="footerTitulos">Creado por:</h4>
                <p>CI - Software</p>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2020 Copyright: <a href="#"> CI Software</a></div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>