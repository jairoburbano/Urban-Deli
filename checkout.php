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
<h1 class="title">Finalizar compra</h1><!-- /.title -->
<div class="woocommerce">
    <div class="woocommerce-info">¿Tienes un cupón? <a href="#" class="showcoupon">Haz clic aquí para introducir tu código</a></div>
    <form class="checkout_coupon" method="post" style="display:none">
        <p class="form-row form-row-first">
            <input type="text" name="coupon_code" class="input-text" placeholder="Código de cupón" id="coupon_code" value="">
        </p>
        <p class="form-row form-row-last">
            <input type="submit" class="button" name="apply_coupon" value="Aplicar cupón">
        </p>
        <div class="clear"></div>
    </form>
    <form name="checkout" method="post" class="checkout woocommerce-checkout" action="http://urbandeli.reactorlabs.net/checkout/" enctype="multipart/form-data">
        <div class="col2-set" id="customer_details">
            <div class="col-1">
                <div class="woocommerce-billing-fields">
                    <h3>Detalles de facturación</h3>
                    <p class="form-row form-row form-row-first validate-required" id="billing_first_name_field"><label for="billing_first_name" class="">Nombre <abbr class="required" title="obligatorio">*</abbr></label><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value=""></p>
                    <p class="form-row form-row form-row-last validate-required" id="billing_last_name_field"><label for="billing_last_name" class="">Apellido <abbr class="required" title="obligatorio">*</abbr></label><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value=""></p><div class="clear"></div>
                    <p class="form-row form-row form-row-wide" id="billing_company_field"><label for="billing_company" class="">Nombre de la empresa</label><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value=""></p>
                    <p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field"><label for="billing_email" class="">Dirección de correo electrónico <abbr class="required" title="obligatorio">*</abbr></label><input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="f.trivino@reactor.cl"></p>
                    <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field"><label for="billing_phone" class="">Teléfono <abbr class="required" title="obligatorio">*</abbr></label><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value=""></p>
                    <div class="clear"></div>
                    <p class="form-row form-row woocommerce-validated" id="billing_address_1_field">
                        <label for="billing_address_1" class="">Dirección</label>
                        <select name="billing_address_1" id="billing_address_1" class="select " data-placeholder="">
                            <option value="Rosario Norte 530">Trabajo</option>
                        </select>
                    </p>
                </div>
            </div>
            <div class="col-2">
                <div class="woocommerce-shipping-fields">
                    <h3>Información adicional</h3>
                </div>
            </div>
        </div>
        <h3 id="order_review_heading">Tu pedido</h3>
        <div id="order_review" class="woocommerce-checkout-review-order">
            <table class="shop_table woocommerce-checkout-review-order-table">
                <thead>
                    <tr>
                        <th class="product-name">Producto</th>
                        <th class="product-total">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart_item">
                        <td class="product-name">
                            Ensalada C&nbsp;							 <strong class="product-quantity">× 1</strong>
                        </td>
                        <td class="product-total">
                            <span class="amount">$4,000</span>						
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="cart-subtotal">
                        <th>Subtotal</th>
                        <td><span class="amount">$4,000</span></td>
                    </tr>
                    <tr class="order-total">
                        <th>Total</th>
                        <td><strong><span class="amount">$4,000</span></strong> </td>
                    </tr>
                </tfoot>
            </table>
            <div id="payment" class="woocommerce-checkout-payment">
                <ul class="wc_payment_methods payment_methods methods">
                    <li class="wc_payment_method payment_method_bacs">
                        <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text="">
                        <label for="payment_method_bacs">
                            Transferencia Bancaria Directa 	</label>
                        <div class="payment_box payment_method_bacs">
                            <p>Realiza tu pago directamente en nuestra cuenta bancaria. Por favor usa la referencia del pedido como referencia de pago. El pedido no será enviado hasta que el importe completo haya sido recibido en nuestra cuenta.</p>
                        </div>
                    </li>
                    <li class="wc_payment_method payment_method_cod">
                        <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text="">
                        <label for="payment_method_cod">
                            Pago en efectivo 	</label>
                        <div class="payment_box payment_method_cod" style="display:none;">
                            <p>Pagar en efectivo al momento de la entrega.</p>
                        </div>
                    </li>
                    <li class="wc_payment_method payment_method_amipass">
                        <input id="payment_method_amipass" type="radio" class="input-radio" name="payment_method" value="amipass" data-order_button_text="">
                        <label for="payment_method_amipass">
                            Amipass 	</label>
                    </li>
                    <li class="wc_payment_method payment_method_sodexo">
                        <input id="payment_method_sodexo" type="radio" class="input-radio" name="payment_method" value="sodexo" data-order_button_text="">
                        <label for="payment_method_sodexo">
                            Sodexo 	</label>
                    </li>
                    <li class="wc_payment_method payment_method_ticketrestaurant">
                        <input id="payment_method_ticketrestaurant" type="radio" class="input-radio" name="payment_method" value="ticketrestaurant" data-order_button_text="">
                        <label for="payment_method_ticketrestaurant">
                            Ticket Restaurant 	</label>
                    </li>
                    <li class="wc_payment_method payment_method_webpayplus">
                        <input id="payment_method_webpayplus" type="radio" class="input-radio" name="payment_method" value="webpayplus" data-order_button_text="">
                        <label for="payment_method_webpayplus">
                            Web Pay Plus <img src="http://urbandeli.reactorlabs.net/assets/plugins/webpay-woocommerce-plugin/classes/assets/images/logo.png" alt="Web Pay Plus">	</label>
                        <div class="payment_box payment_method_webpayplus" style="display:none;">
                            <p>Sistema de pago con tarjetas de crédito y debito chilenas.</p>
                        </div>
                    </li>
                </ul>
                <div class="form-row place-order">
                    <noscript>
                        Debido a que tu navegador no soporta JavaScript o lo tiene deshabilitado, asegúrate por favor de hacer clic en el botón &lt;em&gt;Actualizar totales&lt;/em&gt; antes de realizar el pedido. De no hacerlo, se te podría cobrar más de la cantidad indicada arriba.			&lt;br/&gt;&lt;input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Actualizar totales" /&gt;
                    </noscript>
                    <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Realizar el pedido" data-value="Realizar el pedido">
                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="cf29b8ce13"><input type="hidden" name="_wp_http_referer" value="/checkout/?wc-ajax=update_order_review">	</div>
            </div>
        </div>
    </form>
</div>
<?php include 'footer.php'; ?>