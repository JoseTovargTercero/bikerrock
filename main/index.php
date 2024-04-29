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

    <link rel="stylesheet" href="../resources/css/pageloader.css">

    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/js/vendor/swiper.min.css">
    <link rel="stylesheet" href="../resources/js/vendor/jquery.fullpage.min.css">
    <link rel="stylesheet" href="../resources/js/vegas/vegas.min.css">

    <link rel="stylesheet" href="../resources/css/main.css">
    <link rel="stylesheet" href="../resources/css/style-gradient.css">
    <link rel="stylesheet" href="mapa/css/leaflet.css">
    <link rel="stylesheet" href="mapa/css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <style>
        #map {
            width: 100%;
            height: 60vh;
        }
    </style>
</head>

<body id="menu" class="body-page">
    <!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

    <div class="page-loader" id="page-loader">
        <div>
            <div class="icon ion-spin"></div>
        </div>
    </div>

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


        <div class="all-menu-wrapper" id="navbarMenu">



            <nav class="navbar-sidebar ">
                <ul class="navbar-nav" id="qmenu">
                    <li class="nav-item" data-menuanchor="home">
                        <a href="index.html#home">
                            <i class="icon ion-ios-home"></i>
                            <span class="txt">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-item" data-menuanchor="about">
                        <a href="index.html#about">
                            <i class="icon ion-star"></i>
                            <span class="txt">Video Ruta</span>
                        </a>
                    </li>
                    <li class="nav-item" data-menuanchor="services">
                        <a href="index.html#services">
                            <i class="icon ion-clipboard"></i>
                            <span class="txt">Mapa</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>

    </header>


    <div class="page-cover">

        <div class="cover-bg bg-img" data-image-src="../resources/img/fondo.jpg"></div>

        <div class="cover-bg-mask bg-color" data-bgcolor="rgba(2, 3, 10, 0.7)"></div>
    </div>


    <main class="page-main page-fullpage main-anim" id="mainpage">

        <div class="section section-home fullscreen-md fp-auto-height-responsive main-home" data-section="home">

            <div class="section-wrapper center-vh dir-col anim">

                <div class="section-content reduced text-center">
                    <div class="row">

                        <div class="section-title text-center">
                            <h5 class="title-bg">Inicio</h5>
                        </div>
                        <div class="col-12 col-md-12 text-center">

                            <div class="title-desc">
                                <h2 class="display-4 display-title home-title anim-1">Bienvenido</h2>
                                <h4 class="anim-2 opacity-75">
                                    Hola <b> <?php echo $_SESSION['nombre'] ?> </b>, desde el equipo de <b>BIKER ROCK AMAZONAS MC</b> nos complace contar contigo para la próxima rodada.
                                    <br> <b>Hora de salida: 8:30 am, lugar: Terminal de Pasajeros Melicio Pérez (Entrada lateral)</b>
                                </h4>
                            </div>

                            <div class="btns-action anim-3">
                                <a class="btn btn-outline-white" href="index.php#about">
                                    <span class="text">Video Ruta</span>
                                </a>
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


        <div class="section section-description fp-auto-height-responsive about-section" data-section="about">

            <div class="section-wrapper center-vh dir-col anim">

                <div class="section-title text-center">
                    <h5 class="title-bg">VR</h5>
                    <h2 class="display-4 display-title anim-2 mb-32">Video Ruta</h2>
                </div>

                <div class="section-content reduced center-vh dir-col">

                    <div class="col-12 col-sm-12 center-vh">
                        <div class="section-content anim translateUp">
                            <div class="images text-center">
                                <div class="img-frame-legend-alpha">
                                    <div>
                                        <div class="img shadow">

                                        <style>
                                            .videoy{
                                                width: 760px;
                                                height: 415px;
                                            }

                                            /* Agrega un media query que coloque el video adaptable a telefonos */
                                            @media (max-width: 768px) {
                                                .videoy{
                                                    width: 100%;
                                                    height: 100%;
                                                }
                                            }
                                        </style>

                                            <iframe class="videoy" src="https://www.youtube.com/embed/OBv96T2I99E?autoplay=1&mute=1&loop=1" title="Biker Rock Amazonas MC - Ruta 2" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <footer class="section-footer scrolldown">
                    <a class="down">
                        <span class="icon"></span>
                        <span class="txt">Mapa</span>
                    </a>
                </footer>
            </div>

        </div>


        <div class="section section-list-feature fp-auto-height-responsive " data-section="services">

            <div class="section-wrapper twoside center-vh dir-col anim">

                <div class="section-title text-center">
                    <h2 class="title-bg">Mapa</h2>
                    <h2 class="display-4 display-title anim-2 mb-32">Mapa</h2>
                </div>


                <div class="item fade-1" style="    width: 100%;">
                            <div id="map"></div>
                </div>



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



    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../resources/js/vendor/jquery-1.12.4.min.js"></script>

    <script src="../resources/js/vendor/scrolloverflow.min.js"></script>
    <script src="../resources/js/vendor/all.js"></script>
    <script src="../resources/js/particlejs/particles.min.js"></script>

    <script src="../resources/js/form_script.js"></script>

    <script src="../resources/js/main.js"></script>



    <script src="mapa/js/qgis2web_expressions.js"></script>
    <script src="mapa/js/leaflet.js"></script>
    <script src="mapa/js/multi-style-layer.js"></script>
    <script src="mapa/js/leaflet.rotatedMarker.js"></script>
    <script src="mapa/js/leaflet.pattern.js"></script>
    <script src="mapa/js/Autolinker.min.js"></script>
    <script src="mapa/js/rbush.min.js"></script>
    <script src="mapa/js/labelgun.min.js"></script>
    <script src="mapa/js/labels.js"></script>
    <script src="mapa/data/Hidrografia_1.js"></script>
    <script src="mapa/data/Ruta_2.js"></script>
    <script src="mapa/data/Iniciodezonarocosalaja_3.js"></script>
    <script src="mapa/data/Puntodereunion_4.js"></script>
    <script src="mapa/data/Iniciodezonaselvtica_5.js"></script>
</body>
<script>
    var map = L.map('map', {
        zoomControl: true,
        maxZoom: 28,
        minZoom: 1
    }).fitBounds([
        [5.384808886838997, -67.87893779497502],
        [5.721437595418332, -67.1819183513284]
    ]);




    map.attributionControl.setPrefix("Tercero's Platform");
    var autolinker = new Autolinker({
        truncate: {
            length: 30,
            location: 'smart'
        }
    });
    var bounds_group = new L.featureGroup([]);

    function setBounds() {}
    map.createPane('pane_GoogleSatellite_0');
    map.getPane('pane_GoogleSatellite_0').style.zIndex = 400;
    var layer_GoogleSatellite_0 = L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
        pane: 'pane_GoogleSatellite_0',
        opacity: 1.0,
        attribution: '',
        minZoom: 1,
        maxZoom: 28,
        minNativeZoom: 0,
        maxNativeZoom: 20
    });
    layer_GoogleSatellite_0;
    map.addLayer(layer_GoogleSatellite_0);


    function style_Hidrografia_1_0() {
        return {
            pane: 'pane_Hidrografia_1',
            opacity: 1,
            color: 'rgba(72,123,182,1.0)',
            dashArray: '',
            lineCap: 'square',
            lineJoin: 'bevel',
            weight: 3.0,
            fillOpacity: 0,
            interactive: false,
        }
    }
    map.createPane('pane_Hidrografia_1');
    map.getPane('pane_Hidrografia_1').style.zIndex = 401;
    map.getPane('pane_Hidrografia_1').style['mix-blend-mode'] = 'normal';
    var layer_Hidrografia_1 = new L.geoJson(json_Hidrografia_1, {
        attribution: '',
        interactive: false,
        dataVar: 'json_Hidrografia_1',
        layerName: 'layer_Hidrografia_1',
        pane: 'pane_Hidrografia_1',
        style: style_Hidrografia_1_0,
    });
    bounds_group.addLayer(layer_Hidrografia_1);
    map.addLayer(layer_Hidrografia_1);


    function style_Ruta_2_0() {
        return {
            pane: 'pane_Ruta_2',
            opacity: 1,
            color: 'rgba(0,0,0,1.0)',
            dashArray: '',
            lineCap: 'round',
            lineJoin: 'round',
            weight: 4.0,
            fillOpacity: 0,
            interactive: false,
        }
    }

    function style_Ruta_2_1() {
        return {
            pane: 'pane_Ruta_2',
            opacity: 1,
            color: 'rgba(255,255,255,1.0)',
            dashArray: '',
            lineCap: 'round',
            lineJoin: 'round',
            weight: 3.0,
            fillOpacity: 0,
            interactive: false,
        }
    }
    map.createPane('pane_Ruta_2');
    map.getPane('pane_Ruta_2').style.zIndex = 402;
    map.getPane('pane_Ruta_2').style['mix-blend-mode'] = 'normal';
    var layer_Ruta_2 = new L.geoJson.multiStyle(json_Ruta_2, {
        attribution: '',
        interactive: false,
        dataVar: 'json_Ruta_2',
        layerName: 'layer_Ruta_2',
        pane: 'pane_Ruta_2',
        styles: [style_Ruta_2_0, style_Ruta_2_1, ]
    });
    bounds_group.addLayer(layer_Ruta_2);
    map.addLayer(layer_Ruta_2);

    function pop_Iniciodezonarocosalaja_3(feature, layer) {
        var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">ZONA ROCOSA</td>\
                    </tr>\
                </table>';
        layer.bindPopup(popupContent, {
            maxHeight: 400
        });
    }

    function style_Iniciodezonarocosalaja_3_0() {
        return {
            pane: 'pane_Iniciodezonarocosalaja_3',
            radius: 8.0,
            opacity: 1,
            color: 'rgba(0,0,0,1.0)',
            dashArray: '',
            lineCap: 'butt',
            lineJoin: 'miter',
            weight: 2.0,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(255,255,255,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_Iniciodezonarocosalaja_3');
    map.getPane('pane_Iniciodezonarocosalaja_3').style.zIndex = 403;
    map.getPane('pane_Iniciodezonarocosalaja_3').style['mix-blend-mode'] = 'normal';
    var layer_Iniciodezonarocosalaja_3 = new L.geoJson(json_Iniciodezonarocosalaja_3, {
        attribution: '',
        interactive: true,
        dataVar: 'json_Iniciodezonarocosalaja_3',
        layerName: 'layer_Iniciodezonarocosalaja_3',
        pane: 'pane_Iniciodezonarocosalaja_3',
        onEachFeature: pop_Iniciodezonarocosalaja_3,
        pointToLayer: function(feature, latlng) {
            var context = {
                feature: feature,
                variables: {}
            };
            return L.circleMarker(latlng, style_Iniciodezonarocosalaja_3_0(feature));
        },
    });
    bounds_group.addLayer(layer_Iniciodezonarocosalaja_3);
    map.addLayer(layer_Iniciodezonarocosalaja_3);

    function pop_Puntodereunion_4(feature, layer) {
        var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">PUNTO DE REUNION</td>\
                    </tr>\
                </table>';
        layer.bindPopup(popupContent, {
            maxHeight: 400
        });
    }

    function style_Puntodereunion_4_0() {
        return {
            pane: 'pane_Puntodereunion_4',
            radius: 9.4,
            opacity: 1,
            color: 'rgba(0,0,0,1.0)',
            dashArray: '',
            lineCap: 'butt',
            lineJoin: 'miter',
            weight: 1.0,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(255,255,255,1.0)',
            interactive: true,
        }
    }

    function style_Puntodereunion_4_1() {
        return {
            pane: 'pane_Puntodereunion_4',
            radius: 1.4,
            opacity: 1,
            color: 'rgba(0,0,0,1.0)',
            dashArray: '',
            lineCap: 'butt',
            lineJoin: 'miter',
            weight: 2.0,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(0,0,0,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_Puntodereunion_4');
    map.getPane('pane_Puntodereunion_4').style.zIndex = 404;
    map.getPane('pane_Puntodereunion_4').style['mix-blend-mode'] = 'normal';
    var layer_Puntodereunion_4 = new L.geoJson.multiStyle(json_Puntodereunion_4, {
        attribution: '',
        interactive: true,
        dataVar: 'json_Puntodereunion_4',
        layerName: 'layer_Puntodereunion_4',
        pane: 'pane_Puntodereunion_4',
        onEachFeature: pop_Puntodereunion_4,
        pointToLayers: [function(feature, latlng) {
            var context = {
                feature: feature,
                variables: {}
            };
            return L.circleMarker(latlng, style_Puntodereunion_4_0(feature));
        }, function(feature, latlng) {
            var context = {
                feature: feature,
                variables: {}
            };
            return L.circleMarker(latlng, style_Puntodereunion_4_1(feature));
        }, ]
    });
    bounds_group.addLayer(layer_Puntodereunion_4);
    map.addLayer(layer_Puntodereunion_4);

    function pop_Iniciodezonaselvtica_5(feature, layer) {
        var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">ZONA SELVÁTICA</td>\
                    </tr>\
                </table>';
        layer.bindPopup(popupContent, {
            maxHeight: 400
        });
    }

    function style_Iniciodezonaselvtica_5_0() {
        return {
            pane: 'pane_Iniciodezonaselvtica_5',
            radius: 8.0,
            opacity: 1,
            color: 'rgba(61,128,53,1.0)',
            dashArray: '',
            lineCap: 'butt',
            lineJoin: 'miter',
            weight: 2.0,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(84,176,74,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_Iniciodezonaselvtica_5');
    map.getPane('pane_Iniciodezonaselvtica_5').style.zIndex = 405;
    map.getPane('pane_Iniciodezonaselvtica_5').style['mix-blend-mode'] = 'normal';
    var layer_Iniciodezonaselvtica_5 = new L.geoJson(json_Iniciodezonaselvtica_5, {
        attribution: '',
        interactive: true,
        dataVar: 'json_Iniciodezonaselvtica_5',
        layerName: 'layer_Iniciodezonaselvtica_5',
        pane: 'pane_Iniciodezonaselvtica_5',
        onEachFeature: pop_Iniciodezonaselvtica_5,
        pointToLayer: function(feature, latlng) {
            var context = {
                feature: feature,
                variables: {}
            };
            return L.circleMarker(latlng, style_Iniciodezonaselvtica_5_0(feature));
        },
    });
    bounds_group.addLayer(layer_Iniciodezonaselvtica_5);
    map.addLayer(layer_Iniciodezonaselvtica_5);
    setBounds();



    map.flyTo([5.650063151819455, -67.594146704983004], 14, {
            animate: true,
            duration: 2
       });
</script>

</html>