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
        <section class="container text-center mt-3">
            <h4 class="p-3 rounded text-white bg-info">Conoce nuestros principales centros de atención</h4>
            <div class="row d-flex align-items-center">
                <div class="col-xl-3 mt-3">
                    <img class="img-fluid rounded" src="img/sanatorios/angelus.png" alt="angelus">
                </div>
                <div class="col-xl-3 mt-3">
                    <img class="img-fluid rounded" src="img/sanatorios/bazterrica.png" alt="bazterrica">
                </div>
                <div class="col-xl-3 mt-3">
                    <img class="img-fluid rounded" src="img/sanatorios/cemic.png" alt="cemic">
                </div>
                <div class="col-xl-3 mt-3">
                    <img class="img-fluid rounded" src="img/sanatorios/fundacion-favaloro.png" alt="fundacion-favaloro">
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-xl-3 mt-3">
                    <img class="img-thumbail img-fluid rounded" src="img/sanatorios/hospital-aleman.png"
                        alt="hospital-aleman">
                </div>
                <div class="col-xl-3 mt-3">
                    <img class="img-thumbail img-fluid rounded" src="img/sanatorios/hospital-austral.jpg"
                        alt="hospital-austral">
                </div>
                <div class="col-xl-3 mt-3">
                    <img class="img-thumbail img-fluid rounded" src="img/sanatorios/hospital-britanico.jpg"
                        alt="hospital-britanico">
                </div>
                <div class="col-xl-3 mt-3">
                    <img class="img-thumbail img-fluid rounded" src="img/sanatorios/hospital-italiano.jpg"
                        alt="hospital-italiano">
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-xl-3 mt-3">
                    <img class="img-thumbail img-fluid rounded" src="img/sanatorios/ima.jpg" alt="ima">
                </div>
                <div class="col-xl-3 mt-3">
                    <img class="img-thumbail img-fluid rounded" src="img/sanatorios/juncal.jpg" alt="juncal">
                </div>
                <div class="col-xl-3 mt-3">
                    <img class="img-thumbail img-fluid rounded" src="img/sanatorios/las-lomas.jpg" alt="las-lomas">
                </div>
                <div class="col-xl-3 mt-3">
                    <img class="img-thumbail img-fluid rounded" src="img/sanatorios/modelo-moron.jpg"
                        alt="modelo-moron">
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-xl-3 mt-3">
                    <img class="img-thumbail img-fluid rounded" src="img/sanatorios/otamendi.png" alt="otamendi">
                </div>
                <div class="col-xl-3 mt-3">
                    <img class="img-thumbail img-fluid rounded" src="img/sanatorios/san-camilo.png" alt="san-camilo">
                </div>
                <div class="col-xl-3 mt-3">
                    <img class="img-thumbail img-fluid rounded" src="img/sanatorios/san-juan-de-dios.jpg"
                        alt="san-juan-de-dios">
                </div>
                <div class="col-xl-3 mt-3">
                    <img class="img-thumbail img-fluid rounded" src="img/sanatorios/san-lucas.jpg" alt="san-lucas">
                </div>
            </div>
        </section>
        <section class="container text-center mt-4">
            <h4 class="bg-info rounded p-3 text-white" class="p-3">Ahora podes <a href="pdf/Sanatorios - Abril 2019.pdf"
                    class="text-danger" target="_blank">ver la cartilla</a> con los principales
                centros de atención del país</h4>
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