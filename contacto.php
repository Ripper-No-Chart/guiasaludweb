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
        <section class="container mt-3">
            <div class="card">
                <div class="card-header text-white bg-info">
                    <h4 class="text-center">
                        Completá el formulario, y un asesor se contactará con
                        vos</h4>
                </div>
                <div class="card-body">
                    <form method="GET" action="mail.php" class="form-group">
                        <input type="text" placeholder="Nombres" class="form-control" name="nombre" required="required">
                        <input type="text" placeholder="Apellido" class="form-control mt-2" name="apellido"
                            required="required">
                        <input type="text" placeholder="Telefono" class="form-control mt-2" name="tel"
                            required="required">
                        <select name="option" class="form-control mt-2">
                            <option>Tenes obra social o prepaga?</option>
                            <option value="Obra Social">Obra Social</option>
                            <option value="Prepaga">Prepaga</option>
                            <option value="Ninguna">Ninguna</option>
                        </select>
                </div>
                <div class="card-footer">
                    <input type="submit" name="enviar" class=" btn btn-primary form-control">
                </div>
                </form>
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