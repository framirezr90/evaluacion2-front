<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/script.js">
    <title>Energy&Water <img src="img/logo.jpg" alt=""></title>
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
                                <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Energy and water SPA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#historia">Historia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#servicios">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#formulario">Contáctanos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    </section>
    <br>





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
                <img src="img/hero2.jpg" class="d-block w-100" alt="Hero 1">
                <div class="carousel-caption d-none d-md-block">
                    <h1>revisar texto</h1>
                    <p>Climatización, electricidad y obras menores en construcción.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img8.jpg" class="d-block w-100" alt="Hero 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Mantenimiento para edificios.</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img9.jpg" class="d-block w-100" alt="Hero 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Contamos con los mejores profesionales.</h5>
                    <p>Some representative placeholder content for the third slide.</p>
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
        <div class="row" >
            <div class="col-md-6">
                <h2>Quienes Somos</h2>
                <p>Bienvenido a Energy and Water SpA, empresa dedicada a la instalación y reparación de sistemas de
                    ventilación, calefacción, electricidad y construcción. Contamos con un equipo de profesionales
                    altamente cualificados y con amplia experiencia en el sector. Ofrecemos soluciones a medida para
                    cada cliente, garantizando la calidad y la seguridad de nuestros servicios. Contacta con nosotros y
                    solicita tu presupuesto sin compromiso. </p>
                <p>Somos una empresa fundada en 2018 con el objetivo de brindar servicios integrales de mantenimiento
                    para hogares, oficinas, comercios e industrias. </p>
                <h2>Nuestra misión</h2>
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
    <hr>
    <!-- Sección Nuestros Servicios (Javi)-->

    <div id="servicios" class="container">
        <div class="row">
            <h2 class="servicios">Nuestros Servicios</h2>

            <div class="col-md-3">
                <div class="card 4">
                    <img class="card-img-top" src="img/img4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Sala de Bombas</h5>
                        <p class="card-text">Instalamos, reparamos y revisamos todo tipo de bombas hidráulicas, tanto
                            centrífugas como periféricas. Nos encargamos del ajuste de válvulas, el cambio de sellos
                            mecánicos, el equilibrsado de rotores y la limpieza de impulsores.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/img10.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Grupo Electrogeno</h5>
                        <p class="card-text">Instalamos, reparamos y revisamos todo tipo de bombas hidráulicas, tanto
                            centrífugas como periféricas. Nos encargamos del ajuste de válvulas, el cambio de sellos
                            mecánicos, el equilibrsado de rotores y la limpieza de impulsores.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/img2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Aire Acondicionado</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/img5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <hr>

    <!-- Sección Clientes (Javi) -->
    <!-- Sección Equipo (Fabián)-->

    <!-- Sección mapa (revisar el codigo)-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 id="formulario" >Donde Encontrarnos</h2>
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
            <div class="col-md-6">
                <h2 id="formulario">Formulario de Contacto</h2>

                <form id="contactForm" onsubmit="return validateForm()">
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

                    <input type="checkbox" id="terminos" name="terminos" required>
                    <label for="terminos">Acepto los términos y condiciones</label><br>

                    <button type="submit">Enviar Mensaje</button>
                </form>

                <!-- Modal -->
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <p>Mensaje enviado exitosamente.</p>
                        <button class="accept-btn" onclick="closeModal()">Aceptar</button>
                    </div>
                </div>


            </div>





        </div>
    </div>

    <!-- Sección footer -->
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; 2024 Energy & Water, Todos los derechos reservados.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook" />
                            </svg></a></li>
                </ul>
            </div>
        </footer>
    </div>









</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>