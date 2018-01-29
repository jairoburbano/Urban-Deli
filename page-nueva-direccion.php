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
    <div class="wrap cuenta__content mi__cuenta mi--large">
        <h1 class="title">Direcciones</h1><!-- /.title -->
        <div class="direccion-cambio-form">
            <form action="" class="formulario formulario--direccion-cambio">
                <div class="mi--small">
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
                            <label for="name">Nº Depto/oficina</label>
                            <input type="text" id="name" name="name" placeholder="Numero de depto/oficina">
                        </div><!-- /.input-group -->
                        <div class="textarea-group group">
                            <label for="referencia">Referencia</label>
                            <textarea name="referencia" id="referencia" placeholder="Ingresa alguna referencia u observación"></textarea>
                        </div><!-- /.textarea-group -->
                        <div class="send-group mtop">
                            <input type="submit" value="Enviar" class="btn--submit">
                            <div class="loader"><span></span><span></span><span></span></div><!-- /.loader -->
                        </div><!-- /.send-group -->
                    </div><!-- /.content--slide -->
                </div><!-- /.mi--small -->
            </form><!-- /.formulario formulario--direccion -->
        </div><!-- /.direccion-cambio-form -->
    </div><!-- /.cuenta__content -->
</div><!-- /.cuenta -->
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
            zoom: 14
        });

        //-33.416341 -70.57779829999998

        geocoder = new google.maps.Geocoder();

        /*
                google.maps.event.addListener(map, 'click', function(event) {
                    marker = new google.maps.Marker({position: event.latLng, map: map});
                    console.log( event.latLng.lat() + ' ' + event.latLng.lng() );
                });
                */
        /*
               google.maps.event.addListener(map, 'click', function(e) {
                    if(google.maps.geometry.poly.containsLocation(e.latLng, bermudaTriangle)){
                        console.log('dentro');
                    }else{
                        console.log('fuera');
                    }

               });
               */

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
                    $(".mensaje").empty().html('La dirección se encuentra en el área de despacho').slideDown().delay(3000).slideUp();
                    $('.content--slide').slideDown();
                }else{
                    $(".mensaje").addClass('fail');
                    $(".mensaje").empty().html('La dirección no se encuentra en el área de despacho').slideDown().delay(3000).slideUp();
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
        // Define the LatLng coordinates for the polygon's path.
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