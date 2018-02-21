<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- META PARA RESPONSIVE -->

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Joystick Games</title>
    <!-- ARCHIVOS NECESARIOS PARA BOOTSTRAP 4 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="css/personalizado/menu.css" rel="stylesheet">
    <!-- FONTS -->
    <?php include 'fonts/fonts.php';?>
</head>
<div class="contenedor">
    <nav class="navbar navbar-toggleable-md navbar navbar-inverse bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <style>
                .bg-light {
                    background-color: #202020;
                }

                .btn-outline-danger {
                    color: #FFF;
                    border-color: #FFF;
                }

                .btn {
                    border: 0;
                    font-size: 12px;
                    padding: .8rem 27px;
                    margin-top: 12px;
                }

                .usuario {
                    margin-right: 5%;
                }

            </style>
            <a href="index" class="navbar-brand"><img src="img/logo.png" class="img-fluid" alt="responsive" id="logo"></a>
            <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a href="index">
                        <button type="button" class="btn btn-outline-danger pixel">INICIO</button>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="videojuegos">
                        <button type="button" class="btn btn-outline-danger pixel">VIDEOJUEGOS</button>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="carrito">
                        <button type="button" class="btn btn-outline-danger pixel">CARRITO</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contacto">
                        <button type="button" class="btn btn-outline-danger pixel">CONTACTO</button>
                    </a>
                </li>

            </ul>
            <div class="usuario">
                <li class="nav-item">
                    <a href="#">
                        <button type="button" class="btn btn-outline-danger pixel">HOLA! CARLOS</button>
                    </a>
                </li>
            </div>
        </div>
    </nav>
    <!-- ARCHIVOS NECESARIOS PARA BOOTSTRAP 4 -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</div>

</html>
