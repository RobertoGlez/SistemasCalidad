<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- META PARA RESPONSIVE -->

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Joystick Games</title>

    <!-- ARCHIVOS NECESARIOS PARA BOOTSTRAP 4 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- SLIDER CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/personalizado/index.css" rel="stylesheet">
</head>
<header>
    <?php include 'header.php';?>
    <div class="socialbar">
        <?php include 'redes.php'; ?>
    </div>

</header>

<body>
    <!-- INICIO DEL SLIDER -->
    <section id="sliderprincipal" class="vistapc">
        <div id="ofertas" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('img/slider/logotipo.png')">
                </div>
                <div class="carousel-item" style="background-image: url('img/slider/slider7.jpg')">
                </div>
                <div class="carousel-item" style="background-image: url('img/slider/slider8.jpg')">
                </div>
                <div class="carousel-item" style="background-image: url('img/slider/slider2.jpg')">
                </div>
                <div class="carousel-item" style="background-image: url('img/slider/slider5.jpg')">
                </div>
            </div>
            <a class="carousel-control-prev" href="#ofertas" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#ofertas" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- FIN DEL SLIDER -->
    <!-- INICIO DEL SLIDER -->
    <section id="sliderprincipal" class="vistamovil">
        <div id="ofertasmovil" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('img/logotipomovil.png')">
                </div>
                <div class="carousel-item" style="background-image: url('img/slidermovil/starwars.jpg')">
                </div>
                <div class="carousel-item" style="background-image: url('img/slidermovil/gears.jpg')">
                </div>
                <div class="carousel-item" style="background-image: url('img/slidermovil/halo5.jpg')">
                </div>
                <div class="carousel-item" style="background-image: url('img/slidermovil/starwars.jpg')">
                </div>
            </div>
            <a class="carousel-control-prev" href="#ofertasmovil" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#ofertasmovil" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- FIN DEL SLIDER -->
    <!-- ARCHIVOS NECESARIOS PARA BOOTSTRAP 4 
    <script src="js/jquery-3.2.1.min.js"></script>-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
