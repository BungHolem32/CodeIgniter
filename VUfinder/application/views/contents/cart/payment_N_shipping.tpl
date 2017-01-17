{extends file='templates/site/scripts.tpl'}
{*--------------------------------------------------payment_shipping page ---------------------------------------------------*}
{block name="content"}

    <div class="payment_n_shipping">

        <div class="form">

            <h2>Shipping Info</h2>
            <div class="person_address">
                <form  action="{current_url()}" method="post">

                    <label for="full_name">Full Name</label>
                    <input type="text" name="fullname" class="" placeholder="first & last "/>

                    <label for="address">street</label>
                    <input type="text" name="street" class="" placeholder="street & number"/>

                    <label for="city">City</label>
                    <input type="text" name="city" class="" placeholder="city"/>

                    <label for="zip">Zip Code</label>
                    <input type="text" name="zip_code" class="" placeholder="zipcode only digits"/>

                    <div class="payment_method">
                        <label for="pay-method">Payment method</label><br/>
                        <span>Isracard</span><input type="checkbox" name="payment" value="isracard"/>
                        <span>Visa</span><input type="checkbox"     name="payment" value="visa"/>
                        <span>American Express</span><input type="checkbox" name="payment" value="american_express"/>
                    </div>

                    <div class="card_number">
                        <label for="pay-method">Card Number</label><br/>
                        <input type="text" name="card_number" onkeypress="return only_numbers(event)"/>
                    </div>

                    <div class="error_val" >{if $validate}{$validate}{/if} </div>
                    <div class="flashdata">{if !empty($flash_create)}{$flash_create}{/if}</div>


            </div>
            <input type="submit" name="submit_information" value="submit information"/>
            </form>
        </div>

    </div>






{/block}