<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
        include('includes/head.php')
    ?>
    <title>Guia Salud Web</title>
</head>

<body>
    <main>
        <?php 
            include('includes/navbar.php')
        ?>
        <section>
            <img src="img/banner/banner-1.jpg" class="d-block img-fluid w-100" alt="familia">
        </section>
        <article class="text-center p-3 bg-secondary">
            <h3>¡NUEVO! Plan GEN 18-35</h3>
            <a href="gen.php" class="btn btn-success btn-lg btn-block container">
                Conocelo
            </a>
        </article>
        <section class="container mt-3">
            <h4 class="text-center p-2 rounded bg-info text-white">Tenemos un plan para cada necesidad</h4>
            <div class="row mt-3">
                <div class="col-xl-4">
                    <div class="card h-100">
                        <div class="card-header text-white">
                            <h5 class="text-center">Planes a Medida</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>▶ Planes para Empresas</li>
                                <li>▶ Desregulación de aportes</li>
                                <li>▶ Planes para jóvenes</li>
                                <li>▶ Autonómos y Monotributistas</li>
                                <li>▶ Relación de Dependencia.</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="planes.php" class="text-center btn btn-primary btn-block">
                                Conozca nuestros planes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card  h-100">
                        <div class="card-header text-white">
                            <h5 class="text-center">Cobertura</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>▶ Descuentos en farmacias del 40/50%</li>
                                <li>▶ Odontología, prótesis e implantes</li>
                                <li>▶ Cirugía refractiva</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="pdf/Sanatorios - Abril 2019.pdf" target="_blank"
                                class="text-center btn btn-primary btn-block">
                                Descargar PDF <i class="fas fa-arrow-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card h-100">
                        <div class="card-header text-white">
                            <h5 class="text-center">Clínicas y Sanatorios</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>▶ Más de 90 clínicas y sanatorios</li>
                                <li>▶ Internación con habitación individual sin costo, ni topes de días</li>
                                <li>▶ Accede a todos los beneficios solo con tu credencial de Sancor.</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="sanatorios.php" class="text-center btn btn-primary btn-block">
                                Conozca nuestras clinicas
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include('includes/social.php');
            include('includes/footer.php')
        ?>
        <!-- Back to top button -->
        <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>
        <!--- Boton fijo de Whatsapp --->
        <div class="btn-whatsapp">
            <a href="https://wa.me/5491134208269?text=Hola!%20Quiero%20que%20me%20asesoren." class="float"
                target="_blank" title="Enviar WhatsApp">
                <i class="fab fa-whatsapp my-float"></i>
            </a>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="js/app.js"></script>
    </main>
</body>

</html>