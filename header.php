<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		urbandeli
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
    </head>
    <body class="page-login">
        <?php include('svg-defs.svg'); ?>
        <div class="page-wrap">
            <header class="header">
                <div class="header--top">
                    <div class="wrap normal">
                        <div class="header__mobile--icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.icon--mobile -->
                        <a href="index.php" title="Urban Deli" class="header__logo">
                            <img src="img/logo.svg" alt="Urban Deli Logo">
                        </a>
                        <div class="header--right">
                            <a href="carro-de-compras.php" title="Ir al carro de compras" class="header__compras">
                                <svg><use xlink:href="#shape-carro-compras" /></svg>
                                <p class="header__compras__items">10+</p><!-- /.header__compras__items -->
                            </a><!-- /.header__compras -->
                            <form action="page-result.php" class="header__buscador">
                                <div class="buscador--icon">
                                    <svg><use xlink:href="#shape-lupa" /></svg>
                                </div><!-- /.buscador--icon -->
                                <div class="input-group">
                                    <input type="text" class="input-search">
                                </div><!-- /.input-group -->
                                <div class="send-group">
                                    <input type="submit" value=" ">
                                </div><!-- /.send-group -->
                            </form><!-- /.header__buscador -->
                            <div class="seach__close">
                                <svg><use xlink:href="#shape-close" /></svg>
                            </div><!-- /.seach__close -->
                        </div><!-- /.header--right -->
                    </div><!-- /.wrap -->
                </div><!-- /.header--top -->
                <div class="header--bottom">
                    <div class="wrap normal">
                        <a href="#" title="Cerrar sesión" class="logout">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="475.2px" height="475.2px" viewBox="0 0 475.2 475.2" enable-background="new 0 0 475.2 475.2" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M405.6,69.6C360.7,24.7,301.1,0,237.6,0s-123.1,24.7-168,69.6S0,174.1,0,237.6s24.7,123.1,69.6,168s104.5,69.6,168,69.6 s123.1-24.7,168-69.6s69.6-104.5,69.6-168S450.5,114.5,405.6,69.6z M386.5,386.5c-39.8,39.8-92.7,61.7-148.9,61.7 s-109.1-21.9-148.9-61.7c-82.1-82.1-82.1-215.7,0-297.8C128.5,48.9,181.4,27,237.6,27s109.1,21.9,148.9,61.7 C468.6,170.8,468.6,304.4,386.5,386.5z"/>
                                        <path d="M342.3,132.9c-5.3-5.3-13.8-5.3-19.1,0l-85.6,85.6L152,132.9c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l85.6,85.6 l-85.6,85.6c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4l85.6-85.6l85.6,85.6c2.6,2.6,6.1,4,9.5,4 c3.5,0,6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1l-85.4-85.6l85.6-85.6C347.6,146.7,347.6,138.2,342.3,132.9z"/>
                                    </g>
                                </g>
                            </svg>
                            <span class="logout__text">Cerrar sesión</span>
                        </a>
                        <nav class="header__menu--top">
                            <a href="page-tiendas.php" title="Tiendas">Tiendas</a>
                            <a href="page-novedades.php" title="Novedades">Novedades</a>
                            <a href="page-contacto.php" title="Contacto" class="active">Contacto</a>
                            <a href="page-ingresar.php" title="Mi Cuenta">Mi Cuenta</a>
                        </nav><!-- /.header__menu--top -->
                        <ul class="header__menu--bottom">
                            <li class="menu--bottom__item menu-item-has-children">
                                <div class="item__block">
                                    <div class="menu__item__media">
                                        <img src="assets/_0001_arroz_verde.png" alt="Titulo">
                                    </div><!-- /.menu__item__media -->
                                    <a href="#" title="titulo">
                                        Comida Caliente
                                    </a>
                                </div><!-- /.item__block -->
                                <div class="icon--submenu">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px" height="17px" viewBox="0 0 17 17" enable-background="new 0 0 17 17" xml:space="preserve"><g><circle opacity="0.5" fill="none" stroke-miterlimit="10" cx="8.5" cy="8.5" r="8"/><g><path d="M9.1,5.3v2.8h2.6v0.9H9.1v2.8H8.2V8.9H5.5V8.1h2.6V5.3H9.1z"/></g></g></svg>
                                </div><!-- /.icon--submenu -->
                                <ul class="menu--bottom__submenu">
                                    <li class="submenu__item">
                                        <a href="template-productos.php" title="Comida Caliente">Hot Wraps</a>
                                        <a href="template-productos.php" title="Comida Caliente">Hot Pots</a>
                                        <a href="template-productos.php" title="Comida Caliente">Platos</a>
                                        <a href="template-productos.php" title="Comida Caliente">Quiches</a>
                                        <a href="template-productos.php" title="Comida Caliente">Sopas</a>
                                    </li><!-- /.submenu__item -->
                                </ul><!-- /.menu--bottom__submenu -->
                            </li><!-- /.menu--bottom__item -->
                            <li class="menu--bottom__item">
                                <a href="template-productos.php" title="Comida Caliente">
                                    <div class="menu__item__media">
                                        <img src="assets/_0009_camaron_pulpo.png" alt="Titulo">
                                    </div><!-- /.menu__item__media -->
                                    Ensaladas
                                </a>
                            </li><!-- /.menu--bottom__item -->
                            <li class="menu--bottom__item current-menu-item">
                                <a href="template-productos.php" title="Comida Caliente">
                                    <div class="menu__item__media">
                                        <img src="assets/_0002_atun.png" alt="Titulo">
                                    </div><!-- /.menu__item__media -->
                                    Sandwiches
                                </a>
                            </li><!-- /.menu--bottom__item -->
                            <li class="menu--bottom__item">
                                <a href="template-productos.php" title="Comida Caliente">
                                    <div class="menu__item__media">
                                        <img src="assets/_0045_salmon_roll.png" alt="Titulo">
                                    </div><!-- /.menu__item__media -->
                                    Sushi y mas
                                </a>
                            </li><!-- /.menu--bottom__item -->
                            <li class="menu--bottom__item">
                                <a href="template-productos.php" title="Comida Caliente">
                                    <div class="menu__item__media">
                                        <img src="assets/_0058_wrap_italiano.png" alt="Titulo">
                                    </div><!-- /.menu__item__media -->
                                    Wrap
                                </a>
                            </li><!-- /.menu--bottom__item -->
                            <li class="menu--bottom__item">
                                <a href="template-productos.php" title="Comida Caliente">
                                    <div class="menu__item__media">
                                        <img src="assets/_0054_tres_leches.png" alt="Titulo">
                                    </div><!-- /.menu__item__media -->
                                    Postres
                                </a>
                            </li><!-- /.menu--bottom__item -->
                            <li class="menu--bottom__item">
                                <a href="template-productos.php" title="Comida Caliente">
                                    <div class="menu__item__media">
                                        <img src="assets/_0038_pollo_palta.png" alt="Titulo">
                                    </div><!-- /.menu__item__media -->
                                    A toda hora
                                </a>
                            </li><!-- /.menu--bottom__item -->
                            <li class="menu--bottom__item">
                                <div class="menu__item__media">
                                    <img src="assets/_0000_amerindia.png" alt="Titulo">
                                </div><!-- /.menu__item__media -->
                                <a href="template-productos.php" title="Comida Caliente">Para tomar</a>
                            </li><!-- /.menu--bottom__item -->
                            <li class="menu--bottom__item menu-item-has-children">
                                <div class="item__block">
                                    <div class="menu__item__media">
                                        <img src="assets/_0001_arroz_verde.png" alt="Titulo">
                                    </div><!-- /.menu__item__media -->
                                    Office Pack
                                </div><!-- /.item__block -->
                                <div class="icon--submenu">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px" height="17px" viewBox="0 0 17 17" enable-background="new 0 0 17 17" xml:space="preserve"><g><circle opacity="0.5" fill="none" stroke-miterlimit="10" cx="8.5" cy="8.5" r="8"/><g><path d="M9.1,5.3v2.8h2.6v0.9H9.1v2.8H8.2V8.9H5.5V8.1h2.6V5.3H9.1z"/></g></g></svg>
                                </div><!-- /.icon--submenu -->
                                <ul class="menu--bottom__submenu">
                                    <li class="submenu__item">
                                        <a href="template-productos.php" title="Comida Caliente">Hot Wraps</a>
                                        <a href="template-productos.php" title="Comida Caliente">Hot Pots</a>
                                        <a href="template-productos.php" title="Comida Caliente">Platos</a>
                                        <a href="template-productos.php" title="Comida Caliente">Quiches</a>
                                        <a href="template-productos.php" title="Comida Caliente">Sopas</a>
                                    </li><!-- /.submenu__item -->
                                </ul><!-- /.menu--bottom__submenu -->
                            </li><!-- /.menu--bottom__item -->
                        </ul><!-- /.header__menu--bottom -->
                    </div><!-- /.wrap -->
                </div><!-- /.header--bottom -->
            </header><!-- /.header -->