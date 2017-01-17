{extends file='templates/site/scripts.tpl'}
{*--------------------------------------------------Forgot Password page ---------------------------------------------------*}
{block name="content"}



<div class="forgot_password_tab centered" ><br />

    <!--error reporting-->
    <div class="error_val" >{$validation_error}</div>

    <form action="/user/forgot_password" method="post">

        <!--title forgot password-->
        <h3>recover Password</h3>

         <label for="email" >Email <br /></label>
         <input type="text" name="email_forgot_password"/><br /><br />
         <input type="text" name="what"/><br /><br />

         <input class='submit-tab font_digital' type="submit" name="sumbit" value="submit"/>

    </form>

</div>
{*--------------------------------------------------Forgot Password page ---------------------------------------------------*}
{/block}
