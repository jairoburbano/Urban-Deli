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
<div class="error-404">
   <div class="error-404__media" style="background-image: url(assets/bg-Sandwich.jpg);"></div><!-- /.error-404__media -->
    <div class="wrap">
        <h1 class="title">Error 404</h1><!-- /.title -->
        <div class="error-404__content">
            <p>Oh, lo sentimos</p>
            <h2>Esta Página no ha sido encontrada,</h2>
            <div class="error-404__links">
                <a href="index.php" title="Volver al inicio" class="border--style border-4">
                    Puedes volver al home
                </a><!-- /.border--styles border-3 -->
                <span class="separacion">o</span>
                <p class="border--style border-2 but-search">
                    Puedes buscar un producto
                    <span class="top"></span>
                    <span class="left"></span>
                    <span class="right"></span>
                    <span class="bot"></span>
                </p><!-- /.border--styles border-3 -->
            </div><!-- /.error-404__links -->
        </div><!-- /.error-404__content -->
    </div><!-- /.wrap -->
</div><!-- /.error-404 -->
<?php include 'footer.php'; ?>