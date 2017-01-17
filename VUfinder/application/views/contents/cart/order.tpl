{extends file='templates/site/scripts.tpl'}
{*--------------------------------------------------Order page ---------------------------------------------------*}
{block name="content"}
    <div class="order_summery">

        <div class="order_complete">{if empty($order_completed)}
            <div class="shipping_n_payment">
                <!-- title section -->
                <div class="shipping_n_payment_info">
                    <h2>shipping_n_payment</h2>

                    <div class="headers">
                        <div class="payment_info"><h4>Full Name</h4> <br/> {$address_n_payment.fullname} </div>
                        <div class="payment_info"><h4>Street</h4>    <br/> {$address_n_payment.street}</div>
                        <div class="payment_info"><h4>City</h4>      <br/> {$address_n_payment.city}</div>
                        <div class="payment_info"><h4>Zip Code</h4>  <br/> {$address_n_payment.zip_code}</div>
                        <div class="payment_info"><h4>Payment</h4>   <br/> {$address_n_payment.payment}</div>
                        <div class="payment_info"><h4>Card number</h4> <br/> {$address_n_payment.card_number}</div>
                    </div>
                </div>
            </div>


            <!-- order information section -->
            <div class="form-order-information">

                <!-- title section -->
                <h2>ORDER SUMMERY</h2>

                <table>
                    <div class="oi">
                        {foreach $order as $key=>$value}
                            <div class="order_info"><h4>Product</h4>  {$value.name}</div>
                            <div class="order_info"><h4>Price</h4>    {$value.price}$</div>
                            <div class="order_info"><h4>Quantity</h4> {$value.qty}</div>
                            <div class="order_info"><h4>Subtotal</h4> {$value.subtotal}$</div>
                            <div class="order_info"><h4>Total</h4> {$totalSum}$</div>
                        {/foreach}
                    </div>
                </table>

                <!-- print section -->
                <a href="javascript:window.print()">Print the Order</a>

                <form action="{current_url()}" method="post">
                    <input type="submit" name="submit" value="sumbit order"/>
                </form>

            </div>
        </div>
        {else}

        <h2>we thank you  {$user_info.fullname} for buying with out company ViewFinder &copy; {$year} <br/>
            your order info was sent to your mail. <br/>
            your order been Placed , We contact you as soon as possible </h2>

        {/if}
    </div>
{/block}


