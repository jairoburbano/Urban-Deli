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
<div class="wrap compra">
    <h1 class="title">Carro de compras</h1><!-- /.title -->
    <div class="tab__title">
        <div class="tab_one">Producto</div><!-- /.tab_one -->
        <div class="tab_two">Cantidad</div><!-- /.tab_two -->
        <div class="tab_three">Precio unitario</div><!-- /.tab_three -->
        <div class="tab_four">Total</div><!-- /.tab_four -->
    </div><!-- /.tab__title -->
    <div class="tab__box">
        <div class="tab__item">
            <div class="tab__item__media">
                <img src="assets/_0005_baguette_serrano.png" alt="Titulo">
            </div><!-- /.tab__item__media -->
            <div class="tab__item__title">
                Ensalada Salmón Cous Cous Ensalada Salmón Cous Cous
            </div><!-- /.tab__item__title -->
            <div class="tab__item__cantidad quantity">
                <span class="dec-numb"><svg><use xlink:href="#shape-less" /></svg></span>
                <input type="text">
                <span class="inc-numb"><svg><use xlink:href="#shape-plus" /></svg></span>
            </div><!-- /.tab__item__cantidad quantity -->
            <div class="tab__item__precio">$3.200</div><!-- /.tab__item__precio -->
            <div class="tab__item__total">
                <p>$3.200</p>
                <a href="#" title="Eliminar">Eliminar</a>
            </div><!-- /.tab__item__total -->
        </div><!-- /.tab__item -->
        <div class="tab__item">
            <div class="tab__item__media">
                <img src="assets/_0012_cheesecake.png" alt="Titulo">
            </div><!-- /.tab__item__media -->
            <div class="tab__item__title">
                Ensalada Salmón Cous Cous
            </div><!-- /.tab__item__title -->
            <div class="tab__item__cantidad quantity">
                <span class="dec-numb"><svg><use xlink:href="#shape-less" /></svg></span>
                <input type="text">
                <span class="inc-numb"><svg><use xlink:href="#shape-plus" /></svg></span>
            </div><!-- /.tab__item__cantidad quantity -->
            <div class="tab__item__precio">$3.200</div><!-- /.tab__item__precio -->
            <div class="tab__item__total">
                <p>$3.200 <span>$3.200</span></p>
                <a href="#" title="Eliminar">Eliminar</a>
            </div><!-- /.tab__item__total -->
        </div><!-- /.tab__item -->
    </div><!-- /.tab__box -->
    <div class="tab__resume">
        <div class="tab__desc border--style border-1">
            <form action="">
                <p>Código de descuento</p>
                <input type="text">
                <input type="submit" value="Ingresar" class="btn--submit">
            </form>
            <span class="top"></span>
            <span class="left"></span>
            <span class="right"></span>
            <span class="bot"></span>
        </div><!-- /.tab__desc -->
        <div class="tab__result">
            <p class="tab__result__title">Resumen de la Orden</p>
            <div class="tab__result__item">
                <p>Subtotal</p>
                <p>$6.400</p>
            </div><!-- /.tab__result__item -->
            <div class="tab__result__item">
                <p>Envio</p>
                <p>$3.000</p>
            </div><!-- /.tab__result__item -->
            <div class="tab__result__item">
                <p>Subtotal</p>
                <p>$9.400</p>
            </div><!-- /.tab__result__item -->
            <div class="tab__result__item tab--fill">
                <p>Total</p>
                <p>$9.400</p>
            </div><!-- /.tab__result__item -->
            <a href="page-ingresar.php" class="tab__final">Realizar el Pago</a>
        </div><!-- /.tab__result -->
    </div><!-- /.tab__resume -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>