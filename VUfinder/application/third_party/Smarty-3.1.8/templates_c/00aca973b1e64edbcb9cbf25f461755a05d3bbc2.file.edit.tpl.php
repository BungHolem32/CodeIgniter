<?php /* Smarty version Smarty-3.1.8, created on 2015-02-14 19:06:53
         compiled from "application\views\templates\contents\user\edit_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2291854df8865573b72-43535518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00aca973b1e64edbcb9cbf25f461755a05d3bbc2' => 
    array (
      0 => 'application\\views\\templates\\contents\\user\\edit_form.tpl',
      1 => 1423936187,
      2 => 'file',
    ),
    'e99c00dbdcb7e5cf69cc35eaea03e94349c13e03' => 
    array (
      0 => 'application\\views\\templates\\scripts.tpl',
      1 => 1423929727,
      2 => 'file',
    ),
    'b533d1edca42649560846b9ebc978c0398de6ee9' => 
    array (
      0 => 'application\\views\\templates\\footer.tpl',
      1 => 1423913172,
      2 => 'file',
    ),
    'b668fb43682cf126ad7db6562e5e1f4b72af9970' => 
    array (
      0 => 'application\\views\\templates\\nav-bar.tpl',
      1 => 1423929727,
      2 => 'file',
    ),
    '1bf42d4cd0b48fb274a57681049c18fe1295050f' => 
    array (
      0 => 'application\\views\\templates\\css.tpl',
      1 => 1423929727,
      2 => 'file',
    ),
    '42b7de14b4c4a62a86a2e3813af6dfe11432342b' => 
    array (
      0 => 'application\\views\\templates\\main_layout.tpl',
      1 => 1423929681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2291854df8865573b72-43535518',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54df8865661ed5_29151463',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df8865661ed5_29151463')) {function content_54df8865661ed5_29151463($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    
<!--libararys  css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" >
<!--own css -->
<link rel="stylesheet" href= "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/fonts/Digital-7.css" />
<link rel="stylesheet" href= "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/css/general_style.css" />
<link rel="stylesheet" href= "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/css/style.css" />
<link rel="stylesheet" href= "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/css/responsive.css" />
<!--user the site url method  throw js-->
<title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <script> var CI_ROOT =' <?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
 '; </script>

</head>
    <body >
        <div class="container-fluid">
            <div class = "container row">
                <div class = "header centered">

                    
                </div>


                    <div class="content" >

<div class=" edit-tpl ">
    <h3 class="centered">account information</h3>




    <!--first name field-->
    <form action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/edit/" method="post" >
        <div>
            <li>First Name <br/> <?php echo $_smarty_tpl->tpl_vars['user']->value['first'];?>
 </li>
            <input class="input" type='text'  name="firstName" />

            <p class="change">Change</p>
            <label class='centered' for="password_validation">Password</label>
            <input type="password" name="password-first" /?<?php ?>>
            <input type="submit" class="submit_name" name="submit-first_name"  value="confirm"/>
        </div>
    </form>

    <!--last name field-->
    <form action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/edit/" method="post" >
        <div>
            <li>Last Name <br/> <?php echo $_smarty_tpl->tpl_vars['user']->value['last'];?>
  </li>
            <input class="input" type='text'  name="lastName" />

            <p class="change">Change</p>
            <label class='centered' for="password_validation">Password</label>
            <input type="password" name="password-last" /?<?php ?>>
            <input type="submit" class="submit_last" name="submit-last_name" value="confirm"/>
        </div>
    </form>


    <!--email feild -->
    <form action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/edit/" method="post" >
        <div>
            <li>Email Address <br/><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</li>

            <input class="input" type='text' name="email" />

            <p class="change">Change</p>
            <label class='center' for="password_validation">Password</label>
            <input type="password" name="password-email" /?<?php ?>>
            <input type="submit" class="submit_email" name="submit-email" value="confirm"/>
        </div>
    </form>



    <!--gender name field-->
     <form action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/edit" method="post" >
         <div>
            <li>gender <br />  <?php echo $_smarty_tpl->tpl_vars['user']->value['gender'];?>
 </li>

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
            <input type="password" name="password-gender" /?<?php ?>>
            <input type="submit" class="submit_gender" name="submit-gender" value="confirm"/>
        </div>
     </form>


    <form action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/edit" method="post" >
        <div>
            <li>New Password <br/>   </li>

            <input class="input" type='password' name="password" />

            <p class="change">Change</p>
            <label class='center' for="password_validation"> Password</label>
            <input type="password" name="password-password" /?<?php ?>>
            <input type="submit" class="submit_email" name="submit-password" value="confirm"/>
        </div>
    </form>

    <!--error reporting-->
    <div class="error_val" > <?php echo $_smarty_tpl->tpl_vars['validation_error']->value;?>
</div >
</div>

</div >

            </div>
        </div>

        <ul class="menu">
<li class = "tab home">     <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">Home              </a> </li>
<li class = "tab about">    <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
about/">About       </a> </li>
<li class = "tab products"> <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
products/">Products </a> </li>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value['is_login'])&&$_smarty_tpl->tpl_vars['data']->value['is_login']==false) {?>

<li id="log" class = "tab login"> <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/login/">Login           </a> </li>
<li class = "tab register">       <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/register/">Registration </a> </li>

<?php } else { ?>

<li class="tab" ><h3 class = "tab title_font">  Welcome <a href=" <?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/edit/" ><?php echo $_smarty_tpl->tpl_vars['session']->value['firstName'];?>
</h3>
                             <?php if (($_smarty_tpl->tpl_vars['data']->value['is_admin'])==true) {?>
                                <a class=" tab title_font dashboard" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
cms/dashboard/">CMS Dashboard</a>
                             <?php }?>
</li>
<li class = "tab logout">         <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/logout/">logout   </a> </li>

<?php }?>

<li class = "tab contactUs">      <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
contactUs/">Contact Us </a> </li>
<li class=  "tab image">
   <?php if ($_smarty_tpl->tpl_vars['cart']->value>0) {?>
        <span> <?php echo $_smarty_tpl->tpl_vars['cart']->value;?>
 </span>
   <?php }?>
                                  <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
cart/checkout/"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/img/cart.png" alt="" /></a>
</li>
</ul>

        <div class="script">

        
        <!--wrapper rectangle-->
        <div class="rectangle-bottom-left"></div>
        <div class="rectangle-bottom-right"></div>
        <div class="rectangle-top-left"></div>
        <div class="rectangle-top-right"></div>
        <!-- libarary  script files-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/lib/bootstrap.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/lib/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">tinymce.init({ selector: "textarea" });</script>
        <!--own-js-->
        <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/jquery.js"></script >
        <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/cart.js"></script>

    </div>
    </body>
</html>
<?php }} ?>
