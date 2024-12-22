<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <!-- favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/ico.ico" type="image/x-icon">
    <?php wp_head(); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Cuentas de pago</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex contacto-ver-rifas">
                    <div class="me-3">+58 9 34345679</div>
                    <button class="btn btn-outline-success">Ver todas las rifas</button>
                </form>
                </div>
            </div>
        </nav>
    </header>
