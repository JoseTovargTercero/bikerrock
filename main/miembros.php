<?php
include('../resources/back/conexion.php');
if ($_SESSION['nombre'] == '') {
    header("Location: ../index.php");
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Biker Rock Amazonas MC</title>


    <meta name="description" content="Nice and creative portfolio template. Fully responsive with cool animations">
    <meta name="keywords" content="agency, bootstrap 4, creative, flexbox, jquery, minimalist, motion design, onepage, photography, portfolio, product, responsive, studio, video">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="icon" type="image/png" sizes="16x16" href="../resources/img/logo.png">

    <link rel="stylesheet" href="../resources/fonts/opensans/stylesheet.css">
    <link rel="stylesheet" href="../resources/fonts/ionicons/ionicons.min.css">
    <link rel="stylesheet" href="../resources/fonts/fontawesome/font-awesome.min.css">


    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/main.css">
    <link rel="stylesheet" href="../resources/css/style-gradient.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

</head>

<body id="menu" class="body-page">
    <!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

    <header class="page-header navbar page-header-alpha scrolled-white menu-right topmenu-right">

        <button class="navbar-toggler site-menu-icon">

            <a href="../resources/back/logout.php">
                <img src="../resources/img/cerrar-sesion.png" alt="Alerta">
            </a>
        </button>
        <a class="navbar-brand" href="index.html#home">
            <span class="logo">
                <img class="light-logo" src="../resources/img/logo.png" alt="Logo">
            </span>
        </a>

    </header>
    <div class="page-cover">
        <div class="cover-bg bg-img" data-image-src="../resources/img/fondo.jpg"></div>
        <div class="cover-bg-mask bg-color" data-bgcolor="rgba(2, 3, 10, 0.7)"></div>
    </div>
    <main class="page-main ">
        <div class="section section-home fullscreen-md fp-auto-height-responsive main-home">

            <div class="dir-col anim">

                <div class="section-content">
                    <div class="row">

                        <div class="section-title text-center">
                            <h5 class="title-bg">Inicio</h5>
                        </div>
                        <div class="col-12 col-md-12 ">

                            <h2 class="anim-1">Solicitudes</h2>

                            <div style="max-height: 500px; overflow-y: auto;">

                                <table class="table table-responsive" style="background-color: #00000059;">
                                    <thead>
                                        <tr>
                                            <th style="border-top: none;">Nombre</th>
                                            <th style="border-top: none;">Cedula</th>
                                            <th style="border-top: none;">FN</th>
                                            <th style="border-top: none;">Telefono</th>
                                            <th style="border-top: none;">Correo</th>
                                            <th style="border-top: none;">Antecedentes</th>
                                            <th style="border-top: none;"></th>
                                            <th style="border-top: none;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        $stmt = mysqli_prepare($conexion, "SELECT * FROM `miembros` WHERE status='0'");
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                    echo '<tr>
                                        <td>' . $row['nombre'] . '</td>
                                        <td>' . $row['cedula'] . '</td>
                                        <td>' . $row['fn'] . '</td>
                                        <td>' . $row['telefono'] . '</td>
                                        <td>' . $row['correo'] . '</td>
                                        <td>' . $row['antecedentes'] . '</td>
                                        <td>Detalles</td>
                                        <td></td>
                                    </tr>';
                                            }
                                        }
                                        $stmt->close();

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="section-footer scrolldown">
                    <a class="down">
                        <span class="icon"></span>
                        <span class="txt">Video</span>
                    </a>
                </footer>
            </div>

        </div>

    </main>
    <footer id="site-footer" class="page-footer">
        <div class="footer-right">
            <p class="note">Creado por:
                <span style="font-weight: bold;"> Tercero </span>
                Cartografía y tecnología
            </p>
        </div>
    </footer>
    <script src="../resources/js/vendor/jquery-1.12.4.min.js"></script>

</html>