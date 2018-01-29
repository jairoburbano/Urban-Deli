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
<div class="cuenta">
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
            <a href="page-mi-cuenta.php" title="Mi cuenta" class="active">Mi cuenta</a>
            <a href="/page-datos-personales.php" title="Datos Personales">Datos Personales</a>
            <a href="/page-direcciones.php" title="Direcciones">Direcciones</a>
            <a href="/page-estado-de-compra.php" title="Estado de compra">Estado de compra</a>
            <a href="/page-ordenes-pasadas.php" title="Órdenes Pasadas">Órdenes Pasadas</a>
        </nav><!-- /.sidebar__nav -->
    </div><!-- /.sidebar -->
    <div class="wrap cuenta__content mi__cuenta">
        <h1 class="title">Mi cuenta</h1><!-- /.title -->
        <h2 class="mi__title">Hola Cristian</h2><!-- /.mi__title -->
        <p class="mi__text">
            Desde tu página de cuenta, puedes ver tus pedidos recientes, gestionar la dirección de envío, la dirección de facturación y cambiar la información de la cuenta y la contraseña.
        </p><!-- /.mi__text -->
        <p class="mi__link">
            ¿No eres <span>Cristian</span> | <a href="index.php" title="Cerrar Sesión">Cerrar Sesión</a>
        </p><!-- /.mi__link -->
    </div><!-- /.cuenta__content -->
</div><!-- /.cuenta -->
<?php include 'footer.php'; ?>