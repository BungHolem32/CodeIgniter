<?php /* Smarty version Smarty-3.1.8, created on 2015-02-14 18:26:21
         compiled from "application\views\templates\contents\user\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:908954df853dd82406-45432294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1097b234428aec3fe96561c481337d0636d94940' => 
    array (
      0 => 'application\\views\\templates\\contents\\user\\login.tpl',
      1 => 1423934320,
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
  'nocache_hash' => '908954df853dd82406-45432294',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54df853de6c002_79697548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df853de6c002_79697548')) {function content_54df853de6c002_79697548($_smarty_tpl) {?><!doctype html>
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

<div id='' class="login-tmp centered" ><br />

    <!--login title-->
    <h2 class="login-title centered font_digital "> Login Page  </h2 >

    <!--error reporting-->
    <div class="error_val" > <?php echo $_smarty_tpl->tpl_vars['validation_error']->value;?>
</div >

    <!--open form-->
    <form action='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/login/' method='post'>

    <!--Email input-->
    <label for="email font_digital" >Email<br />
        <input type="text" name="email" value='' />
    </label ><br />

    <!--Password input-->
    <label for="password font_digital" >Password <br />
        <input type="password" name="password" value ='' />
    </label ><br /><br />

    <!--forgot_password Link-->
    <a class="forgot_password font_digital" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/forgot_password/" > Forgot Password ? <br /></a ><br />

    <!--submit-tab-->
    <input  class="submit-tab  font_digital" type = "submit" name = "submit" value = "submit"  /><br />

    <!--close form-->
    </form >
</div >



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