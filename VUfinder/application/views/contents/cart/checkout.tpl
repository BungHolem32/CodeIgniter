{extends file='templates/site/scripts.tpl'}
{*--------------------------------------------------Checkout page ---------------------------------------------------*}
{block name="content"}

    {if ($cart->total_items()>0)}

        <div   class="checkout-tpl">
            <h2>CHECKOUT</h2>
            <form action="{site_name()}cart/update_Cart/"  method="post" id="checkout-form">

            <table cellpadding="2"  style="width:100%" border="0" >

                <tr>
                    <th>QTY</th>
                    <th>Item Description</th>
                    <th style="text-align:right">Item Price</th>
                    <th style="text-align:right">Sub-Total</th>
                </tr>
                {foreach $cart->contents() as $items}

                    {*{if (in_array($items['id'],$items))}*}

                    <input type="hidden" name="{$items@iteration}[rowid]" value="{$items['rowid']}"/>

                    <tr>
                        <td class="button-checkout">

                            <img  src = '/public/img/minus.png' data-role="down" class="update-cart-btn" onclick="removeLocalStorage({$items['id']},{$items['qty']},{$cart->total_items()})"  />
                            <input type="text" name="{$items@iteration}[qty]"  value="{$items['qty']}" min="0"   />
                            <img  src = '/public/img/plus.png' data-role="up" class="update-cart-btn"  />

                        </td>
                        <td>
                            {$items['name']}

                                    {if ($cart->has_options($items['rowid'])) == TRUE}
                                <p>
                                    {foreach $cart->product_options($items['rowid']) as $option_name => $option_value}
                                        <strong>{$option_name}:</strong> {$option_value}<br />
                                    {/foreach}
                                </p>
                                   {/if}
                        </td>

                        <td style="text-align:right"> {$cart->format_number($items['price'])}</td>
                        <td style="text-align:right">${$cart->format_number($items['subtotal'])}</td>
                    </tr>

                {/foreach}

                <tr>
                    <td colspan="2"> </td>
                    <td class="right"><strong>Total</strong></td>
                    <td class="right">${$cart->format_number({$cart->total()})}</td>
                </tr>

            </table>

        <input class='order' type="button" value="CheckOut"  onclick = " window.location = '{site_name()}cart/payment_N_shipping/'" />
        </form>
    </div>

        <div class="article">Thanks For Your Order , We Will Contact you As soon as Possible</div>

    {else}

        {redirect()}/products

    {/if}


{/block}