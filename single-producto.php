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
<div class="banner--single">
    <div class="banner__media" style="background-image: url(assets/bg-Sandwich.jpg);"></div><!-- /.banner__media -->
    <div class="wrap">
        <a href="template-productos.php" title="Volver" class="return">Volver</a>
        <div class="breadcrumbs">
            <a href="index.php">Home</a>
            <p>/</p>
            <a href="template-productos.php" title="Ensaladas">Ensaladas</a>
            <p>/</p>
            <p>Ensalada Salmón Cous cous</p>
        </div><!-- /.breadcrumbs -->
    </div><!-- /.wrap -->
</div><!-- /.banner--productos -->
<div class="wrap single--productos">
    <div class="item item--single">
        <div class="border--style zoom-box">
            <div class="nonstock">Sin Stock</div><!-- /.nonstock -->
            <img src="assets/_0001_arroz_verde.png" alt="Arroz" class="zoom" data-zoom-image="assets/_0001_arroz_verde.png">
            <span class="top"></span>
            <span class="left"></span>
            <span class="right"></span>
            <span class="bot"></span>
        </div><!-- /.border--style.border-2 -->
        <div class="block--right">
            <h2 class="item__title">Baguette serrano</h2><!-- /.item__title -->
            <div class="item__text">
                <p>
                    Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
                </p>
            </div><!-- /.item__text -->
            <div class="item__flex">
                <div class="item__valor">
                    <p class="item__price">$3.200</p><!-- /.item__price -->
                    <p class="sale--text">$2.240</p><!-- /.sale--text -->
                </div><!-- /.item__valor -->
            </div><!-- /.item__flex -->
            <div class="single--box">
                <div class="single__box__title">
                    <p>Sabor</p>
                </div><!-- /.single__box__title -->
                <div class="flavour">
                    <select name="sabor" id="sabor">
                        <option value="Mora">Mora</option>
                        <option value="limon">Limon</option>
                    </select>
                </div><!-- /.quantity -->
            </div><!-- /.single--box -->
            <div class="single--box">
                <div class="single__box__title">
                    <p>Cantidad</p>
                </div><!-- /.single__box__title -->
                <div class="quantity">
                    <span class="dec-numb"><svg><use xlink:href="#shape-less" /></svg></span>
                    <input type="text">
                    <span class="inc-numb"><svg><use xlink:href="#shape-plus" /></svg></span>
                </div><!-- /.quantity -->
                <a href="carro-de-compras.php" title="Titulo" class="item__add">Agregar al carro</a>
            </div><!-- /.single--box -->
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
        </div><!-- /.block--right -->
    </div><!-- /.item -->
</div><!-- /.wrap -->
<div class="related">
    <div class="wrap">
        <h1>Te recomendamos</h1><!-- /.title -->
        <div class="slider border--dark">
            <ul class="slides">
                <li>
                    <div class="item item--define">
                        <a href="single-producto.php" title="Titulo" class="border--style border-1">
                            <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                            <span class="top"></span>
                            <span class="left"></span>
                            <span class="right"></span>
                            <span class="bot"></span>
                        </a><!-- /.border--style.border-2 -->
                        <h2 class="item__title">
                            <a href="single-producto.php" title="Titulo">
                                Baguette serrano
                            </a>
                        </h2><!-- /.item__title -->
                        <div class="item__text">
                            <p>
                                Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
                            </p>
                        </div><!-- /.item__text -->
                        <div class="item__flex">
                            <div class="item__valor">
                                <p class="item__price">$3.200</p><!-- /.item__price -->
                                <p class="sale--text">$2.240</p><!-- /.sale--text -->
                            </div><!-- /.item__valor -->
                            <a href="carro-de-compras.php" title="Titulo" class="item__add">Agregar al carro</a>
                        </div><!-- /.item__flex -->
                    </div><!-- /.item -->
                </li>
                <li>
                    <div class="item item--define">
                        <a href="single-producto.php" title="Titulo" class="border--style border-1">
                            <img src="assets/_0004_baguette_roast_beef.png" alt="Arroz">
                            <span class="top"></span>
                            <span class="left"></span>
                            <span class="right"></span>
                            <span class="bot"></span>
                        </a><!-- /.border--style.border-2 -->
                        <h2 class="item__title">
                            <a href="single-producto.php" title="Titulo">
                                Baguette serrano
                            </a>
                        </h2><!-- /.item__title -->
                        <div class="item__text">
                            <p>
                                Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
                            </p>
                        </div><!-- /.item__text -->
                        <div class="item__flex">
                            <div class="item__valor">
                                <p class="item__price">$3.200</p><!-- /.item__price -->
                                <p class="sale--text">$2.240</p><!-- /.sale--text -->
                            </div><!-- /.item__valor -->
                            <a href="carro-de-compras.php" title="Titulo" class="item__add">Agregar al carro</a>
                        </div><!-- /.item__flex -->
                    </div><!-- /.item -->
                </li>
                <li>
                    <div class="item item--define">
                        <a href="single-producto.php" title="Titulo" class="border--style border-1">
                            <img src="assets/_0011_cebiche.png" alt="Arroz">
                            <span class="top"></span>
                            <span class="left"></span>
                            <span class="right"></span>
                            <span class="bot"></span>
                        </a><!-- /.border--style.border-2 -->
                        <h2 class="item__title">
                            <a href="single-producto.php" title="Titulo">
                                Baguette serrano
                            </a>
                        </h2><!-- /.item__title -->
                        <div class="item__text">
                            <p>
                                Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
                            </p>
                        </div><!-- /.item__text -->
                        <div class="item__flex">
                            <div class="item__valor">
                                <p class="item__price">$3.200</p><!-- /.item__price -->
                                <p class="sale--text">$2.240</p><!-- /.sale--text -->
                            </div><!-- /.item__valor -->
                            <a href="carro-de-compras.php" title="Titulo" class="item__add">Agregar al carro</a>
                        </div><!-- /.item__flex -->
                    </div><!-- /.item -->
                </li>
                <li>
                    <div class="item item--define">
                        <a href="single-producto.php" title="Titulo" class="border--style border-1">
                            <img src="assets/_0011_cebiche.png" alt="Arroz">
                            <span class="top"></span>
                            <span class="left"></span>
                            <span class="right"></span>
                            <span class="bot"></span>
                        </a><!-- /.border--style.border-2 -->
                        <h2 class="item__title">
                            <a href="single-producto.php" title="Titulo">
                                Baguette serrano
                            </a>
                        </h2><!-- /.item__title -->
                        <div class="item__text">
                            <p>
                                Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
                            </p>
                        </div><!-- /.item__text -->
                        <div class="item__flex">
                            <div class="item__valor">
                                <p class="item__price">$3.200</p><!-- /.item__price -->
                                <p class="sale--text">$2.240</p><!-- /.sale--text -->
                            </div><!-- /.item__valor -->
                            <a href="carro-de-compras.php" title="Titulo" class="item__add">Agregar al carro</a>
                        </div><!-- /.item__flex -->
                    </div><!-- /.item -->
                </li>
            </ul><!-- /.slides -->
        </div><!-- /.slider -->
    </div><!-- /.wrap -->
</div><!-- /.related -->
<?php include 'footer.php'; ?>