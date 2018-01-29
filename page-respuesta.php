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
<div class="cuenta cuenta--last estado--resumen">
    <div class="wrap page-respuesta">
        <!--NOTE: Inicia ITEM-->
        <h1 class="title">Estado de cuenta</h1><!-- /.title -->
        <div class="mi__alert mi--success">
            <span>Su pedido fue realizada con éxito</span>
            <svg><use xlink:href="#shape-icon-guard" /></svg>
        </div><!-- /.mi__alert -->
        <h2 class="mi__title">!Disfruta nuestra comida! y Gracias por preferirnos</h2><!-- /.mi__title -->
        <p class="mi__text mi__text--small">
            Pedido realizado con éxito. Recuerda que debes pagar al momento de recibir tu comida para finalizar el proceso de compra.
        </p><!-- /.mi__text -->
        <h2 class="mi__title">Detalle</h2><!-- /.mi__title -->
        <div class="resumen__box">
            <div class="resumen__title">
                <span>Producto</span>
                <span>Total</span>
            </div><!-- /.resumen__title -->
            <div class="resumen__producto">
                <div class="resumen__producto__box">
                    <div class="resumen__producto__item">
                        <div class="resumen__producto__title">
                            Ensalada Salcom Cous Cous
                        </div><!-- /.resumen__producto__title -->
                        <p>Cantidad: 1</p>
                    </div><!-- /.resumen__producto__item -->
                    <div class="resumen__total">$3200</div><!-- /.resumen__total -->
                </div><!-- /.resumen__producto__box -->
                <div class="resumen__producto__box">
                    <div class="resumen__producto__item">
                        <div class="resumen__producto__title">
                            Ensalada Salcom Cous Cous
                        </div><!-- /.resumen__producto__title -->
                        <p>Cantidad: 1</p>
                    </div><!-- /.resumen__producto__item -->
                    <div class="resumen__total">$3200</div><!-- /.resumen__total -->
                </div><!-- /.resumen__producto__box -->
            </div><!-- /.resumen__producto -->
            <div class="resumen__subbox">
                <div class="resumen__box__item">
                    <p>Subtotal</p>
                    <strong>$3.200</strong>
                </div><!-- /.resumen__box__item -->
                <div class="resumen__box__item">
                    <p>Envio</p>
                    <strong>$3.000</strong>
                </div><!-- /.resumen__box__item -->
                <div class="resumen__box__item">
                    <p>Total</p>
                    <strong>$6.200</strong>
                </div><!-- /.resumen__box__item -->
            </div><!-- /.resumen__subbox -->
            <div class="resumen__detalle">
                <p>
                    Número de pedido
                </p>
                <p>
                    193
                </p>
            </div><!-- /.resumen__detalle -->
            <div class="resumen__detalle">
                <p>
                    Fecha
                </p>
                <p>
                    Abril 28, 2016
                </p>
            </div><!-- /.resumen__detalle -->
            <div class="resumen__detalle">
                <p>
                    Total
                </p>
                <p>
                    $6.200
                </p>
            </div><!-- /.resumen__detalle -->
            <div class="resumen__detalle">
                <p>
                    Formato de pago
                </p>
                <p>
                    Sodexo
                </p>
            </div><!-- /.resumen__detalle -->
        </div><!-- /.resumen__box -->
        <a href="#" class="btn--main" title="ordenes pasadas">Revisa tus órdenes pasadas</a>
    </div><!-- /.cuenta__content -->
</div><!-- /.cuenta -->
<?php include 'footer.php'; ?>