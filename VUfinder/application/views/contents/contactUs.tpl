{extends file='templates/site/scripts.tpl'}
{*--------------------------------------------------Contact us page ---------------------------------------------------*}
{block name="content"}
    <div class="contact_us-tmp">
        <div class="forms">
            <div class="error">{$validation_error}</div>
            <h2 class="text-center"> Contact Us </h2>

            <form action="{current_url()}" method="post">

                <label for="name"><span class="required">*</span>Name</label>
                <input type="text" name="name" placeholder="*only character*" required="required" maxlength="40"/>
                <label for="email"><span class="required">*</span> Email</label>
                <input type="text" name="email" placeholder="*your email*" required="required" maxlength="40"/>
                <label for="phone"><span class="required">*</span>Phone</label>
                <input type="text" name="phone" placeholder="*only digits*" required="required" maxlength="10"/>
                <label for="order">Order#</label>
                <input type="text" name="order" placeholder="*order number*"/>
                <label for="Message">Massage</label>
                <textarea name="message" id="" cols="30" rows="10"></textarea>
                <span>* - required field</span>
                <input type="submit" name="submit" value="Contact"/>
            </form>

        </div>

    </div>
    {*--------------------------------------------------Contact us page ---------------------------------------------------*}
{/block}