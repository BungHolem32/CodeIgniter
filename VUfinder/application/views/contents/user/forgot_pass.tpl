{extends file='templates/site/scripts.tpl'}
{*--------------------------------------------------Forgot Password page ---------------------------------------------------*}
{block name="content"}

<div class="forgot_password_tab">

    <!--title forgot password-->
    <h3 class="text-center">recover Password</h3>

    <form action="{current_url()}" method="post">


        <label for="email" >Email <br /></label >
        <input name="email" type="text"/>

        <!--error reporting-->
        <div class="error_val" >{$validate}</div>

        <input name="submit_pass" type="submit" value="send"/>
    </form>

</div>




{/block}