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
        <div class="mi__alert mi--error">
            <span>La compra no fue realizada</span>
            <svg><use xlink:href="#shape-icon-alert" /></svg>
        </div><!-- /.mi__alert -->
        <h2 class="mi__title">Intentalo nuevamente</h2><!-- /.mi__title -->
        <p class="mi__text mi__text--small">
            Pedido realizado con éxito. Recuerda que debes pagar al momento de recibir tu comida para finalizar el proceso de compra.
        </p><!-- /.mi__text -->
        <div class="resumen__box">
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
        <a href="#" class="btn--main" title="Documentación">Documentación</a>
    </div><!-- /.cuenta__content -->
</div><!-- /.cuenta -->
<?php include 'footer.php'; ?>