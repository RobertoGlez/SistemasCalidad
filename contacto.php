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
    <link href="css/personalizado/contacto.css" rel="stylesheet">
    <link href="css/personalizado/main.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<header>
    <?php include 'header.php';?>
    <div class="socialbar">
        <?php include 'redes.php'; ?>
    </div>
</header>

<body class="rojo">
    <div class="container-fluid">
        <div class="row espaciomenu">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 class="pixel veinticuatropx center textwhite">Dejanos un mensaje!</h1>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="contenedor-formulario">
                    <div class="wrap">
                        <form action="" class="formulario" name="formulario_registro" method="get">
                            <div>
                                <div class="input-group">
                                    <input type="text" id="nombre" name="nombre">
                                    <label class="label" for="nombre">Nombre:</label>
                                </div>
                                <div class="input-group">
                                    <input type="email" id="correo" name="correo">
                                    <label class="label" for="correo">Correo:</label>
                                </div>
                                <center>
                                    <h5 class="pixel catorcepx" style="color:black;">Mensaje:</h5>
                                </center>
                                <div class="input-group">
                                    <textarea rows="10" cols="200"></textarea>
                                </div>

                                <div class="input-group checkbox">
                                    <input type="checkbox" name="terminos" id="terminos" value="true">
                                    <label for="terminos">Acepto los Terminos y Condiciones</label>
                                </div>

                                <input type="submit" id="btn-submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ARCHIVOS NECESARIOS PARA BOOTSTRAP 4 
    <script src="js/jquery-3.2.1.min.js"></script>-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/formulario.js"></script>
</body>

</html>
