<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Abogados B&M</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
<?php include('barra.php') ?>
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
        <div class="hero-area height-600 bg-img background-overlay" style="background-image: url(img/blog-img/bg4.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 formulario">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                        <form method="post" action="/abogadosplus/correo.php" >
                            <div class="form-group">
                                <select class="form-control" id="sel1" name="contacto">
                                    <option value="contactar">Contactar como:</option>
                                    <option value="Reunion con">Agendar Reunión</option>
                                    <option value="Llamar a">Llámenme</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="correo" class="form-control" placeholder="Correo Electrónico" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name="telefono" class="form-control" placeholder="Teléfono" required>
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="situacion" class="form-control" placeholder="Situación" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-warning"><b>Enviar Consulta</b></button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Google Maps: If you want to google map, just uncomment below codes -->
    <!--
    <div class="map-area">
        <div id="googleMap" class="googleMap"></div>
    </div>
    -->

    <!-- ***** Footer Area Start ***** -->
 <?php include('footer.php') ?> 
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Google Maps: If you want to google map, just uncomment below codes -->
    <!--
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>
    -->

</body>

</html>