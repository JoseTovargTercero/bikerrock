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


    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">


    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">
    <link rel="stylesheet" href="mapa/js/leaflet.awesome-markers.css">
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
            <svg style="width: 285px;height: 78px;margin-bottom: -82px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#08890014" fill-opacity="1" d="M0,160L205.7,192L411.4,160L617.1,96L822.9,32L1028.6,192L1234.3,256L1440,32L1440,320L1234.3,320L1028.6,320L822.9,320L617.1,320L411.4,320L205.7,320L0,320Z"></path>
            </svg>
            <div id="loop" class="center"></div>
            <div id="bike-wrapper" class="center">
                <div id="bike" class="centerBike"></div>
            </div>
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
                    <li class="nav-item" data-menuanchor="services">
                        <a href="index.html#services">
                            <i class="icon ion-clipboard"></i>
                            <span class="txt">Ruta</span>
                        </a>
                    </li>


                    <?php
                    if ($_SESSION['rol'] == '1' && $_SESSION['u_nivel'] == '1') {
                        echo '
                            <li class="nav-item" >
                            <a href="miembros.php">
                                <i class="icon ion-ios-people"></i>
                                <span class="txt">Miembros y Solicitudes</span>
                            </a>
                        </li>
                            ';
                    }
                    ?>
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
                                <h2 class="display-4 display-title home-title anim-1">¡Bienvenido!</h2>
                                <h4 class="anim-2 opacity-75">
                                    Hola <b> <?php echo $_SESSION['nombre'] ?></b>, 

                                    <?php if ($_SESSION['kms'] != '0') { ?>
                                   
                                    Has sumado un total de <b style="font-size: 22px;" class="text-warning">  <i class="fa fa-bar-chart"></i> <?php echo $_SESSION['kms'] ?> km</b>, sigamos aumentando la cifra en nuestra proxima rodada. 
                                <?php }else {
                                    echo 'desde el equipo de <b>BIKER ROCK AMAZONAS MC</b> nos complace contar contigo para la próxima rodada.';
                                } ?>
                                    
                                    
                                    <br> Hora de salida: <b>8:30 am</b>, lugar: <b>Redoma Autana.</b>
                                </h4>
                            </div>

                        
                            <div class="btns-action anim-3">
                                <a class="btn btn-outline-white" href="index.php#services">
                                    <span class="text">ver Ruta</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        <!--
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
                                            -->


        <div class="section section-list-feature fp-auto-height-responsive " data-section="services">

            <div class="section-wrapper twoside center-vh dir-col anim">

                <div class="section-title text-center">
                    <h2 class="title-bg">Ruta</h2>
                    <h2 class="display-4 display-title anim-2 mb-32">Ruta</h2>
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
    <script src="mapa/data/Ruta_1.js"></script>
    <script src="mapa/data/AlternativaBuenaprobabilidadcopiar_2.js"></script>
    <script src="mapa/data/rutaimposible_3.js"></script>
    <script src="mapa/js/leaflet.awesome-markers.js"></script>

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
    // Creates a red marker with the coffee icon





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








    function pop_Ruta_1(feature, layer) {
        var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
        layer.bindPopup(popupContent, {
            maxHeight: 400
        });
    }










    function style_Ruta_1_0() {
        return {
            pane: 'pane_Ruta_1',
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

    function style_Ruta_1_1() {
        return {
            pane: 'pane_Ruta_1',
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
    map.createPane('pane_Ruta_1');
    map.getPane('pane_Ruta_1').style.zIndex = 401;
    map.getPane('pane_Ruta_1').style['mix-blend-mode'] = 'normal';
    var layer_Ruta_1 = new L.geoJson.multiStyle(json_Ruta_1, {
        attribution: '',
        interactive: false,
        dataVar: 'json_Ruta_1',
        layerName: 'layer_Ruta_1',
        pane: 'pane_Ruta_1',
        onEachFeature: pop_Ruta_1,
        styles: [style_Ruta_1_0, style_Ruta_1_1, ]
    });
    bounds_group.addLayer(layer_Ruta_1);
    map.addLayer(layer_Ruta_1);

    function pop_AlternativaBuenaprobabilidadcopiar_2(feature, layer) {
        var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
        layer.bindPopup(popupContent, {
            maxHeight: 400
        });
    }

    function style_AlternativaBuenaprobabilidadcopiar_2_0() {
        return {
            pane: 'pane_AlternativaBuenaprobabilidadcopiar_2',
            opacity: 1,
            color: 'rgba(219,198,6,1.0)',
            dashArray: '',
            lineCap: 'square',
            lineJoin: 'bevel',
            weight: 3.0,
            fillOpacity: 0,
            interactive: false,
        }
    }
    map.createPane('pane_AlternativaBuenaprobabilidadcopiar_2');
    map.getPane('pane_AlternativaBuenaprobabilidadcopiar_2').style.zIndex = 402;
    map.getPane('pane_AlternativaBuenaprobabilidadcopiar_2').style['mix-blend-mode'] = 'normal';
    var layer_AlternativaBuenaprobabilidadcopiar_2 = new L.geoJson(json_AlternativaBuenaprobabilidadcopiar_2, {
        attribution: '',
        interactive: false,
        dataVar: 'json_AlternativaBuenaprobabilidadcopiar_2',
        layerName: 'layer_AlternativaBuenaprobabilidadcopiar_2',
        pane: 'pane_AlternativaBuenaprobabilidadcopiar_2',
        onEachFeature: pop_AlternativaBuenaprobabilidadcopiar_2,
        style: style_AlternativaBuenaprobabilidadcopiar_2_0,
    });
    bounds_group.addLayer(layer_AlternativaBuenaprobabilidadcopiar_2);
    map.addLayer(layer_AlternativaBuenaprobabilidadcopiar_2);

    function pop_rutaimposible_3(feature, layer) {
        var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
        layer.bindPopup(popupContent, {
            maxHeight: 400
        });
    }

    function style_rutaimposible_3_0() {
        return {
            pane: 'pane_rutaimposible_3',
            opacity: 1,
            color: 'rgba(219,30,42,1.0)',
            dashArray: '',
            lineCap: 'square',
            lineJoin: 'bevel',
            weight: 3.0,
            fillOpacity: 0,
            interactive: false,
        }
    }
    map.createPane('pane_rutaimposible_3');
    map.getPane('pane_rutaimposible_3').style.zIndex = 403;
    map.getPane('pane_rutaimposible_3').style['mix-blend-mode'] = 'normal';
    var layer_rutaimposible_3 = new L.geoJson(json_rutaimposible_3, {
        attribution: '',
        interactive: false,
        dataVar: 'json_rutaimposible_3',
        layerName: 'layer_rutaimposible_3',
        pane: 'pane_rutaimposible_3',
        onEachFeature: pop_rutaimposible_3,
        style: style_rutaimposible_3_0,
    });
    bounds_group.addLayer(layer_rutaimposible_3);
    map.addLayer(layer_rutaimposible_3);
    setBounds();












    var redMarker = L.AwesomeMarkers.icon({
        icon: 'coffee',
        markerColor: 'red'
    });





    L.marker([5.7889654, -67.6024900], {
        icon: L.AwesomeMarkers.icon({
            icon: 'flag-checkered',
            prefix: 'fa',
            markerColor: 'black'
        })
    }).bindPopup('Destino').addTo(map);
    L.marker([5.7864882, -67.6035946], {
        icon: L.AwesomeMarkers.icon({
            icon: 'camera',
            prefix: 'fa',
            markerColor: 'red'
        })
    }).bindPopup('Punto fotográfico').addTo(map);
    L.marker([5.671224, -67.596277], {
        icon: L.AwesomeMarkers.icon({
            icon: 'flag',
            prefix: 'fa',
            markerColor: 'green'
        })
    }).bindPopup('Punto de salida').addTo(map);
    L.marker([5.7620173, -67.5947784], {
        icon: L.AwesomeMarkers.icon({
            icon: 'glass',
            prefix: 'fa',
            markerColor: 'blue'
        })
    }).bindPopup('Hidratación').addTo(map);




    map.flyTo([5.73532, -67.57972], 12, {
        animate: true,
        duration: 3
    });
</script>

</html>