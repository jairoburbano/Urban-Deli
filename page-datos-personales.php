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
            <a href="/page-datos-personales.php" title="Datos Personales" class="active">Datos Personales</a>
            <a href="/page-direcciones.php" title="Direcciones">Direcciones</a>
            <a href="/page-estado-de-compra.php" title="Estado de compra">Estado de compra</a>
            <a href="/page-ordenes-pasadas.php" title="Órdenes Pasadas">Órdenes Pasadas</a>
        </nav><!-- /.sidebar__nav -->
    </div><!-- /.sidebar -->
    <div class="cuenta__content mi__cuenta">
        <div class="cuenta-form">
            <h1 class="title">Datos Personales</h1><!-- /.title -->
            <form action="" class="formulario formulario--cuenta">
                <div class="input-group group slightbig">
                    <label for="nickname">*Nombre Usuario</label>
                    <input type="text" id="nickname" name="nickname">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="mail">*Email</label>
                    <input type="text" id="mail" name="mail">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="rut">*RUT</label>
                    <input type="text" id="rut" name="rut">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="phone">*Teléfono</label>
                    <input type="text" id="phone" name="phone">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="day" class="big">*Fecha de nacimiento</label>
                    <div class="style--flex">
                        <div class="selector selector--borde">
                            <select name="day" id="day">
                                <option value="default">Dia</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div><!-- /.selector selector--borde -->
                        <div class="selector selector--borde">
                            <select name="Month" id="month">
                                <option value="default">Mes</option>
                                <option value="Enero">Enero</option>
                                <option value="Febrero">Febrero</option>
                            </select>
                        </div><!-- /.selector selector--borde -->
                        <div class="selector selector--borde">
                            <select name="year" id="year">
                                <option value="default">Año</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                            </select>
                        </div><!-- /.selector selector--borde -->
                    </div><!-- /.style--flex -->
                </div><!-- /.input-group -->
                <div class="checkbox-group group">
                    <label for="news">Acepto suscribirme a Newsletter</label>
                    <input type="checkbox" id="news" name="news">
                </div><!-- /.checkbox-group -->
                <div class="send-group send--right">
                    <input type="submit" value="Guardar Cambios" class="btn--submit">
                </div><!-- /.send-group -->
            </form><!-- /.formulario formulario--cuenta -->
        </div><!-- /.formulario -->
        <div class="cambiar-form">
            <form class="formulario formulario--cambiar">
                <h2 class="mi__title">Cambiar Contraseña</h2><!-- /.mi__title -->
                <div class="input-group group bigger">
                    <label for="pass">*Contraseña Actual</label>
                    <input type="password" id="pass" name="pass">
                </div><!-- /.input-group -->
                <div class="input-group group bigger">
                    <label for="pass_new">*Nueva contraseña</label>
                    <input type="password" id="pass_new" name="pass_new">
                </div><!-- /.input-group -->
                <div class="input-group group bigger">
                    <label for="pass_again">*Confirmar nueva contraseña</label>
                    <input type="password" id="pass_again" name="pass_again">
                </div><!-- /.input-group -->
                <div class="checkbox-group group">
                    <label for="terminos">Acepto los Términos y Condiciones Políticas de Privacidad</label>
                    <input type="checkbox" id="terminos" name="terminos">
                </div><!-- /.checkbox-group -->
                <div class="send-group send--right">
                    <input type="submit" value="Cambiar contraseña" class="btn--submit">
                </div><!-- /.send-group -->
            </form><!-- /.formulario formulario--cambiar -->
        </div><!-- /.cambiar-form -->
    </div><!-- /.cuenta__content -->
</div><!-- /.cuenta -->
<div class="item__lightbox">
    <div class="light__alert__content">
        <p class="pass__bajada">
            Tu contraseña ha sido cambiada con éxito.
        </p><!-- /.pass__bajada -->
        <a href="#" class="btn--main btn--center js-close" title="Volver">Volver</a>
    </div><!-- /.light__alert__content -->
</div><!-- /.light__alert -->
<?php include 'footer.php'; ?>