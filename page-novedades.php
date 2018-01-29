<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		urbandeli
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 */
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<div class="wrap novedades">
    <h1 class="title">Novedades</h1><!-- /.title -->
    <div class="listado listado--novedades">
        <div class="filtro--novedades">
            <div class="selector selector--mobile">
                <select name="filtro" onChange="window.location.href=this.value">
                    <option value="http://www.google.com">Todos</option>
                    <option value="http://www.facebook.com">Innovación</option>
                    <option value="http://www.twitter.com">Agrícola</option>
                    <option value="http://www.linkedin.com">Agronegocios</option>
                    <option value="http://www.9gag.com">Investigación</option>
                </select>
            </div><!-- /.filtro-select selector -->
            <div class="filtro__container">
                <div class="filtro__content">
                    <div class="filtro__box">
                        <div class="filtro__list">
                            <a href="#" class="active" title="todos">Todos</a>
                            <a href="#"title="Innovación">Innovación</a>
                            <a href="#"title="Agrícola">Agrícola</a>
                            <a href="#"title="Agronegocios">Agronegocios</a>
                            <a href="#"title="Investigación">Investigación</a>
                            <a href="#"title="todos">Dos</a>
                            <a href="#"title="Innovación">Innovación</a>
                            <a href="#"title="Agrícola">Agrícola</a>
                            <a href="#"title="Agronegocios">Agronegocios</a>
                            <a href="#"title="Investigación">Investigación</a>
                            <a href="#"title="todos">Tres</a>
                            <a href="#"title="Innovación">Innovación</a>
                            <a href="#"title="Agrícola">Agrícola</a>
                            <a href="#"title="Agronegocios">Agronegocios</a>
                            <a href="#"title="Investigación">Investigación</a>
                        </div><!-- /.filtro__list -->
                    </div><!-- /.filtro__box -->
                </div><!-- /.filtro__content -->
                <div class="filtro__more">
                    <button class="filtro-back"></button>
                    <button class="filtro-next"></button>
                </div><!-- /.filtro__more -->
            </div><!-- /.filtro__container -->
        </div><!-- /.filtro--novedades -->
        <!--NOTE: Inicia Item-->
        <div class="item item--novedades">
            <a href="single-novedades.php" title="Titulo" class="border--style">
                <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bot"></span>
                <span class="left"></span>
            </a><!-- /.border--style.border-1 -->
            <a href="#" title="titulo" class="category">Categoria</a>
            <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
            <div class="item__text">
                <p>
                    Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
                </p>
            </div><!-- /.item__text -->
            <a href="single-novedades.php" class="item__add" title="Leer más">Leer más</a>
        </div><!-- /.item -->
        <!--NOTE: Termina Item-->


        <div class="item item--novedades">
            <a href="single-novedades.php" title="Titulo" class="border--style">
                <img src="assets/_0001_arroz_verde.png" alt="Arroz">
                <span class="top"></span>
                <span class="right"></span>
                <span class="bot"></span>
                <span class="left"></span>
            </a><!-- /.border--style.border-1 -->
            <a href="#" title="titulo" class="category">Categoria</a>
            <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
            <div class="item__text">
                <p>
                    Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
                </p>
            </div><!-- /.item__text -->
            <a href="single-novedades.php" class="item__add" title="Leer más">Leer más</a>
        </div><!-- /.item --><div class="item item--novedades">
        <a href="single-novedades.php" title="Titulo" class="border--style">
            <img src="assets/_0001_arroz_verde.png" alt="Arroz">
            <span class="top"></span>
            <span class="right"></span>
            <span class="bot"></span>
            <span class="left"></span>
        </a><!-- /.border--style.border-1 -->
        <a href="#" title="titulo" class="category">Categoria</a>
        <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
        <div class="item__text">
            <p>
                Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
            </p>
        </div><!-- /.item__text -->
        <a href="single-novedades.php" class="item__add" title="Leer más">Leer más</a>
        </div><!-- /.item --><div class="item item--novedades">
        <a href="single-novedades.php" title="Titulo" class="border--style">
            <img src="assets/_0001_arroz_verde.png" alt="Arroz">
            <span class="top"></span>
            <span class="right"></span>
            <span class="bot"></span>
            <span class="left"></span>
        </a><!-- /.border--style.border-1 -->
        <a href="#" title="titulo" class="category">Categoria</a>
        <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
        <div class="item__text">
            <p>
                Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
            </p>
        </div><!-- /.item__text -->
        <a href="single-novedades.php" class="item__add" title="Leer más">Leer más</a>
        </div><!-- /.item --><div class="item item--novedades">
        <a href="single-novedades.php" title="Titulo" class="border--style">
            <img src="assets/_0001_arroz_verde.png" alt="Arroz">
            <span class="top"></span>
            <span class="right"></span>
            <span class="bot"></span>
            <span class="left"></span>
        </a><!-- /.border--style.border-1 -->
        <a href="#" title="titulo" class="category">Categoria</a>
        <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
        <div class="item__text">
            <p>
                Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
            </p>
        </div><!-- /.item__text -->
        <a href="single-novedades.php" class="item__add" title="Leer más">Leer más</a>
        </div><!-- /.item --><div class="item item--novedades">
        <a href="single-novedades.php" title="Titulo" class="border--style">
            <img src="assets/_0001_arroz_verde.png" alt="Arroz">
            <span class="top"></span>
            <span class="right"></span>
            <span class="bot"></span>
            <span class="left"></span>
        </a><!-- /.border--style.border-1 -->
        <a href="#" title="titulo" class="category">Categoria</a>
        <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
        <div class="item__text">
            <p>
                Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
            </p>
        </div><!-- /.item__text -->
        <a href="single-novedades.php" class="item__add" title="Leer más">Leer más</a>
        </div><!-- /.item --><div class="item item--novedades">
        <a href="single-novedades.php" title="Titulo" class="border--style">
            <img src="assets/_0001_arroz_verde.png" alt="Arroz">
            <span class="top"></span>
            <span class="right"></span>
            <span class="bot"></span>
            <span class="left"></span>
        </a><!-- /.border--style.border-1 -->
        <a href="#" title="titulo" class="category">Categoria</a>
        <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
        <div class="item__text">
            <p>
                Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
            </p>
        </div><!-- /.item__text -->
        <a href="single-novedades.php" class="item__add" title="Leer más">Leer más</a>
        </div><!-- /.item --><div class="item item--novedades">
        <a href="single-novedades.php" title="Titulo" class="border--style">
            <img src="assets/_0001_arroz_verde.png" alt="Arroz">
            <span class="top"></span>
            <span class="right"></span>
            <span class="bot"></span>
            <span class="left"></span>
        </a><!-- /.border--style.border-1 -->
        <a href="#" title="titulo" class="category">Categoria</a>
        <h2 class="item__title"><a href="single-producto.php" title="Titulo">Baguette serrano</a></h2><!-- /.item__title -->
        <div class="item__text">
            <p>
                Mix de Lechugas, Salmón, Cous Cous. Dressing: Raita
            </p>
        </div><!-- /.item__text -->
        <a href="single-novedades.php" class="item__add" title="Leer más">Leer más</a>
        </div><!-- /.item -->


    </div><!-- /.wrap listado -->
    <ul class="pagination">
        <li>
            <a href="#" title="Anterior">
                <svg><use xlink:href="#shape-pag-back" /></svg>
            </a>
        </li>
        <li class="current">
            <a href="#" title="1" class="current">1</a>
        </li>
        <li>
            <a href="#" title="2">2</a>
        </li>
        <li>
            <a href="#" title="3">3</a>
        </li>
        <li>
            <a href="#" title="4">4</a>
        </li>
        <li>
            -
        </li>
        <li>
            <a href="#" title="35">35</a>
        </li>
        <li>
            <a href="#" title="Siguiente">
                <svg><use xlink:href="#shape-pag-next" /></svg>
            </a>
        </li>
    </ul><!-- /.pagination -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>