<?php
/**
 *
 *
 * @package		urbandeli
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = '';
$subpage = '';
$type = 'page';
$title = ' ';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap novedades">
    <h1 class="title">Novedades</h1><!-- /.title -->
    <div class="single__container">
        <div class="single__media border--style border-2">
            <img src="http://eskipaper.com/images/girls-with-glasses-pictures-1.jpg" alt="Titulo">
            <span class="top"></span>
            <span class="left"></span>
            <span class="right"></span>
            <span class="bot"></span>
        </div><!-- /.single__media -->
        <div class="single__content">
            <h1 class="main">Título de novedad</h1><!-- /.main -->
            <p class="bajada">
                Bajada de novedad
            </p><!-- /.bajada -->
            <blockquote>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes.
            </blockquote>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes.
            </p>
            <h1>Titulo 1</h1>
            <h2>Titulo 2</h2>
            <h3>Titulo 3</h3>
            <h4>Titulo 4</h4>
            <h5>Titulo 5</h5>
            <h6>Titulo 6</h6>
            <img src="http://hdwallpapergirls.com/assets/large/melissa-clarke-face-wallpaper.jpg" alt="Titulo">

            <div class="gallery gallery--small">
                <div class="slider__gallery js-slider__gallery">
                    <ul class="slides">
                        <li>
                            <img src="assets/bg-Sandwich.jpg" alt="Titulo">
                        </li>
                        <li>
                            <img src="assets/bg2.jpg" alt="Titulo">
                        </li>
                        <li>
                            <img src="assets/fotos-59.jpg" alt="Titulo">
                        </li>
                    </ul><!--.slides-->
                </div><!--.js-slider-->
                <div class="gallery__content">
                    <div class="gallery__controls clearfix">
                        <div class="gallery__controls__content">
                            <div class="gallery__fullscreen js-fullscreen">
                                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-fullscreen"></use></svg>
                            </div>
                            <div class="custom-controls-container"></div>
                        </div><!--.gallery__controls__content-->
                    </div><!--.gallery__controls-->
                    <div class="gallery__desc clearfix">
                        <div class="gallery__number">
                            <span class="current-slide"></span>/
                            <span class="total-slides"></span>
                        </div>
                        <div class="gallery__text">
                            <p>
                                Wolfgang Schuch: “La tecnología puede ser realmente fantástica, pero si no se tiene a los aliados indicados, dicha tecnología puede ser un fracaso”
                            </p>
                        </div><!--.galllery__text-->
                    </div><!--.galley__desc-->
                </div>
            </div><!--.gallery-->

            <div class="single--box">
                <div class="single__box__title">
                    <p>Compartir</p>
                </div><!-- /.single__box__title -->
                <nav class="share">
                    <a target="_blank" class="popup twitter" href="http://twitter.com/share?url=urbandeli.cl&text=Titulo">
                        <svg><use xlink:href="#shape-icon-twitter" /></svg>
                    </a>
                    <a target="_blank" class="popup facebook" href="http://www.facebook.com/sharer.php?u=urbandeli.cl&t=Titulo">
                        <svg><use xlink:href="#shape-icon-facebook" /></svg>
                    </a>
                    <a href="mailto:" target="_blank" title="Envialo a tus amigos" class="popup mail">
                        <svg><use xlink:href="#shape-icon-mail-2" /></svg>
                    </a>
                </nav><!-- /.share -->
            </div><!-- /.single--box -->
        </div><!-- /.single__content -->
    </div><!-- /.single__container -->
</div><!-- /.wrap single--novedades -->
<?php include 'footer.php'; ?>