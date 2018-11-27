<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>CONFIRMACIÓN DE RESERVA HORA</title>
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/reserva.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- header section -->
		<?php include "header.php"; ?> 
		<section class="slider" id="home">
			<div class="container-fluid">
                <div class="row">
                    <div class="contact-caption clearfix">
                        <div class="contact-heading text-center">
                            <h2>Confirmación de Hora</h2>
                        </div>
                        <div class="col-md-12 contact-info text-center" id="confirmacion">
                            <h3 id="conf_header"></h3>
                            <div class="info-detail">
                                <ul>
                                    <li><i class="fa fa-user-circle"></i><span id="doctor"></span></li>
                                    <li><i class="fa fa-calendar"></i><span id="dia"></span></li>
                                    <li><i class="fa fa-times-circle"></i><span id="hora"></span></li>
                                    <li><i class="fa fa-address-card"></i><span id="sede"></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row text-center">
                            <h3><a href="http://localhost/doctor">ASOMEL</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 footer-para">
                        <p>&copy;EOS All right reserved</p>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-skype"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- script tags
        ============================================================= -->
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/confirmar.js"></script>

    </script>
</body>
</html>