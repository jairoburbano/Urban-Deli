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
<div class="pass">
    <div class="wrap recuperar">
        <h1 class="title">Contraseña</h1><!-- /.title -->
        <div class="restart-form">
            <form action="" class="formulario formulario--restart">
               <h2>Nueva contraseña</h2>
                <div class="input-group group normal">
                    <label for="restart">*Nueva contraseña</label>
                    <input type="text" id="restart" name="restart">
                </div><!-- /.input-group -->
                <div class="input-group group normal">
                    <label for="restart-again">*Repetir la nueva contraseña</label>
                    <input type="text" id="restart-again" name="restart-again">
                </div><!-- /.input-group -->
                <div class="send-group send--center">
                    <input type="submit" value="Cambiar contraseña" class="btn--submit">
                </div><!-- /.send-group -->
                <a href="page-restart-4.php">Paso 4</a>
            </form><!-- /.formulario formulario--direccion -->
        </div><!-- /.formulario -->
    </div><!-- /.recuperar -->
</div><!-- /.pass -->
<?php include 'footer.php'; ?>