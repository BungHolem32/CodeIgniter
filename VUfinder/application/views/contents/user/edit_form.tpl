{extends file='templates/site/scripts.tpl'}
{*--------------------------------------------------Edit page ---------------------------------------------------*}
{block name="content"}


<div class=" edit-tpl ">
    <h3 class="centered">account information</h3>

    <!--error reporting-->
    <div class="error_val" >{if !empty($validate)}{$validate}{/if}</div>

    <!-- change first name field-->
    <form action="/user/edit_form" method="post" >
        <div class="form-wrapper">
            <p class="form_hide">Hide</p>

            <li>First Name <br/> {$user.first}</li>
            <input class="input" type='text'  name="firstName" value="{$user.first}" />

            <p class="change">Change</p>
            <label class='centered' for="password_validation">Password</label>
            <input type="password" name="password-first" value=""/?>
            <input type="submit" class="submit_name" name="submit-first_name"  value="confirm"/>
        </div>
    </form>

    <!--change last name field-->
    <form action="/user/edit_form" method="post" >
        <div class="form-wrapper">
            <p class="form_hide">Hide</p>
            <li>Last Name <br/> {$user.last}  </li>
            <input class="input" type='text'  name="lastName" value="{$user.last}" />

            <p class="change">Change</p>
            <label class='centered' for="password_validation">Password</label>
            <input type="password" name="password-last" value="" /?>
            <input type="submit" class="submit_last" name="submit-last_name" value="confirm"/>
        </div>
    </form>


    <!--change email field -->
    <form action="/user/edit_form" method="post" >
        <div class="form-wrapper">
            <p class="form_hide">Hide</p>
            <li>Email Address <br/>{$user.email}</li>
            <input class="input" type='text' name="email"  value="{$user.email}"/>

            <p class="change">Change</p>
            <label class='center' for="password_validation">Password</label>
            <input type="password" name="password-email" value=""/?>
            <input type="submit" class="submit_email" name="submit-email" value="confirm"/>
        </div>
    </form>


    <!--change gender  field-->
     <form action="/user/edit_form" method="post" >
         <div class="form-wrapper">
            <p class="form_hide">Hide</p>
            <li>gender <br />  {$user.gender} </li>


            <div class="input radio_gender">
                <label for="male" class="gender" >Male
                    <input class="edit gender" type='radio' value="male" name="gender" />
                </label >
                <label for="female" class="gender" >Female
                    <input class="edit gender" type='radio' value="female" name="gender" />
                </label >
            </div>

            <p class="change">Change</p>
            <label class='centered' for="password_validation">Password</label>
            <input type="password" name="password-gender" value="" /?>
            <input type="submit" class="submit_gender" name="submit-gender" value="confirm"/>
        </div>
     </form>

    <!--password change field-->
    <form action="/user/edit_form" method="post" >
        <div class="form-wrapper">
            <p class="form_hide">Hide</p>
            <li>current Password <br/></li>

            <input class="input" type='password' name="password-password" value="" />

            <p class="change">Change</p>
            <label class='center' for="password_validation">NEW Password</label>
            <input type="password" name="password"  value=""/?>
            <input type="submit" class="submit_email" name="submit-password" value="confirm"/>
        </div>
    </form>


</div>

{/block}
{*--------------------------------------------------Edit page ---------------------------------------------------*}
