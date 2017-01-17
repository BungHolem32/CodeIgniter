{extends file='templates/site/scripts.tpl'}
{*--------------------------------------------------Login page ---------------------------------------------------*}
{block name="content"}

<div id='' class="login-tmp centered" ><br />

    <!--login title-->
    <h2 class="login-title centered font_digital "> Login Page  </h2 >

    <!--error reporting-->
    <div class="error_val" >{$validation_error}</div>


    <!--open form-->
    <form action='/user/login' method='post'>

    <!--Email input-->
    <label for="email font_digital" >Email<br />
        <input type="text" name="email" value='{set_value('email')}' />
    </label ><br />

    <!--Password input-->
    <label for="password font_digital" >Password <br />
        <input type="password" name="password" value ='' />
    </label ><br /><br />

    <!--forgot_password Link-->
    <a class="forgot_password font_digital" href="/user/forgot_pass" > Forgot Password ? <br /></a ><br />

    <!--submit-tab-->
    <input  class="submit-tab  font_digital" type = "submit" name = "submit" value = "submit"  /><br />

    <!--close form-->
    </form >
</div >

{*--------------------------------------------------Login page ---------------------------------------------------*}

{/block}