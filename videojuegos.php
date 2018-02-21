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
    <link href="css/personalizado/videojuegos.css" rel="stylesheet">
    <link href="css/personalizado/main.css" rel="stylesheet">
</head>
<header>
    <?php include 'header.php';?>
    <div class="socialbar">
        <?php include 'redes.php'; ?>
    </div>
</header>

<body class="rojo">
    <div class="container-fluid">
        <div class="row espacio">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h3 class="center textwhite pixel veinticuatropx">Más populares</h3>
            </div>
        </div>
        <div class="row espacio">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <img class="card-img-top" src="img/cards/minecraft.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title center toptext">Minecraft <span class="badge badge-primary">$899</span></h5>
                        <p class="card-text center paddingtext bottomcard">Minecraft 4k aumenta su popularidad!</p>
                        <center><button href="#" class="btn btn-primary btn-block pixel">Añadir al carrito</button></center>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <img class="card-img-top" src="img/cards/cuphead.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title center toptext">Cuphead <span class="badge badge-primary">$399</span></h5>
                        <p class="card-text center paddingtext bottomcard">Cuphead, el juego del momento!</p>
                        <center><button href="#" class="btn btn-primary btn-block pixel">Añadir al carrito</button></center>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <img class="card-img-top" src="img/cards/dbz.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title center toptext">Dragon Ball Figthers Z <span class="badge badge-primary">$1499</span></h5>
                        <p class="card-text center paddingtext bottomcard">Al fin la espera llego para los fans de DBZ!</p>
                        <center><button href="#" class="btn btn-primary btn-block pixel">Añadir al carrito</button></center>
                    </div>
                </div>
            </div>
        </div>
        <div class="row espaciocategoria">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h3 class="center textwhite pixel veinticuatropx">Más vendidos</h3>
            </div>
        </div>
        <div class="row espacio espacioabajo">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <img class="card-img-top" src="img/cards/gof.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title center toptext">Gears Of War 4 <span class="badge badge-primary">$1099</span></h5>
                        <p class="card-text center paddingtext bottomcard">El más pedido en latinoamerica!</p>
                        <center><button href="#" class="btn btn-primary btn-block pixel">Añadir al carrito</button></center>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <img class="card-img-top" src="img/cards/injustice.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title center toptext">Injustice <span class="badge badge-primary">$1199</span></h5>
                        <p class="card-text center paddingtext bottomcard">DC rompe record de venta en su nuevo videojuego!</p>
                        <center><button href="#" class="btn btn-primary btn-block pixel">Añadir al carrito</button></center>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <img class="card-img-top" src="img/cards/halo5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title center toptext">Halo 5 <span class="badge badge-primary">$999</span></h5>
                        <p class="card-text center paddingtext bottomcard">Halo 5 continua vendiendo!</p>
                        <center><button href="#" class="btn btn-primary btn-block pixel">Añadir al carrito</button></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ARCHIVOS NECESARIOS PARA BOOTSTRAP 4 
    <script src="js/jquery-3.2.1.min.js"></script>-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
