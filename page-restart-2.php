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
        <h2>Revisa tu correo</h2>
        <p class="pass__bajada">
            Un correo ha sido enviado a  ...@gmail.com. Cotiene un vínculo que debes presionar para reiniciar tu contraseña
        </p><!-- /.pass__bajada -->
        <a href="index.php" class="btn--main btn--center" title="Volver">Volver</a>
        <a href="page-restart-3.php">Paso 3</a>
    </div><!-- /.recuperar -->
</div><!-- /.pass -->
<?php include 'footer.php'; ?>