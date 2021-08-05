<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">

    <!-- Estilos -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <title>María García - mantente en forma conmigo.</title>
</head>

<body>

    <header>

        <div class="container-fluid contacto">

            <div class="container">
                <div class="row p-1">
                    <div class="col-12 badge text-wrap text-md-center">
                        <p>Llámanos al 667 909 560 |
                            <a href="#">consulta@mariagarcianutricionista.com</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="container alturaImagen">
            <div class="row p-1">
                <div class="col-12">
                    <img class="img-fluid logo_image" src="<?php bloginfo('template_url') ?>/img/logo2.png" alt="">
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <div class="barra">
            <nav class="navbar navbar-expand-lg navbar-light bg-white menu-personalizado">
                <div class="container">

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto text-center menu-desk">

                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            
                        </ul>
                    </div> -->
                    <?php wp_nav_menu(array(
                        'theme_location' => 'superior',
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse text-center',
                        'container_id' => 'navbarSupportedContent',
                        'items_wrap' => '<ul class="navbar-nav mx-auto text-center menu-desk">%3$s</ul>',
                        'menu_class' => 'nav-item'
                    ) ); ?>
                </div>
            </nav>
        </div>
        <!-- Fin navbar -->

    </header>



    <!-- Parallax -->
    <div class="imagen parallax">
        <div class="imagen-web clearfix">

            <div class="frase-destacada">
                <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/frase-destacada.png" alt="Frase">
            </div>

        </div>
    </div>
    <!-- Fin parallax -->