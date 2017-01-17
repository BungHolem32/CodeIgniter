{extends file='templates/site/scripts.tpl'}
{*--------------------------------------------------Register page ---------------------------------------------------*}
{block name="content"}


    <div class="login-tmp centered register" ><br />

        <!--register title-->
        <h2 class="login-title centered font_digital "> Register Page  </h2 >

        <!--error reporting-->
        <div class="error_val" > {$validation_error}</div >

        <!--open form-->
        <form action="/user/register" method="post" >

            <!--first-name input-->
            <label for="name" >First Name<br />
                <input type="text" name="firstName"  />
            </label ><br />

            <!--last-name input-->
            <label for="name" >Last Name<br />
                <input type="text" name="lastName" value='' />
            </label ><br />

            <!--gender input-->
            <label for="gender" >Gender <br />
                <span>Male  </span><input type="radio" name="gender" value="Male"   />
                <span>Female</span><input type="radio" name="gender" value="Female" />
            </label ><br />

            <!--email input-->
            <label for="email" >Email<br />
                <input type="text" name="email"  />
            </label ><br />

            <!--password input-->
            <label for="password" >Password <br />
                <input type="password" name="password"  />
            </label ><br />

            <!--rewrite password input-->
            <label for="rewrite_password" >Renter Password <br />
                <input type="password" name="rewrite_password"  />
            </label ><br /><br />

            <!--submit input-->
            <input class="submit-tab font_digital" type ="submit" name = "submit" value = "signUp"  /><br />

        <!--close form-->
        </form>

    </div >

{/block}