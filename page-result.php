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
<div class="banner__result border--main">
    <h1 class="border--style border-5">
        Resultados para <span>Sandwiches</span>
        <span class="top"></span>
        <span class="left"></span>
        <span class="right"></span>
        <span class="bot"></span>
    </h1><!-- /.border--style border-4 -->
</div><!-- /.banner__result -->
<div class="wrap productos">
    <p class="results">20 resultados encontrados</p><!-- /.results -->
    <div class="wrap listado">
        <!--NOTE: Inicia Item-->
        <div class="item">
            <a href="single-producto.php" title="Titulo" class="border--style">
                <div class="sale">30%</div><!-- /.sale -->
                <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bot"></span>
                <span class="left"></span>
            </a><!-- /.border--style.border-1 -->
            <div class="more-options">
                <button class="openit">Vista rapida</button>
                <a href="single-producto.php" title="Ver detalle">Ver detalle</a>
            </div><!-- /.more-options -->
            <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
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
            <div class="item__lightbox fast-view">
                <div class="ligthbox__content">
                    <div class="lightbox__media">
                    </div><!-- /.lightbox__media -->
                    <div class="lightbox__text">
                        <h2>No te pierdas esto</h2>
                        <p>Continua en el segundo item</p>
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
                </div><!-- /.ligthbox__content fast-view -->
            </div><!-- /.item__lightbox -->
        </div><!-- /.item -->
        <!--NOTE: Termina Item-->
        <!--NOTE: Inicia Item-->
        <div class="item item--novedades">
            <a href="single-novedades.php" title="Titulo" class="border--style">
                <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bot"></span>
                <span class="left"></span>
            </a><!-- /.border--style.border-1 --><!--NOTE: Aqui categoria-->
            <a href="#" title="titulo" class="category">Categoria</a>
            <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
            <div class="item__text">
                <p>
                    Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
                </p>
            </div><!-- /.item__text -->
            <a href="single-novedades.php" class="item__add" title="Leer más">Leer más</a>
        </div><!-- /.item -->
        <!--NOTE: Termina Item-->


<!--NOTE: Inicia Item-->
        <div class="item">
            <a href="single-producto.php" title="Titulo" class="border--style">
                <div class="sale">30%</div><!-- /.sale -->
                <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bot"></span>
                <span class="left"></span>
            </a><!-- /.border--style.border-1 -->
            <div class="more-options">
                <button class="openit">Vista rapida</button>
                <a href="single-producto.php" title="Ver detalle">Ver detalle</a>
            </div><!-- /.more-options -->
            <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
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
            <div class="item__lightbox fast-view">
                <div class="ligthbox__content">
                    <div class="lightbox__media">
                    </div><!-- /.lightbox__media -->
                    <div class="lightbox__text">
                        <h2>No te pierdas esto</h2>
                        <p>Continua en el segundo item</p>
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
                </div><!-- /.ligthbox__content fast-view -->
            </div><!-- /.item__lightbox -->
        </div><!-- /.item -->
        <!--NOTE: Termina Item-->
        <!--NOTE: Inicia Item-->
        <div class="item item--novedades">
            <a href="single-novedades.php" title="Titulo" class="border--style">
                <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bot"></span>
                <span class="left"></span>
            </a><!-- /.border--style.border-1 --><!--NOTE: Aqui categoria-->
            <a href="#" title="titulo" class="category">Categoria</a>
            <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
            <div class="item__text">
                <p>
                    Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
                </p>
            </div><!-- /.item__text -->
            <a href="single-novedades.php" class="item__add" title="Leer más">Leer más</a>
        </div><!-- /.item -->
        <!--NOTE: Termina Item--><!--NOTE: Inicia Item-->
        <div class="item">
            <a href="single-producto.php" title="Titulo" class="border--style">
                <div class="sale">30%</div><!-- /.sale -->
                <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bot"></span>
                <span class="left"></span>
            </a><!-- /.border--style.border-1 -->
            <div class="more-options">
                <button class="openit">Vista rapida</button>
                <a href="single-producto.php" title="Ver detalle">Ver detalle</a>
            </div><!-- /.more-options -->
            <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
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
            <div class="item__lightbox fast-view">
                <div class="ligthbox__content">
                    <div class="lightbox__media">
                    </div><!-- /.lightbox__media -->
                    <div class="lightbox__text">
                        <h2>No te pierdas esto</h2>
                        <p>Continua en el segundo item</p>
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
                </div><!-- /.ligthbox__content fast-view -->
            </div><!-- /.item__lightbox -->
        </div><!-- /.item -->
        <!--NOTE: Termina Item-->
        <!--NOTE: Inicia Item-->
        <div class="item item--novedades">
            <a href="single-novedades.php" title="Titulo" class="border--style">
                <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bot"></span>
                <span class="left"></span>
            </a><!-- /.border--style.border-1 --><!--NOTE: Aqui categoria-->
            <a href="#" title="titulo" class="category">Categoria</a>
            <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
            <div class="item__text">
                <p>
                    Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
                </p>
            </div><!-- /.item__text -->
            <a href="single-novedades.php" class="item__add" title="Leer más">Leer más</a>
        </div><!-- /.item -->
        <!--NOTE: Termina Item--><!--NOTE: Inicia Item-->
        <div class="item">
            <a href="single-producto.php" title="Titulo" class="border--style">
                <div class="sale">30%</div><!-- /.sale -->
                <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bot"></span>
                <span class="left"></span>
            </a><!-- /.border--style.border-1 -->
            <div class="more-options">
                <button class="openit">Vista rapida</button>
                <a href="single-producto.php" title="Ver detalle">Ver detalle</a>
            </div><!-- /.more-options -->
            <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
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
            <div class="item__lightbox fast-view">
                <div class="ligthbox__content">
                    <div class="lightbox__media">
                    </div><!-- /.lightbox__media -->
                    <div class="lightbox__text">
                        <h2>No te pierdas esto</h2>
                        <p>Continua en el segundo item</p>
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
                </div><!-- /.ligthbox__content fast-view -->
            </div><!-- /.item__lightbox -->
        </div><!-- /.item -->
        <!--NOTE: Termina Item-->
        <!--NOTE: Inicia Item-->
        <div class="item item--novedades">
            <a href="single-novedades.php" title="Titulo" class="border--style">
                <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bot"></span>
                <span class="left"></span>
            </a><!-- /.border--style.border-1 -->
            <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
            <div class="item__text">
                <p>
                    Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
                </p>
            </div><!-- /.item__text -->
            <a href="single-novedades.php" class="item__add" title="Leer más">Leer más</a>
        </div><!-- /.item -->
        <!--NOTE: Termina Item--><!--NOTE: Inicia Item-->
        <div class="item">
            <a href="single-producto.php" title="Titulo" class="border--style">
                <div class="sale">30%</div><!-- /.sale -->
                <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bot"></span>
                <span class="left"></span>
            </a><!-- /.border--style.border-1 -->
            <div class="more-options">
                <button class="openit">Vista rapida</button>
                <a href="single-producto.php" title="Ver detalle">Ver detalle</a>
            </div><!-- /.more-options -->
            <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
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
            <div class="item__lightbox fast-view">
                <div class="ligthbox__content">
                    <div class="lightbox__media">
                    </div><!-- /.lightbox__media -->
                    <div class="lightbox__text">
                        <h2>No te pierdas esto</h2>
                        <p>Continua en el segundo item</p>
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
                </div><!-- /.ligthbox__content fast-view -->
            </div><!-- /.item__lightbox -->
        </div><!-- /.item -->
        <!--NOTE: Termina Item-->
        <!--NOTE: Inicia Item-->
        <div class="item item--novedades">
            <a href="single-novedades.php" title="Titulo" class="border--style">
                <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bot"></span>
                <span class="left"></span>
            </a><!-- /.border--style.border-1 -->
            <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
            <div class="item__text">
                <p>
                    Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
                </p>
            </div><!-- /.item__text -->
            <a href="single-novedades.php" class="item__add" title="Leer más">Leer más</a>
        </div><!-- /.item -->
        <!--NOTE: Termina Item-->


    </div><!-- /.wrap listado -->
    <ul class="pagination">
        <li>
            <a href="#" title="Anterior">
                <svg><use xlink:href="#shape-pag-back" /></svg>
            </a>
        </li>
        <li class="current">
            <a href="#" title="1" class="current">1</a>
        </li>
        <li>
            <a href="#" title="2">2</a>
        </li>
        <li>
            <a href="#" title="3">3</a>
        </li>
        <li>
            <a href="#" title="4">4</a>
        </li>
        <li>
            -
        </li>
        <li>
            <a href="#" title="35">35</a>
        </li>
        <li>
            <a href="#" title="Siguiente">
                <svg><use xlink:href="#shape-pag-next" /></svg>
            </a>
        </li>
    </ul><!-- /.pagination -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>