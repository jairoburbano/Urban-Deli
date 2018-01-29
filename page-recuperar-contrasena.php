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
               <h2>Recupera tu contraseña</h2>
               <p class="pass__bajada">
                   Por favor ingresa tu nombre de usuario o correo, recibirás un correo con una dirección 
para crear una nueva contraseña
               </p><!-- /.pass__bajada -->
                <div class="input-group group normal">
                    <label for="restart">*Nombre de usuario o correo</label>
                    <input type="text" id="restart" name="restart">
                </div><!-- /.input-group -->
                <div class="send-group send--center">
                    <input type="submit" value="Obtener nueva contraseña" class="btn--submit">
                </div><!-- /.send-group -->
                <a href="page-restart-2.php">Paso 2</a>
            </form><!-- /.formulario formulario--direccion -->
        </div><!-- /.formulario -->
    </div><!-- /.recuperar -->
</div><!-- /.pass -->
<?php include 'footer.php'; ?>