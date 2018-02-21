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
    <link href="css/personalizado/main.css" rel="stylesheet">
    <link href="css/personalizado/carritos.css" rel="stylesheet">
</head>
<header>
    <?php include 'header.php';?>
    <div class="socialbar">
        <?php include 'redes.php'; ?>
    </div>
</header>

<body class="rojo">
    <div class="container">
        <div class="row espaciomenu">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h3 class="center textwhite pixel veinticuatropx">Carrito de compras</h3>
            </div>
        </div>
        <div class="row espacio">
            <div class="col-12 col-sm-12 col-md-4 col-lg-6 col-xl-6 center">
                <div class="card">
                    <img class="card-img-top" src="img/cards/minecraft.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title center toptext">Minecraft Xbox One</h5>
                        <h3 class="card-title center">
                            <small>Canitdad: 1  </small>
                        </h3>
                        <h3><span class="badge badge-primary">Total: $899</span></h3>
                        <center><button href="#" class="btn btn-primary btn-block pixel">Pagar</button></center>
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
