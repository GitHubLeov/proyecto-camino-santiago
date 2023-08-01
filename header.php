<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> <?php bloginfo( 'description' ); ?></title>
    <?php wp_head();?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
    <script>
        $(document).ready(function(){
        $(".icono-hamburguesa").click(function(){
         $("#menu-camino-de-santiago .menu-item:not(.icono-hamburguesa)").toggleClass("visible");
        });
    });
    $(document).ready(function(){
        $(".icono-rutas").click(function(){
         $("#menu-menu-rutas-del-camino .menu-item:not(.icono-rutas)").toggleClass("visible");
        });
    });
    </script>
</head>
<body>
    <div id="principal">
        <header id="cabecera-nav" class="fila">
            <nav class="logo col-1-movil">
                 <a href="<?php site_url(); ?>"><?php if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                    }?></a>
            </nav>
            <nav id="navegacion-principal" class="col-12-tablet-vertical col-11-tablet-horizontal">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
            </nav>           
        </header>
        <header id="cabecera" class="fila">
            <div id="titulo" class="col-12-movil">
                    <h1>CAMINO VIVO</h1>  
                </div>
        </header>