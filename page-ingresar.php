<?php
/**
 *
 *
 * @package     urbandeli
 * @author      Agencia Digital Reactor <contacto@reactor.cl>
 * @version     0.1.0
 *
 */
$page = '';
$subpage = '';
$type = 'page';
$title = ' ';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="ingreso wrap">
    <div class="tabs__block">
        <div class="tabs js-tab-trigger" data-tab="ingreso">Ingresar</div><!-- /.tabs -->
        <div class="tabs js-tab-trigger" data-tab="cuenta">Crear cuenta</div><!-- /.tabs -->
    </div><!-- /.tabs__block -->
    <div class="tabs__container tab-slider">
        <div class="tabs__box js-tab-content" id="ingreso">
            <h1 class="title">Ingresar</h1><!-- /.title -->
            <p class="text-bajada">
                ¡Haz tu pedido aquí y disfruta de nuestra comida fresca, rica y sin complicaciones!
            </p>
            <div class="ingreso-form">
                <form action="page-mi-cuenta.php" class="formulario formulario--ingreso">
                    <div class="input-group group">
                        <label for="username">*Nombre</label>
                        <input type="text" id="username" name="username">
                    </div><!-- /.input-group -->
                    <div class="input-group group">
                        <label for="password">*Contraseña</label>
                        <input type="passwords" id="password" name="password">
                    </div><!-- /.input-group -->
                    <div class="send-group">
                        <a href="page-recuperar-contrasena.php" title="Recuperar contraseña">Recuperar contraseña</a>
                        <input type="submit" value="Ingresar" class="btn--submit">
                    </div><!-- /.send-group -->
                    <a href="page-mi-cuenta.php" title="Mi cuenta">Mi cuenta link</a>
                    <div class="loader"><span></span><span></span><span></span></div><!-- /.loader -->
                    <div class="mensaje--error">
                        <p>
                            Los datos ingresados en el Nombre o Contraseña no coinciden con ninguna cuenta registrada en Uban Deli.
                        </p>
                        <p>
                            Por favor vuelva a intentarlo.
                        </p>
                    </div><!-- /.mensaje--error -->
                </form><!-- /.formulario formulario--ingreso -->
            </div><!-- /.formulario -->
        </div><!-- /.tabs__box -->
        <div class="tabs__box js-tab-content" id="cuenta">
            <h1 class="title">Crear cuenta</h1><!-- /.title -->
            <p class="text-bajada">
                Utiliza el siguiente formulario y escribe en dirección tu lugar de despacho para comprobar si es posible realizar el delivery de nuestros sandwiches, sushi, wraps, ensaladas y postres.
            </p>
            <div class="crear-form">
                <form action="" class="formulario formulario--crear">
                    <div id="map" class="map-seccion"></div>
                    <div class="input--button">
                        <div class="input-group group">
                            <label for="address">*Dirección</label>
                            <input type="text" name="direccion" id="direccion" placeholder="Direcci&oacute;n">
                        </div><!-- /.input-group -->
                        <input type="button" value="Buscar" id="buscar">
                    </div><!-- /.input--button -->
                    <p class="mensaje"></p><!-- /.mensaje -->
                    <div class="content--slide mtop">
                        <div class="input-group group slightbig">
                            <label for="place">Nº Depto/oficina</label>
                            <input type="text" id="place" name="place" placeholder="Ingresa el número de tu departamento u oficina">
                        </div><!-- /.input-group -->
                        <div class="textarea-group group">
                            <label for="referencia">Referencia</label>
                            <textarea name="referencia" id="referencia" placeholder="Ingresa alguna referencia u observación"></textarea>
                        </div><!-- /.textarea-group -->
                        <h4 class="title__crear">Información cliente</h4>
                        <div class="input-group group">
                            <label for="nickname">*Nombre</label>
                            <input type="text" id="nickname" name="nickname">
                        </div><!-- /.input-group -->
                        <div class="input-group group">
                            <label for="lastname">*Apellido</label>
                            <input type="text" id="lastname" name="lastname">
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
                                    <select name="month" id="month">
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
                        </div>
                        <div class="input-group group">
                            <label for="newpass">*Contraseña</label>
                            <input type="passwords" id="newpass" name="newpass">
                        </div><!-- /.input-group -->
                        <div class="input-group group">
                            <label for="newpass_again">*Repetir</label>
                            <input type="passwords" id="newpass_again" name="newpass_again">
                        </div><!-- /.input-group -->
                        <div class="checkbox-group group">
                            <label for="terminos">Acepto los Términos y Condiciones Políticas de Privacidad</label>
                            <input type="checkbox" id="terminos" name="terminos">
                        </div><!-- /.checkbox-group -->
                        <div class="checkbox-group group">
                            <label for="news">Acepto suscribirme a Newsletter</label>
                            <input type="checkbox" id="news" name="news">
                        </div><!-- /.checkbox-group -->
                        <div class="send-group mtop">
                            <input type="submit" class="btn--submit" value="Crear Cuenta">
                            <div class="loader"><span></span><span></span><span></span></div><!-- /.loader -->
                        </div><!-- /.send-group -->
                    </div><!-- /.content--slider -->
                </form><!-- /.formulario formulario--cuenta -->
            </div><!-- /.formulario -->
        </div><!-- /.tabs__box -->
    </div><!-- /.tabs__container -->
</div><!-- /.ingreso wrap -->

<?php include 'footer.php'; ?>
<script type="text/javascript">

    $("#buscar").click(function(){
        codeAddress();
    });

    var map;
    var geocoder;
    var bermudaTriangle;
    var markers = [];

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -33.416341, lng: -70.57779829999998},
            zoom: 14,
            mapTypeControl: false,
            zoomControl: false,
            scaleControl: false,
            streetViewControl: false,
            scrollwheel: false
        });

        geocoder = new google.maps.Geocoder();

        dibujarZona();
    }

    function codeAddress() {

        $(".mensaje").removeClass('fail');
        $(".mensaje").removeClass('success');

        deleteMarkers();

        var address = document.getElementById('direccion').value;

        if(address==''){
            alert('El campo dirección no puede estar vacío.');
            return;
        }

        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {

                if(google.maps.geometry.poly.containsLocation(results[0].geometry.location, bermudaTriangle)){

                    map.setCenter(results[0].geometry.location);

                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location
                    });

                    markers.push(marker);

                    $(".mensaje").addClass('success');
                    $(".mensaje").text('La dirección se encuentra en el área de despacho').slideDown().delay(3000).slideUp();
                    $('.content--slide').slideDown();
                }else{
                    $(".mensaje").addClass('fail');
                    $(".mensaje").text('La dirección no se encuentra en el área de despacho').slideDown().delay(3000).slideUp();
                }

            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }

    function deleteMarkers() {
        clearMarkers();
        markers = [];
    }

    function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }

    // Removes the markers from the map, but keeps them in the array.
    function clearMarkers() {
        setMapOnAll(null);
    }

    function dibujarZona(){
        var triangleCoords = [
            {lat: -33.406868895887044, lng:  -70.57344675064087 },
            {lat: -33.406259869584986, lng:  -70.5720117688179 },
            {lat: -33.405847878783135, lng:  -70.57085037231445 },
            {lat: -33.405435886027455, lng:  -70.56950390338898 },
            {lat: -33.405191824179994, lng:  -70.56868314743042 },
            {lat: -33.40373863439811,  lng:  -70.56924104690552 },
            {lat: -33.40226974606515,  lng:  -70.56971848011017 },
            {lat: -33.400536605029515, lng:  -70.57027637958527 },
            {lat: -33.40090831519212,  lng:  -70.57217538356781 },
            {lat: -33.40169203622776,  lng:  -70.57414948940277 },
            {lat: -33.40228765948709,  lng:  -70.57563543319702 },
            {lat: -33.40394911331406,  lng:  -70.57966411113739 },
            {lat: -33.40479998033028,  lng:  -70.58161675930023 },
            {lat: -33.40501493488953,  lng:  -70.58214247226715 },
            {lat: -33.405641882649526, lng:  -70.5793046951294 },
            {lat: -33.40636734512501,  lng:  -70.57603240013123 },
        ];

        /*
                -33.41439180982194 -70.58449745178223
                -33.423418446419426 -70.57943344116211
                -33.4166843778529 -70.56467056274414
                -33.40880342170112 -70.56750297546387
                */

        // Construct the polygon.
        bermudaTriangle = new google.maps.Polygon({
            paths: triangleCoords,
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.35
        });
        bermudaTriangle.setMap(map);
    }


</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?libraries=geometry&callback=initMap"></script>
