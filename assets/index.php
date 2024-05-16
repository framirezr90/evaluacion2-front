<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <title img src="" >Energy&Water <img src="img/logo.jpg" alt=""></title>
</head>

<body>
    <!-- Barra de Navegación (Mathias) -->
    <section class="nave">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/logo-new.jpg" class="img-nav"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#historia">Historia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#servicios">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#galeria">Galería</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#formulario">Contáctanos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#preguntas">Preguntas Frecuentes</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    </section>
    <br><br>





    <!--  Carrusel (fabián)-->

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/hero2.jpg" class="img-carousel" alt="Hero 1">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Energy & Water</h1>
                    <p>CLIMATIZACIÓN, ELECTRICIDAD Y OBRAS MENORES DE CONSTRUCCIÓN.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img8.jpg" class="img-carousel" alt="Hero 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>CONTAMOS CON LOS MEJORES PROFESIONALES.</h5>

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img9.jpg" class="img-carousel" alt="Hero 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>MANTENIMIENTO PARA EDIFICIOS.</h5>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Acá va quienes somos (fabián)-->

    <div id="historia" class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>QUIÉNES SOMOS</h2>
                <p>Bienvenido a Energy and Water SpA, empresa dedicada a la instalación y reparación de sistemas de
                    ventilación, calefacción, electricidad y construcción. Contamos con un equipo de profesionales
                    altamente cualificados y con amplia experiencia en el sector. Ofrecemos soluciones a medida para
                    cada cliente, garantizando la calidad y la seguridad de nuestros servicios. Contacta con nosotros y
                    solicita tu presupuesto sin compromiso. </p>
                <p>Somos una empresa fundada en 2018 con el objetivo de brindar servicios integrales de mantenimiento
                    para hogares, oficinas, comercios e industrias. </p>
                <br>
                <h2>NUESTRA MISIÓN</h2>
                <p> Es satisfacer las necesidades de
                    nuestros clientes con eficiencia, rapidez y profesionalidad. Nuestra visión es ser la empresa
                    referente en el mercado por nuestra excelencia y compromiso. Nuestros valores son la honestidad, la
                    responsabilidad, el respeto y la innovación.</p>
            </div>
            <div class="col-md-6">
                <img src="img/logo1.jpg" class="img-fluid" alt="Imagen de la empresa Energy & Water">
            </div>
        </div>

    </div>


    <!-- Sección Nuestros Servicios (Javi)-->

    <div id="servicios" class="container">
        <div class="row">
            <h2 class="servicios" id="toggleServicios"> nuestros servicios <img src="img/flecha-hacia-abajo.png" alt=""
                    class="img-footer"> </h2>


            <div class="col-md-3 serviciosContent" style="display: none;">
                <div class="card h-100">
                    <img class="img-services" src="img/32.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Sala de Bombas</h5>
                        <p class="card-text">Instalamos, reparamos y revisamos todo tipo de bombas hidráulicas, tanto
                            centrífugas como periféricas. Nos encargamos del ajuste de válvulas, el cambio de sellos
                            mecánicos, el equilibrsado de rotores y la limpieza de impulsores.</p>
                    </div>

                </div>
            </div>

            <div class="col-md-3 serviciosContent" style="display: none;">
                <div class="card h-100">
                    <img class="img-services" src="img/36.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Grupo Electrógeno</h5>
                        <p class="card-text">Instalamos, reparamos y revisamos todo tipo de grupos electrógenos. Nos
                            encargamos de la instalación de los motores, el mantenimiento de los sistemas de control y
                            la reparación de averías eléctricas.</p>
                    </div>

                </div>
            </div>

            <div class="col-md-3 serviciosContent" style="display: none;">
                <div class="card h-100">
                    <img class="img-services" src="img/42.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Aire Acondicionado </h5>
                        <p class="card-text">Instalamos, reparamos y mantenemos sistemas de aire acondicionado para
                            hogares, oficinas y espacios comerciales. Nos especializamos en la instalación de unidades
                            de alta eficiencia y en la reparación de averías.</p>
                    </div>

                </div>
            </div>

            <div class="col-md-3 serviciosContent" style="display: none;">
                <div class="card h-100">
                    <img class="img-services" src="img/35.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Mantenimiento Industrial</h5>
                        <p class="card-text">Ofrecemos servicios de mantenimiento industrial para empresas de diversos
                            sectores. Realizamos mantenimiento preventivo y correctivo en maquinaria, equipos y
                            sistemas industriales.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <br><br>



    <!-- Sección Equipo (Fabián)-->

      <!-- Sección Galería-->


      <section class="galery-section" id="galeria">
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Galería</h4>
                        <p class="text-muted">Agregue información sobre el álbum a continuación, el autor o cualquier
                            otro
                            contexto de fondo. Haz que sea de unas pocas oraciones para que la gente pueda recoger
                            algunos
                            datos informativos. Luego, enlácelos a algunos sitios de redes sociales o información de
                            contacto.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contacto</h4>
                        <ul class="list-unstyled">
                            <li><a href="" class="text-white">Seguir en Twitter</a></li>
                            <li><a href="https://web.facebook.com/ENERGYANDWATERservices?locale=es_LA%7D"
                                    class="text-white" target="_blank">Siguenos en Facebook</a></li>
                            <li><a href="mailto:contacto@energyandwater.cl" class="text-white">Envíame un Email</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                        </path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                    <strong>Album</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        </header>
        <main>
            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">Visita nuestra galería</h1>
                        <p class="lead text-muted">Te invitamos a que puedas visitar nuestra galería de imagnes, con
                            algunos
                            de nuestros trabajos realizados.</p>
                    </div>
                </div>
            </section>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6 g-3">

                    <!-- Filas Superiores -->    
                    <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/img15.jpg" class="card-img-top" alt="Descripción de la imagen">
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/img17.jpg" class="card-img-top" alt="Descripción de la imagen">
                               
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/28.jpg" class="card-img-top" alt="Descripción de la imagen">
                                
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/45.jpg" class="card-img-top" alt="Descripción de la imagen">
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/44.jpg" class="card-img-top" alt="Descripción de la imagen">
                               
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/36.jpg" class="card-img-top" alt="Descripción de la imagen">
                                
                            </div>
                        </div>

                        <!--Filas de abajo -->
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/img16.jpg" class="card-img-top" alt="Descripción de la imagen">
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/49.jpg" class="card-img-top" alt="Descripción de la imagen">
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/48.jpg" class="card-img-top" alt="Descripción de la imagen">
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/33.jpg" class="card-img-top" alt="Descripción de la imagen">
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/27.jpg" class="card-img-top" alt="Descripción de la imagen">
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/img10.jpg" class="card-img-top" alt="Descripción de la imagen">
                                
                            </div>
                        </div>

                    </div>
                </div>
        </main>

        <div class="container">
            <p class="float-end mb-1">
                <a href="#"><img src="img/flecha-arriba.png" alt="" class="img-footer"></a>
            </p>

        </div>
    </section>

    <!-- Sección mapa (revisar el codigo)-->
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="map-form1">
                <h2 id="formulario">Donde Encontrarnos</h2>
                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                    <script>(function () {
                            var setting = { "query": "Avenida Manquehue Sur 520, oficina 205, Santiago, Las Condes, Chile", "width": 500, "height": 400, "satellite": false, "zoom": 16, "placeId": "ElZBdi4gTWFucXVlaHVlIFN1ciA1MjAsIG9maWNpbmEgMjA1LCBTYW50aWFnbywgTGFzIENvbmRlcywgUmVnacOzbiBNZXRyb3BvbGl0YW5hLCBDaGlsZSInGiUKFgoUChIJk7TGIuXOYpYR3InGUMQY1f4SC29maWNpbmEgMjA1", "cid": "0x8f36659d3dd185dc", "coords": [-33.4112472, -70.56594439999999], "cityUrl": "/chile/santiago", "cityAnchorText": "Mapa de Santiago de Chile, Santiago Metropolitan, Chile", "lang": "es", "queryString": "Avenida Manquehue Sur 520, oficina 205, Santiago, Las Condes, Chile", "centerCoord": [-33.4112472, -70.56594439999999], "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3", "embed_id": "1106576" };
                            var d = document;
                            var s = d.createElement('script');
                            s.src = 'https://1map.com/js/script-for-user.js?embed_id=1106576';
                            s.async = true;
                            s.onload = function (e) {
                                window.OneMap.initMap(setting)
                            };
                            var to = d.getElementsByTagName('script')[0];
                            to.parentNode.insertBefore(s, to);
                        })();</script><a href="https://1map.com/es/map-embed">1 Map</a>
                </div>
            </div>


            <!-- Sección Formulario (Mathias)-->

            <div class="col-md-6" id="map-form2">
                <h2 id="formulario">Formulario de Contacto</h2>

                <form id="contactForm" onsubmit="return ValidarFormulario()">
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" id="nombre" name="nombre" required placeholder="Ingrese nombre"><br>

                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required placeholder="Ingrese correo"><br>

                    <label for="direccion">Dirección:</label><br>
                    <input type="text" id="direccion" name="direccion" required placeholder="Ingrese direccion"><br>

                    <label for="mensaje">Mensaje:</label><br>
                    <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br>

                    <label for="servicio">Servicio:</label><br>
                    <select id="servicio" name="servicio" required>
                        <option value="">Seleccione un servicio</option>
                        <option value="1">Mantenimiento aire acondicionado</option>
                        <option value="2">Mantenimiento sala de calderas</option>
                        <option value="3">Mantenimiento grupo electrogeno</option>
                        <option value="4">Mantenimiento sala de bombas</option>
                    </select><br>

                    <!-- Checkbox para aceptar los términos y condiciones -->
                    <input type="checkbox" id="terminos" name="terminos" required>
                    <label for="terminos" data-bs-toggle="modal" data-bs-target="#terminosModal">Acepto los términos y
                        condiciones</label><br>

                    <button class="btn btn-secondary" type="submit">Enviar Mensaje</button>
                </form>

                <!-- Modal -->
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <p>Mensaje enviado exitosamente.</p>
                        <button class="accept-btn" onclick="closeModal()">Aceptar</button>
                    </div>
                </div>

                <!-- Modal para los términos y condiciones -->
                <div class="modal fade" id="terminosModal" tabindex="-1" aria-labelledby="terminosModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="terminosModalLabel">Términos y Condiciones</h5>
                                <!-- Botón para cerrar el modal -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Contenido de los términos y condiciones -->
                                <p><strong>Términos y Condiciones de EnergyandWater</strong></p>

                                <p>¡Bienvenido a EnergyandWater! Estos términos y condiciones ("Términos") rigen tu
                                    acceso
                                    y uso de los servicios ofrecidos por EnergyandWater para mantenimientos en
                                    climatización, electricidad y obras menores de construcción (en adelante, los
                                    "Servicios"). Al acceder o utilizar nuestros Servicios, aceptas estar sujeto a estos
                                    Términos.</p>

                                <h2>Servicios</h2>
                                <ul>
                                    <li>1.1. EnergyandWater proporciona servicios de mantenimiento en climatización,
                                        electricidad y obras menores de construcción.</li>
                                    <li>1.2. Nos esforzamos por brindar servicios de alta calidad, pero no garantizamos
                                        que
                                        nuestros servicios cumplan con tus expectativas en todo momento.</li>
                                </ul>

                                <h2>Responsabilidades del Usuario</h2>
                                <ul>
                                    <li>2.1. Al utilizar nuestros servicios, aceptas proporcionar información precisa y
                                        actualizada sobre tu situación y necesidades.</li>
                                    <li>2.2. Eres responsable de mantener la confidencialidad de cualquier información
                                        de inicio
                                        de sesión y de todas las actividades que ocurran en tu cuenta.</li>
                                </ul>

                                <h2>Pagos</h2>
                                <ul>
                                    <li>3.1. Los precios de nuestros servicios se indican en nuestra plataforma y pueden
                                        estar
                                        sujetos a cambios sin previo aviso.</li>
                                    <li>3.2. Los pagos se deben realizar de acuerdo con los términos establecidos en
                                        nuestra
                                        plataforma.</li>
                                </ul>

                                <h2>Cancelaciones y Reembolsos</h2>
                                <ul>
                                    <li>4.1. Puedes cancelar o reprogramar los servicios programados con un aviso
                                        previo, sujeto
                                        a nuestras políticas de cancelación.</li>
                                    <li>4.2. Los reembolsos se procesarán de acuerdo con nuestras políticas de reembolso
                                        establecidas.</li>
                                </ul>

                                <h2>Propiedad Intelectual</h2>
                                <ul>
                                    <li>5.1. EnergyandWater retiene todos los derechos de propiedad intelectual
                                        relacionados con
                                        los servicios, incluyendo pero no limitado a, el contenido, marcas comerciales,
                                        y
                                        software utilizado.</li>
                                </ul>

                                <h2>Limitación de Responsabilidad</h2>
                                <ul>
                                    <li>6.1. EnergyandWater no será responsable por ningún daño directo, indirecto,
                                        incidental,
                                        especial, consecuente o punitivo que surja del uso de nuestros servicios.</li>
                                </ul>

                                <h2>Modificaciones</h2>
                                <ul>
                                    <li>7.1. Nos reservamos el derecho de modificar estos Términos en cualquier momento.
                                        Los
                                        cambios entrarán en vigor inmediatamente después de su publicación en nuestra
                                        plataforma.</li>
                                </ul>

                                <h2>Ley Aplicable</h2>
                                <ul>
                                    <li>8.1. Estos Términos se rigen por las leyes del país o región donde operamos.
                                    </li>
                                </ul>

                                <p>Gracias por elegir EnergyandWater para tus necesidades de mantenimiento en
                                    climatización, electricidad y obras menores de construcción. Si tienes alguna
                                    pregunta
                                    sobre estos Términos, no dudes en contactarnos.</p>
                            </div>

                            <div class="modal-footer">
                                <!-- Botón para aceptar los términos y condiciones -->
                                <button type="button" class="btn btn-primary"
                                    onclick="aceptarTerminos()">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Seccion preguntas frecuentes-->
            <main id="preguntas">
                <h2 class="titulo">Preguntas Frecuentes Energy And Water SPA</h2>


                <div class="preguntas">

                    <!-- Preguntas Frecuentes-->

                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Cómo solicito una cotización? <img src="./img/suma.svg"
                                alt="Abrir Respuesta" /></p>
                        <p class="respuesta">Puedes contactarnos al correo Contacto@energyandwater.cl o al +56232569798.
                        </p>
                    </div>
                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Necesitas visita técnica? <img src="./img/suma.svg"
                                alt="Abrir Respuesta" /></p>
                        <p class="respuesta">Puedes solicitar visita técnica para evaluación mediante correo electrónico
                            Contacto@energyandwater.cl o al +56232569798</p>
                    </div>

                    <div class="contenedor-pregunta">
                        <p class="pregunta">¿Qué tipo de aire acondicionado pueden revisar? <img src="./img/suma.svg"
                                alt="Abrir Respuesta" /></p>
                        <p class="respuesta">Revisamos, reparamos e instalamos equipos domiciliarios e industriales.</p>
                    </div>
                </div>




            </main>



        </div>
    </div>





    <!-- Sección footer -->
    <footer class="text-center text-white" style="background-color: #6f6f6f ;">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Iframe -->
            <H2>conócenos</H2>
            <section class="footer-">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="ratio ratio-16x9">
                            <iframe class="shadow-1-strong rounded"
                                src="https://www.youtube.com/embed/mfpyqXPnozY?si=7lmN8wW9upNhz-0l"
                                title="YouTube video" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Section: Iframe -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #366a87;">
            <a href="https://web.facebook.com/ENERGYANDWATERservices?locale=es_LA%7D" target="blank"><img
                    src="img/facebook.png" alt="facebook" class="img-footer"></a>
            <a href="https://www.instagram.com/energyandwatercl/" target="_blank"><img src="img/instagram.png"
                    alt="instagram" class="img-footer"></a>
            <a href="https://wa.me/56950162622" target="_blank"><img src="img/whatsapp.png" alt="wsp"
                    class="img-footer"></a>
            <a href="mailto:contacto@energyandwater.cl "><img src="img/email.png" target="_blank" class="img-footer">
            </a>
            <p> Energy & Water todos los Derechos Reservados.</p>



        </div>
        <!-- Copyright -->
    </footer>


  



</body>

</html>
<script src="js/preguntasFrecuentes.js"></script>
<script src="js/categorias.js"></script>
<script src="js/script2.js"></script>
<script src="js/acordeon.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></scrip >
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>