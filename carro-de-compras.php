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
<div class="wrap compra">
    <h1 class="title">Carro de compras</h1><!-- /.title -->
    <div class="woocommerce">
        <div class="closed-store">
            <p>Te esperamos con los productos más ricos y frescos disponibles para comprar en linea.</p>
            <div class="closed-store__big">Lunes a Viernes <br> Desde las <strong>9:00</strong> hasta <br> las <strong>17:00 hrs.</strong></div>
        </div>
        <form action="checkout.php" method="post">
            <table class="shop_table shop_table_responsive cart" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-remove">&nbsp;</th>
                        <th class="product-thumbnail">&nbsp;</th>
                        <th class="product-name">Producto</th>
                        <th class="product-price">Precio</th>
                        <th class="product-quantity">Cantidad</th>
                        <th class="product-subtotal">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart_item">
                        <td class="product-remove">
                            <a href="#" class="remove" title="Remove this item" data-product_id="79" data-product_sku="">&times;</a>
                        </td>
                        <td class="product-thumbnail">
                            <a href="single-producto.php">
                                <img src="assets/_0003_avocado_roll.png" alt="Placeholder" width="180" class="woocommerce-placeholder wp-post-image" height="180" />
                            </a>
                        </td>
                        <td class="product-name" data-title="Product">
                            <a href="single-producto.php">Ensalada C</a>					
                        </td>
                        <td class="product-price" data-title="Price">
                            <span class="amount">$4,000</span>					
                        </td>
                        <td class="product-quantity" data-title="Quantity">
                            <div class="quantity">
                                <input type="number" step="1" min="0" max="" name="cart[d1fe173d08e959397adf34b1d77e88d7][qty]" value="2" title="Qty" class="input-text qty text" size="4" />
                            </div>
                        </td>
                        <td class="product-subtotal" data-title="Total">
                            <span class="amount">$8,000</span>					
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="product-remove">
                            <a href="" class="remove" title="Remove this item" data-product_id="77" data-product_sku="">&times;</a>		
                        </td>
                        <td class="product-thumbnail">
                            <a href="http://urban.dev/?product=ensalada-a">
                                <img src="assets/_0007_benedictino_sin_gas.png" alt="Placeholder" width="180" class="woocommerce-placeholder wp-post-image" height="180" />
                            </a>
                        </td>
                        <td class="product-name" data-title="Product">
                            <a href="http://urban.dev/?product=ensalada-a">Ensalada A</a>
                        </td>
                        <td class="product-price" data-title="Price">
                            <span class="amount">$4,000</span>
                        </td>
                        <td class="product-quantity" data-title="Quantity">
                            <div class="quantity">
                                <input type="number" step="1" min="0" max="" name="cart[28dd2c7955ce926456240b2ff0100bde][qty]" value="2" title="Qty" class="input-text qty text" size="4" />
                            </div>
                        </td>
                        <td class="product-subtotal" data-title="Total">
                            <span class="amount">$8,000</span>					
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" class="actions">
                            <div class="coupon">
                                <label for="coupon_code">Cupón:</label> 
                                <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Código del cupón" /> 
                                <input type="submit" class="button" name="apply_coupon" value="Aplicar cupón" />
                            </div>
                            <input type="submit" class="button" name="update_cart" value="Actualizar carrito" />
                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="c7f6f092a7" />
                            <input type="hidden" name="_wp_http_referer" value="/?page_id=6" />			
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <div class="cart-collaterals">
            <div class="cart_totals ">
                <h2>Total</h2>
                <table cellspacing="0" class="shop_table shop_table_responsive">
                    <tr class="cart-subtotal">
                        <th>Subtotal</th>
                        <td data-title="Subtotal">
                            <span class="amount">$16,000</span>
                        </td>
                    </tr>
                    <tr class="shipping">
                        <th>Envío</th>
                        <td data-title="Envío">
                            <p>La compra debe tener un mínimo de $4.000.</p>
                        </td>
                        <td data-title="Envío">
                            Envío gratuito <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="free_shipping" class="shipping_method">		

                        </td>
                    </tr>
                    <tr class="order-total">
                        <th>Total</th>
                        <td data-title="Total">
                            <strong>
                                <span class="amount">$16,000</span>
                            </strong> 
                        </td>
                    </tr>
                </table>
                <div class="wc-proceed-to-checkout">
                    <a href="checkout.php" class="checkout-button button alt wc-forward">Ir a la caja</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>