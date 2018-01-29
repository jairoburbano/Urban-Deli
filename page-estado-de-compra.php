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
<div class="cuenta cuenta--last">
    <div class="sidebar">
        <div class="sidebar__media" style="background-image: url(assets/bg2.jpg)"></div><!-- /.sidebar__media -->
        <div class="sidebar__title">Estas en</div><!-- /.sidebar__title -->
        <div class="selector selector--cuenta">
            <select onChange="window.location.href=this.value">
                <option value="#" data-text="Mi cuenta">Estas en</option>
                <option value="/page-mi-cuenta.php" data-text="Mi cuenta">Mi cuenta</option>
                <option value="/page-datos-personales.php" data-text="Datos Personales">Datos Personales</option>
                <option value="/page-direcciones.php" data-text="Direcciones">Direcciones</option>
                <option value="/page-estado-de-compra.php" data-text="Estado de Compra">Estado de Compra</option>
                <option value="/page-ordenes-pasadas.php" data-text="Órdenes Pasadas">Órdenes Pasadas</option>
            </select>
        </div><!-- /.selector selector--cuenta -->
        <nav class="sidebar__nav">
            <a href="page-mi-cuenta.php" title="Mi cuenta">Mi cuenta</a>
            <a href="/page-datos-personales.php" title="Datos Personales">Datos Personales</a>
            <a href="/page-direcciones.php" title="Direcciones">Direcciones</a>
            <a href="/page-estado-de-compra.php" title="Estado de compra" class="active">Estado de compra</a>
            <a href="/page-ordenes-pasadas.php" title="Órdenes Pasadas">Órdenes Pasadas</a>
        </nav><!-- /.sidebar__nav -->
    </div><!-- /.sidebar -->
    <div class="wrap cuenta__content mi__cuenta estado">
        <div class="estado__container">
            <h1 class="title">Estado de compra</h1><!-- /.title -->
            <div class="estado__block">
                <div class="estado__item">
                    <p>Número de orden</p>
                    <p class="estado_status">#12345678abc</p><!-- /.estado_status -->
                </div><!-- /.estado__item -->
                <div class="estado__item">
                    <p>Fecha de compra</p>
                    <p class="estado_status">24/06/2015</p><!-- /.estado_status -->
                </div><!-- /.estado__item -->
                <div class="estado__item">
                    <p>Dirección de envio</p>
                    <p class="estado_status">Casa</p><!-- /.estado_status -->
                </div><!-- /.estado__item -->
                <div class="estado__item">
                    <p>Estado</p>
                    <p class="estado_status">En espera</p><!-- /.estado_status -->
                </div><!-- /.estado__item -->
            </div><!-- /.estado__block -->
            <div class="estado__resumen">
                <p class="estado__title">
                    Resumen de la orden
                </p><!-- /.estado__title -->
                <div class="estado__resumen__block">
                    <div class="estado__resumen__item">
                        <div class="estado__resumen__media">
                            <img src="assets/_0005_baguette_serrano.png" alt="Titulo">
                        </div><!-- /.estado__resumen__media -->
                        <div class="estado__resumen__content">
                            <h2>Ensalada Salmón Cous Cous</h2>
                            <p>Cantidad : 1</p>
                            <p>$3.200 <span>$2.800</span></p>
                        </div><!-- /.estado__resumen__content -->
                    </div><!-- /.estado__resumen__item -->
                    <div class="estado__resumen__item">
                        <div class="estado__resumen__media">
                            <img src="assets/_0005_baguette_serrano.png" alt="Titulo">
                        </div><!-- /.estado__resumen__media -->
                        <div class="estado__resumen__content">
                            <h2>Ensalada Salmón Cous Cous</h2>
                            <p>Cantidad : 1</p>
                            <p>$3.200 <span>$2.800</span></p>
                        </div><!-- /.estado__resumen__content -->
                    </div><!-- /.estado__resumen__item -->
                </div><!-- /.estado__resumen__block -->
                <div class="estado__resumen__block">
                    <div class="tab__result__item">
                        <p>Subtotal</p>
                        <p>$6.400</p>
                    </div><!-- /.tab__result__item -->
                    <div class="tab__result__item">
                        <p>Envio</p>
                        <p>$3.000</p>
                    </div><!-- /.tab__result__item -->
                    <div class="tab__result__item tab--fill">
                        <p>Total</p>
                        <p>$9.400</p>
                    </div><!-- /.tab__result__item -->
                </div><!-- /.estado__resumen__block -->
            </div><!-- /.estado__resumen -->
        </div><!-- /.estado__container -->
    </div><!-- /.cuenta__content -->
</div><!-- /.cuenta -->
<?php include 'footer.php'; ?>