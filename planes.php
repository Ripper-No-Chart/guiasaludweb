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
            <h4 class="p-3 bg-info rounded text-white">Conoce nuestros planes y elegi el mas adecuado para vos y tu
                grupo familiar</h4>
            <div class="row">
                <div class="col-xl-6 mt-2">
                    <img class="img-fluid rounded" src="img/planes/s1000.png" alt="s1000">
                </div>
                <div class="col-xl-6 mt-2">
                    <img class="img-fluid rounded" src="img/planes/s1500.png" alt="s1500">
                </div>
                <div class="col-xl-6 mt-2">
                    <img class="img-fluid rounded" src="img/planes/s3000.png" alt="s3000">
                </div>
                <div class="col-xl-6 mt-2">
                    <img class="img-fluid rounded" src="img/planes/s3500.png" alt="s3500">
                </div>
                <div class="col-xl-6 mt-2">
                    <img class="img-fluid rounded" src="img/planes/s4500.png" alt="s4500">
                </div>
                <div class="col-xl-6 mt-2">
                    <img class="img-fluid rounded" src="img/planes/s5000.png" alt="s5000">
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