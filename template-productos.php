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
<div class="banner--productos">
    <div class="banner__media" style="background-image: url(assets/bg-Sandwich.jpg);"></div><!-- /.banner__media -->
    <div class="breadcrumbs border--style border-2">
        <a href="index.php">Home</a>
        <p>/</p>
        <p>Sandwiches</p>
        <span class="top"></span>
        <span class="left"></span>
        <span class="right"></span>
        <span class="bot"></span>
    </div><!-- /.breadcrumbs -->
    <div class="banner__title border--style border-4">Sandwiches</div><!-- /.banner__title -->
</div><!-- /.banner--productos -->
<div class="wrap productos">
    <div class="filtros">
        <p>20 productos encontrados</p>
        <div class="selector selector--producto">
            <select name="order" id="order">
                <option value="Orden predeterminado">Ordenar por precio</option>
                <option value="bajo a alto">bajo a alto</option>
                <option value="alto a bajo">alto a bajo</option>
            </select>
        </div><!-- /.selector -->
    </div><!-- /.filtros -->
    <p class="bajada--small">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae quos nihil, sint harum delectus molestias ab officiis excepturi quasi adipisci inventore assumenda quaerat, aliquid quas corporis temporibus id suscipit eaque et minus commodi accusamus sit. Inventore adipisci a recusandae quam?
    </p><!-- /.bajada--small -->
    <div class="wrap listado">
        <!--NOTE: Inicia Item-->
        <div class="item">
            <a href="single-producto.php" title="Titulo" class="border--style">
                <div class="sale">30%</div><!-- /.sale -->
                <img src="assets/_0001_arroz_verde.png" alt="Arroz" class="zoom" data-zoom-image="assets/_0001_arroz_verde.png">
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
                <div class="ligthbox__content border--dark">
                    <div class="lightbox__media zoom-box">
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
        <div class="item">
            <a href="single-producto.php" title="Titulo" class="border--style">
                <div class="sale">30%</div><!-- /.sale -->
                <img src="assets/_0003_avocado_roll.png" alt="Arroz" class="zoom" data-zoom-image="assets/_0003_avocado_roll.png">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bot"></span>
                <span class="left"></span>
            </a><!-- /.border--style.border-1 -->
            <div class="more-options">
                <button class="openit">Vista rapida</button>
                <a href="single-producto.php" title="Ver detalle">Ver detalle</a>
            </div><!-- /.more-options -->
            <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano adasd asdadsad</a></h2><!-- /.item__title -->
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
                <div class="ligthbox__content border--dark">
                    <div class="lightbox__media zoom-box">
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
                <div class="ligthbox__content border--dark">
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
                <div class="ligthbox__content border--dark">
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
                <div class="ligthbox__content border--dark">
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
                <div class="ligthbox__content border--dark">
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
                <div class="ligthbox__content border--dark">
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
                <div class="ligthbox__content border--dark">
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
                <div class="ligthbox__content border--dark">
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
<div class="alert--fixed">
    <p>"Producto" se ha agregado a tu carrito</p>
    <div class="alert--icon">
        <svg><use xlink:href="#shape-carro-compras" /></svg>
        <p class="header__compras__items">1</p><!-- /.header__compras__items -->
    </div><!-- /.alert--icon -->
</div><!-- /.alert--fixed -->
<?php include 'footer.php'; ?>