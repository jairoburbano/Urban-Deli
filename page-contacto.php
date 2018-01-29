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
<div class="contacto wrap">
    <h1 class="title">Contacto</h1><!-- /.title -->
    <div class="bajada-seccion">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes.
        </p>
    </div><!-- /.bajada-seccion -->
    <div class="contact-form">
        <form action="" class="formulario formulario--contacto">
            <div class="col--half">
                <div class="input-group group">
                    <label for="name">*Nombre</label>
                    <input type="text" id="name" name="name">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="mail">*Mail</label>
                    <input type="email" id="mail" name="mail">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="subject">Asunto</label>
                    <input type="text" id="subject" name="subject">
                </div><!-- /.input-group -->
            </div><!-- /.col--half -->
            <div class="col--half">
                <div class="textarea-group group">
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                </div><!-- /.textarea-group -->
                <div class="send-group">
                    <input type="submit" value="Enviar" class="btn--submit">
                </div><!-- /.send-group -->
                <div class="loader loader--contacto"><span></span><span></span><span></span></div><!-- /.loader -->
            </div><!-- /.col--half -->
        </form><!-- /.formulario formulario--contacto -->
    </div><!-- /.contact-form -->
</div><!-- /.contacto wrap -->
<div class="map--box">
    <div id="map"></div><!-- /#map -->
    <div class="directions">
        <h2 class="direction__title">BOULEVARD nueva las condes</h2><!-- /.direction__title -->
        <p>Urban Deli Takeaway Food</p>
        <p>
            Cerro El Plomo 5680 local 103, Las Condes, Santiago
        </p>
        <p>+562 2242 0639 -</p>
        <a href="mailto:contacto@urbandeli.cl" title="contactanos">contacto@urbandeli.cl</a>
        <a href="#" title="Ver Mapa" class="btn--border">Ver Mapa</a>
    </div><!-- /.directions -->
</div><!-- /.map--box -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    function initialize() {
        //MAPA
        var myLatlng = new google.maps.LatLng(-33.418580, -70.599599);
        var thisLatlng = new google.maps.LatLng(-33.418580, -70.599599);
        var myOptions = {
            zoom: 15, //nivel de zoom
            center: myLatlng,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        var image = '/img/marker.svg'; //imagen del marcador
        var marker = new google.maps.Marker({
            position: thisLatlng,
            map: map,
            icon: image
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php include 'footer.php'; ?>