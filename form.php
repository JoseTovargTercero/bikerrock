<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Biker Rock Amazonas MC</title>


    <meta name="description" content="Nice and creative portfolio template. Fully responsive with cool animations">
    <meta name="keywords" content="agency, bootstrap 4, creative, flexbox, jquery, minimalist, motion design, onepage, photography, portfolio, product, responsive, studio, video">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

    <link rel="icon" type="image/png" sizes="16x16" href="resources/img/logo.png">

    <link rel="stylesheet" href="resources/fonts/opensans/stylesheet.css">
    <link rel="stylesheet" href="resources/fonts/ionicons/ionicons.min.css">
    <link rel="stylesheet" href="resources/fonts/fontawesome/font-awesome.min.css">

    <link rel="stylesheet" href="resources/css/pageloader.css">

    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/js/vendor/swiper.min.css">
    <link rel="stylesheet" href="resources/js/vendor/jquery.fullpage.min.css">
    <link rel="stylesheet" href="resources/js/vegas/vegas.min.css">

    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="stylesheet" href="resources/css/style-gradient.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
</style>

<body id="menu" class="body-page">

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
        <a class="navbar-brand" href="index.html#home">
            <span class="logo">
                <img class="light-logo" src="resources/img/logo.png" alt="Logo">
            </span>
        </a>
    </header>
    <div class="page-cover">

        <div class="cover-bg bg-img" data-image-src="resources/img/fondo.jpg"></div>

        <div class="cover-bg-mask bg-color" data-bgcolor="rgba(2, 3, 10, 0.7)"></div>
    </div>
    <main class="page-main page-fullpage main-anim" id="mainpage">
        <style>
            .mcontrol {
                background-color: #ffffff38;
                color: white;
            }
        </style>
        <div class="section section-register fp-auto-height-responsive ">

            <div style="    min-width: 70%;">


                <div class=" anim " style="    max-width: 90%;margin: auto;">
                    <div class="row ">
                        <div class="col-12 col-md-12 col-lg-12">

                            <div class="form-container-transparent form-container-white">
                                <div class="form-desc">
                                    <h3 class="mb-0 display-title anim-2 nowrap">Formulario de admisión</h3>
                                    <p class="invite anim-3 text-muted"><small>Rellene el formulario, una vez verifiquemos sus datos, le contactaremos.</small></p>
                                </div>
                                <form enctype="multipart/form-data" id="filesForm" method="post" class="form-input  anim-4 mt-3 ">

                                    <div class="row">


                                        <div class="col-lg-6">

                                            <div class="form-group form-success-gone">
                                                <label for="cedula">Cédula</label>
                                                <input id="cedula" name="cedula" required class="form-control mcontrol" />
                                            </div>


                                            <div class="form-group form-success-gone">
                                                <label for="nombre">Nombre</label>
                                                <input id="nombre" name="nombre" required class="form-control mcontrol" />
                                            </div>

                                            <div class="form-group form-success-gone">
                                                <label for="fn">Fecha de nacimiento</label>
                                                <input id="fn" name="fn" required class="form-control mcontrol" type="date" />
                                            </div>

                                            <div class="form-group form-success-gone">
                                                <label for="telefono">Teléfono</label>
                                                <input id="telefono" name="telefono" required class="form-control mcontrol" />
                                            </div>


                                            <div class="form-group form-success-gone">
                                                <label for="correo">Correo electrónico</label>
                                                <input id="correo" name="correo" type="email" required class="form-control mcontrol" />
                                            </div>
                                            <div class="form-group form-success-gone">
                                                <label for="residencia">Lugar de residencia</label>
                                                <input id="residencia" name="residencia" required class="form-control mcontrol" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group form-success-gone">
                                                <label for="foto_cedula[]">Foto de la cedula</label>
                                                <input id="foto_cedula[]" name="foto_cedula[]" accept=".jpg, .png" type="file" required class="form-control mcontrol" />
                                            </div>

                                            <div class="form-group form-success-gone">
                                                <label for="foto_carnet[]">Foto del carnet de circulación o titulo</label>
                                                <input id="foto_carnet[]" name="foto_carnet[]" type="file" accept=".jpg, .png" required class="form-control mcontrol" />
                                            </div>

                                            <div class="form-group form-success-gone">
                                                <label for="enfermedades">Enfermedades que sufre (opcional)</label>
                                                <input id="enfermedades" name="enfermedades" class="form-control mcontrol" />
                                            </div>

                                            <div class="form-group form-success-gone">
                                                <label for="experiencia">Años de experiencia manejando</label>
                                                <select id="experiencia" name="experiencia" required class="form-control mcontrol">
                                                    <option value="">Seleccione</option>
                                                    <option value="<1">Menos de un año</option>
                                                    <option value="1-3">Entre uno y tres</option>
                                                    <option value="3-5">Entre tres y cinco</option>
                                                    <option value="+5">Más cinco</option>
                                                </select>
                                            </div>



                                            <div class="form-group form-success-gone">
                                                <label for="experiencia_offroad">Experiencia manejando por caminos irregulares</label>
                                                <select id="experiencia_offroad" name="experiencia_offroad" required class="form-control mcontrol">
                                                    <option value="">Seleccione</option>
                                                    <option value="0">Ninguna</option>
                                                    <option value="<1">Menos de un año</option>
                                                    <option value="1-3">Entre uno y tres</option>
                                                    <option value="3-5">Entre tres y cinco</option>
                                                    <option value="+5">Más cinco</option>
                                                </select>
                                            </div>


                                            <div class="form-group form-success-gone">
                                                <label for="antecedentes">Antecedentes penales</label>
                                                <select id="antecedentes" name="antecedentes" required class="form-control mcontrol">
                                                    <option value="">Seleccione</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <div>
                                            <p class="email-ok  form-text-feedback form-success-visible" style="display: none;" id="informacion"></p>
                                        </div>
                                        <button id="submit" class="btn btn-outline-white form-success-gone">Enviar solicitud
                                        </button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
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



    <script src="resources/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="resources/js/vendor/all.js"></script>
    <script src="resources/js/form_script.js"></script>

    <script src="resources/js/main.js"></script>

    <script>
        $(document).ready(function(e) {
            $("#filesForm").on('submit', function(e) {
                e.preventDefault();
                $('#submit').prop('disabled', true);
                $('.page-loader').show()


                let formData = new FormData(this);
                $('.container-loader').show()
                $.ajax({
                    type: 'POST',
                    url: 'resources/back/unirse.php',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(msg) {

                        $('#submit').prop('disabled', false);
                        $('.page-loader').hide()

                        if (msg.trim() == 'ok') {


                            Swal.fire({
                                title: "Enviado",
                                text: "La solicitud se ha enviado correctamente, muy pronto nos pondremos en contacto contigo.",
                                icon: "success",
                                showCancelButton: false,
                                confirmButtonColor: "#3085d6",
                                confirmButtonText: "OK"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href = "index.php";
                                }
                            });



                        } else if (msg.trim() == 'sye') {
                            Swal.fire({
                                title: "Denegado",
                                text: "Ya existe una solicitud con esta cédula, por favor espere a que sea revisada.",
                                icon: "error",
                                showCancelButton: false,
                                confirmButtonColor: "#3085d6",
                                confirmButtonText: "OK"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href = "index.php";
                                }
                            });

                        } else if (msg.trim() == 'uye') {
                            Swal.fire({
                                title: "Denegado",
                                text: "Ya es miembro de la organización, inicie sesión para continuar.",
                                icon: "error",
                                showCancelButton: false,
                                confirmButtonColor: "#3085d6",
                                confirmButtonText: "OK"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href = "login.php";
                                }
                            });
                        } else {
                            alert(msg)
                        }


                    }
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    alert('Uncaught Error: ' + jqXHR.responseText);
                });

            });
        }); // REPORTAR EJECUCION DE LA TAREA
    </script>

</body>



</html>