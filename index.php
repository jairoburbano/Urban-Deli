<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		urbandeli
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 */
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<div class="banner">
    <!--NOTE: Revolution slider aqui-->
</div><!-- /.banner -->
<div class="wrap index">
    <h1 class="title">Más destacados</h1><!-- /.title -->
    <p class="down">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan.
    </p><!-- /.bajada -->
    <div class="wrap listado listado--home">
        <div class="item item--home">
            <div class="lightbox--block">
                <a href="single-producto.php" title="titulo" class="border--style">
                   <div class="nonstock">Sin Stock</div><!-- /.nonstock -->
                    <img src="assets/_0001_arroz_verde.png" alt="Arroz" class="zoom" data-zoom-image="assets/_0001_arroz_verde.png">
                    <span class="top"></span>
                    <span class="right"></span>
                    <span class="bot"></span>
                    <span class="left"></span>
                </a><!-- /.border--style -->
                <a href="#" title="titulo" class="category">Categoria</a>
                <h2>Promociones</h2>
            </div><!-- /.lightbox--block -->
            <div class="item__lightbox fast-view">
                <div class="ligthbox__content border--dark">
                    <div class="lightbox__media zoom-box">
                    </div><!-- /.lightbox__media -->
                    <div class="lightbox__text">
                        <h2>No te pierdas esto</h2>
                        <p>Continua en el segundo item</p>
                        <div class="lightbox__value quantity">
                            <p>$4.200</p>
                            <span class="dec-numb"><svg><use xlink:href="#shape-less" /></svg></span>
                            <input type="number">
                            <span class="inc-numb"><svg><use xlink:href="#shape-plus" /></svg></span>
                        </div><!-- /.lightbox__value quantity -->
                        <div class="flavour">
                            <select name="sabor" id="sabor">
                                <option value="Mora">Mora</option>
                                <option value="limon">Limon</option>
                            </select>
                        </div><!-- /.flavour -->
                        <a href="carro-de-compras.php" title="Titulo" class="item__add">Agregar al carro</a>
                        <a href="single-producto.php" class="small" title="Ver descripción completa">Ver descripción completa</a>
                    </div><!-- /.lightbox__text -->
                    <div class="lightbox__close"><svg><use xlink:href="#shape-cerrar" /></svg></div><!-- /.lightbox__close -->
                </div><!-- /.ligthbox__content border--dark fast-view -->
            </div><!-- /.item__lightbox -->
        </div><!-- /.item -->
        <div class="item item--home">
            <a href="single-producto.php" title="titulo" class="border--style">
                <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bot"></span>
                <span class="left"></span>
            </a><!-- /.border--style -->
            <a href="#" title="titulo" class="category">Categoria</a>
            <h2>30% off</h2>
            <p>Ensalada salmón cous cous</p>
        </div><!-- /.item -->
        <div class="item item--home">
            <div class="lightbox--block">
                <a href="single-producto.php" title="titulo" class="border--style">
                    <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                    <span class="top"></span>
                    <span class="right"></span>
                    <span class="bot"></span>
                    <span class="left"></span>
                </a><!-- /.border--style -->
                <a href="#" title="titulo" class="category">Categoria</a>
                <h2>$4.230</h2>
            </div><!-- /.lightbox--block -->
            <div class="item__lightbox fast-view">
                <div class="ligthbox__content border--dark">
                    <div class="lightbox__media">
                    </div><!-- /.lightbox__media -->
                    <div class="lightbox__text">
                        <h2>Nana Nana</h2>
                        <p>No te puedes perder el ultimo item</p>
                        <div class="lightbox__value quantity">
                            <p>$4.230</p>
                            <span class="dec-numb"><svg><use xlink:href="#shape-less" /></svg></span>
                            <input type="text">
                            <span class="inc-numb"><svg><use xlink:href="#shape-plus" /></svg></span>
                        </div><!-- /.lightbox__value quantity -->
                        <a href="carro-de-compras.php" title="Titulo" class="item__add">Agregar al carro</a>
                        <a href="single-producto.php" class="small" title="Ver descripción completa">Ver descripción completa</a>
                    </div><!-- /.lightbox__text -->
                    <div class="lightbox__close"><svg><use xlink:href="#shape-cerrar" /></svg></div><!-- /.lightbox__close -->
                </div><!-- /.ligthbox__content border--dark fast-view -->
            </div><!-- /.item__lightbox -->
        </div><!-- /.item -->
        <div class="item item--home">
            <div class="lightbox--block">
                <a href="single-producto.php" title="titulo" class="border--style">
                    <div class="sale">30%</div><!-- /.sale -->
                    <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                    <span class="top"></span>
                    <span class="right"></span>
                    <span class="bot"></span>
                    <span class="left"></span>
                </a><!-- /.border--style -->
                <a href="#" title="titulo" class="category">Categoria</a>
                <h2>$3.290</h2>
                <p>Ensalada salmón cous cous</p>
            </div><!-- /.lightbox--block -->
            <div class="item__lightbox fast-view">
                <div class="ligthbox__content border--dark">
                    <div class="lightbox__media">
                    </div><!-- /.lightbox__media -->
                    <div class="lightbox__text">
                        <h2>Batman! Batman! Batman!</h2>
                        <p>Gracias por tu tiempo</p>
                        <div class="lightbox__value quantity">
                            <p>$4.200</p>
                            <span class="dec-numb"><svg><use xlink:href="#shape-less" /></svg></span>
                            <input type="text">
                            <span class="inc-numb"><svg><use xlink:href="#shape-plus" /></svg></span>
                        </div><!-- /.lightbox__value quantity -->
                        <a href="carro-de-compras.php" title="Titulo" class="item__add">Agregar al carro</a>
                        <a href="single-producto.php" class="small" title="Ver descripción completa">Ver descripción completa</a>
                    </div><!-- /.lightbox__text -->
                    <div class="lightbox__close"><svg><use xlink:href="#shape-cerrar" /></svg></div><!-- /.lightbox__close -->
                </div><!-- /.ligthbox__content border--dark fast-view -->
            </div><!-- /.item__lightbox -->
        </div><!-- /.item -->
    </div><!-- /.wrap listado -->
    <div class="btn--more">
        <a href="page-novedades.php" title="titulo" class="btn">Más promociones</a>
    </div><!-- /.btn--more -->
</div><!-- /.wrap -->
<div class="banner--destacado" style="background-image: url(assets/fotos-59.jpg)">
    <div class="banner__text">
        <div class="border--text"></div><!-- /.border--text -->
        <img src="img/hoja.svg" alt="Hoja">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit Aenean euismod bibendum laoreet. Proin gravida dolor sit am
        </p>
    </div><!-- /.banner__text -->
</div><!-- /.banner--destacado -->
<?php include 'footer.php'; ?>