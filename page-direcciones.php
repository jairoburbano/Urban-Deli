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
            <a href="page-mi-cuenta.php" title="Mi cuenta">Mi cuenta</a>
            <a href="/page-datos-personales.php" title="Datos Personales">Datos Personales</a>
            <a href="/page-direcciones.php" title="Direcciones" class="active">Direcciones</a>
            <a href="/page-estado-de-compra.php" title="Estado de compra">Estado de compra</a>
            <a href="/page-ordenes-pasadas.php" title="Órdenes Pasadas">Órdenes Pasadas</a>
        </nav><!-- /.sidebar__nav -->
    </div><!-- /.sidebar -->
    <div class="wrap cuenta__content direcciones">
        <h1 class="title">Direcciones</h1><!-- /.title -->
        <div class="direcciones__block">
            <div class="direcciones__item">
                <h2 class="mi__title">Casa</h2><!-- /.mi__title -->
                <div class="dir__block">
                    <div class="dir__group">
                        <svg><use xlink:href="#shape-icon-phone" /></svg>
                        <p>
                            56 (2) 25043507
                        </p>
                    </div><!-- /.dir__group -->
                    <div class="dir__group mid">
                        <svg><use xlink:href="#shape-icon-place" /></svg>
                        <p>
                            Dr. Carlos Charlin 4515
                        </p>
                    </div><!-- /.dir__group -->
                    <div class="dir__group">
                        <p>
                            R. Metropolitana, Santiago, Providencia
                        </p>
                    </div><!-- /.dir__group -->
                </div><!-- /.dir__block -->
                <div class="dir__links">
                    <a href="page-nueva-direccion.php" title="editar">Editar</a>
                    <a href="#" title="eliminar">Eliminar</a>
                </div><!-- /.dir__links -->
            </div><!-- /.direcciones__item -->
            <div class="direcciones__item">
                <h2 class="mi__title">Casa</h2><!-- /.mi__title -->
                <div class="dir__block">
                    <div class="dir__group">
                        <svg><use xlink:href="#shape-icon-phone" /></svg>
                        <p>
                            56 (2) 25043507
                        </p>
                    </div><!-- /.dir__group -->
                    <div class="dir__group mid">
                        <svg><use xlink:href="#shape-icon-place" /></svg>
                        <p>
                            Dr. Carlos Charlin 4515
                        </p>
                    </div><!-- /.dir__group -->
                    <div class="dir__group">
                        <p>
                            R. Metropolitana, Santiago, Providencia
                        </p>
                    </div><!-- /.dir__group -->
                </div><!-- /.dir__block -->
                <div class="dir__links">
                    <a href="page-nueva-direccion.php" title="editar">Editar</a>
                    <a href="#" title="eliminar">Eliminar</a>
                </div><!-- /.dir__links -->
            </div><!-- /.direcciones__item -->
            <div class="direcciones__item">
                <h2 class="mi__title">Casa</h2><!-- /.mi__title -->
                <div class="dir__block">
                    <div class="dir__group">
                        <svg><use xlink:href="#shape-icon-phone" /></svg>
                        <p>
                            56 (2) 25043507
                        </p>
                    </div><!-- /.dir__group -->
                    <div class="dir__group mid">
                        <svg><use xlink:href="#shape-icon-place" /></svg>
                        <p>
                            Dr. Carlos Charlin 4515
                        </p>
                    </div><!-- /.dir__group -->
                    <div class="dir__group">
                        <p>
                            R. Metropolitana, Santiago, Providencia
                        </p>
                    </div><!-- /.dir__group -->
                </div><!-- /.dir__block -->
                <div class="dir__links">
                    <a href="page-nueva-direccion.php" title="editar">Editar</a>
                    <a href="#" title="eliminar">Eliminar</a>
                </div><!-- /.dir__links -->
            </div><!-- /.direcciones__item -->
            <div class="direcciones__item">
                <h2 class="mi__title">Casa</h2><!-- /.mi__title -->
                <div class="dir__block">
                    <div class="dir__group">
                        <svg><use xlink:href="#shape-icon-phone" /></svg>
                        <p>
                            56 (2) 25043507
                        </p>
                    </div><!-- /.dir__group -->
                    <div class="dir__group mid">
                        <svg><use xlink:href="#shape-icon-place" /></svg>
                        <p>
                            Dr. Carlos Charlin 4515
                        </p>
                    </div><!-- /.dir__group -->
                    <div class="dir__group">
                        <p>
                            R. Metropolitana, Santiago, Providencia
                        </p>
                    </div><!-- /.dir__group -->
                </div><!-- /.dir__block -->
                <div class="dir__links">
                    <a href="page-nueva-direccion.php" title="editar">Editar</a>
                    <a href="#" title="eliminar">Eliminar</a>
                </div><!-- /.dir__links -->
            </div><!-- /.direcciones__item -->
        </div><!-- /.direcciones__block -->
        <a href="page-nueva-direccion.php" title="Agregar nueva direccion" class="dir_add">Agregar dirección</a>
    </div><!-- /.cuenta__content -->
</div><!-- /.cuenta -->
<?php include 'footer.php'; ?>